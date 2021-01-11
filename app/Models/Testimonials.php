<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class testimonials extends Sximo  {
	
	protected $table = 'testimonials';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT testimonials.* FROM testimonials  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE testimonials.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
