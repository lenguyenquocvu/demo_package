<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Provinces extends Model
{
	protected $table = 'provinces';
	protected $primaryKey = 'p_id';
	
	public function getProvinces(){
		$pros = self::all();
		return $pros;
	}
}