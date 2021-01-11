<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;

class Helper{
    public static function getHomepageLoans($id){
        $value = DB::table('con_medicine')->where('id', $id)->get();
		return $value;
    }
}