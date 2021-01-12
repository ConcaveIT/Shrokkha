<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cit;
use DB;
use App\Models\Upcoming;
use App\Models\Ourclients;
use App\Models\Recentcauses;
use App\Models\Ourgallary;
use App\Models\Ourvolunteers;
use App\Models\Core\Users;
use App\Models\Testimonials;
use App\Models\Websitesettings;
use App\Models\Vacancyannouncement;
use App\Notifications\arifPasswordResetNotification;
use Hash;

use Illuminate\Support\Str;
class VmslController extends Controller{
	

	public function event_single($id){
    $data['single'] = Upcoming::where('id', $id)->first();
    $data['title'] = Upcoming::where('id', $id)->first()->title;
		$data['ourclients'] = Ourclients::orderBy('id', 'DESC')->get();
    $data['setting'] = Websitesettings::where('id', 1)->first();
    
    if(!is_null($data['single'])){
      return view('layouts.default.template.singleEvent', $data);
    }else{
      return redirect()->route('index');
    }
	}
	public function causes_single($id){
    $data['single'] = Recentcauses::where('id', $id)->first();
    $data['title'] = Recentcauses::where('id', $id)->first()->title;
		$data['ourclients'] = Ourclients::orderBy('id', 'DESC')->get();
    $data['setting'] = Websitesettings::where('id', 1)->first();
    if(!is_null($data['single'])){
      return view('layouts.default.template.singleCauses', $data);
    }else{
      return redirect()->route('index');
    }
	}
	public function gallary(){
        $data['title'] = 'Gallery';
		$data['ourgallary'] = Ourgallary::all();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.gallary', $data);
	}
	public function volunteer_single($id){
    $data['volunteer'] = Ourvolunteers::where('id', $id)->first();
    $data['title'] = Ourvolunteers::where('id', $id)->first()->name;
		$data['ourclients'] = Ourclients::orderBy('id', 'DESC')->get();
    $data['setting'] = Websitesettings::where('id', 1)->first();
    if(!is_null($data['volunteer'])){
      return view('layouts.default.template.singleVolunteer', $data);
    }else{
      return redirect()->route('index');
    }
		
	}
	public function contact_page(){
    $data['title'] = 'Contact Us';
		$data['ourclients'] = Ourclients::orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.contact', $data);
	}
	public function contact_data(Request $request){
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
        $customMessages = [
            'name.required' => 'You have to fill the name field.',
            'phone.required' => 'You have to fill the phone field.',
            'email.required' => 'You have to fill the email field.',
            'message.required' => 'You have to fill the message field.',
        ];
        if ($this->validate($request, $rules, $customMessages)) {
            $data['name']    = $request->name;
            $data['email']   = $request->email;
            $data['phone']   =  $request->phone;
            $data['message'] = $request->message;
            DB::table('contact')->insert($data);
        }
        echo " <div class='row formSentMsg'>
        		<div class='col-md-12 mt-2'>
                        <p style='margin-top:10px; font-style:italic; color:green; '>Message send Successfully..!</p>
                </div>
                </div>
                <script type='text/javascript'>
                   $('.formSentMsg').delay(5000).fadeOut(300);
                </script>
            ";
	}
	
	public function contact_email(Request $request){
        $request->validate([
            'name'    => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);
        $from  = 'vmslfinl@server33.web-hosting.com';
        $to = $request->email;
        $email = $request->email;
        $subject = 'Customer Support';
        $message = $request->message;
        $name = $request->name;
        $body = "From: $name\n E-Mail: $from\n Message:\n $message";
        mail ($to, $subject, $body, $from);   
        echo " <div class='row formSentMsg'>
        		<div class='col-md-12 mt-2'>
                        <p style='margin-top:10px; font-style:italic; color:green;'>Message send Successfully..!</p>
                </div>
                </div>
                <script type='text/javascript'>
                   $('.formSentMsg').delay(5000).fadeOut(300);
                </script>
            ";
        
	}
	
	public function volunteer_account(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'email' => 'required|email',
            'profession' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'degree' => 'required',
            'experience' => 'required',
            'training' => 'required',
            'work_day' => 'required'
        ]);
        
      $data = new Ourvolunteers();
	    $image = $request->file('image');
	    if ($image) {
        	$image_name = date("Ymd".time());
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name.'.'.$ext;
        	$upload_path = public_path('/theme/img/team/');
        	//$image->move($upload_path, $image_full_name);
        	$data->image = $image_full_name;
	    }
        $data->name         = $request->name;
        $data->profession    = $request->profession;
        $data->short_description = $request->short_description;
        $data->description  = $request->description;
        $data->hobby        = $request->hobby;
        $data->degree       = $request->degree;
        $data->experience   = $request->experience;
        $data->training     = $request->training;
        $data->work_day     = $request->work_day;
        $data->facebook     = $request->facebook;
        $data->twitter      = $request->twitter;
        $data->linkedin     = $request->linkedin;
        $data->googleplus   = $request->googleplus;
        
        //$data->save();  
        
        $usedata             = new Users();
        $usedata->username   = $request->name;
        $usedata->email      = $request->email;
        $usedata->password   = Hash::make($request->password);
        $usedata->group_id   = 3;
        $usedata->created_at = now();
        $token = $usedata->remember_token = Str::random(32);
        $usedata->save();
        
        //$usedata->notify(new arifPasswordResetNotification($token));
        
        return back()->with('message', 'Success..! You are joined.');
        
	}
    public function verefy($token){
        echo $token;
    }
    
    
    public function grid_volunteer(){
    $data['title'] = 'Volunteers';
		$data['volunteer'] = Ourvolunteers::where('status', 1)->orderBy('id', 'DESC')->paginate(8);
		$data['ourclients'] = Ourclients::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.gridVolunteer', $data);
    }
	
    public function grid_event(){
    $data['title'] = 'Events';
		$data['upcoming'] = Upcoming::where('status', 1)->orderBy('id', 'DESC')->paginate(6);
		$data['ourclients'] = Ourclients::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.gridEvent', $data);
    }	
    public function grid_causes(){
    $data['title'] = 'Initiatives';
		$data['recentcauses'] = Recentcauses::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
		$data['ourclients'] = Ourclients::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.gridCauses', $data);
    }	
    
    
    public function about(){
        $data['title'] = 'About Us';
		$data['testimonials'] = Testimonials::orderBy('id', 'DESC')->get();
		$data['ourclients'] = Ourclients::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.about', $data);
    }
    
    
	public function career(){
	    $data['title'] = 'Career';
	    $data['setting'] = Websitesettings::where('id', 1)->first();
	    $data['circular'] = Vacancyannouncement::orderBy('id', 'DESC')->get();
	    return view('layouts.default.template.career', $data);
	}
	
	public function circular($id=null){
	    $data['title'] = 'Career';
	    $data['setting'] = Websitesettings::where('id', 1)->first();
	    $data['career'] = Vacancyannouncement::where('id', $id)->first();
	    return view('layouts.default.template.career_view', $data); 
	}

    public function whatwedo(){
        $data['title'] = 'What We Do';
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.what-we-do', $data); 
    }

    public function governing_body(){
        $data['title'] = 'Governig Body';
        $data['ourvolunteers'] = Ourvolunteers::orderBy('id', 'DESC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.governig-body', $data); 
    }

    public function donation(){
        $data['title'] = 'Donation';
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.donation', $data); 
    }

	
	
	
	
	

}?>