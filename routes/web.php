<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

//Default Controller
Route::get('/', 'HomeController@index')->name('index');
Route::post('/home/submit', 'HomeController@submit');
Route::get('/home/skin/{any?}', 'HomeController@getSkin');


Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');
/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification 
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');

Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// Custom routes  
$path = base_path().'/routes/custom/';
$lang = scandir($path);
foreach($lang as $value) {
	if($value === '.' || $value === '..') {continue;} 
	include( 'custom/'. $value );	
	
}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');
});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin
		
		include('sximo.php');
		
});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});

//VMSL Route
Route::get('getmedicine/{id}','CitController@getMedicineById');
Route::get('event/single/{id}','VmslController@event_single')->name('event.single');
Route::get('causes/single/{id}','VmslController@causes_single')->name('causes.single');
Route::get('volunteer/single/{id}','VmslController@volunteer_single')->name('volunteer.single');

Route::post('sendmail','VmslController@contact_email')->name('contact.email');
Route::post('account','VmslController@volunteer_account')->name('volunteer.create.account');
Route::get('volunteer','VmslController@grid_volunteer')->name('grid.volunteer');
Route::get('event','VmslController@grid_event')->name('grid.event');
Route::get('causes','VmslController@grid_causes')->name('grid.causes');
Route::get('career','VmslController@career')->name('career');
Route::get('career/circular/{id}','VmslController@circular')->name('circular');


//shastho shurokkha
Route::get('about','VmslController@about')->name('about');
Route::get('what-we-do','VmslController@whatwedo')->name('what-we-do');
Route::get('team','VmslController@team')->name('team');
Route::get('donation','VmslController@donation')->name('donation');
Route::get('photos','VmslController@gallary')->name('full.gallery');
Route::post('user-details', 'VmslController@user_details');
Route::get('news', 'VmslController@news');
Route::get('videos','VmslController@video')->name('video');
Route::get('contact','VmslController@contact_page')->name('contact.page');
Route::post('contactform','VmslController@contact_data')->name('contact.data');
Route::post('photo-filter','VmslController@photo_filter');


