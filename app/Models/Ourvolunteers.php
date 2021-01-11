<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourvolunteers extends Sximo  {
	
	protected $table = 'our_volunteers';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_volunteers.* FROM our_volunteers  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_volunteers.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
