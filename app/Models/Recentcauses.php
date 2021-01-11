<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class recentcauses extends Sximo  {
	
	protected $table = 'recent_causes';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT recent_causes.* FROM recent_causes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE recent_causes.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
