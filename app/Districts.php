<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class Districts extends Model
{
	protected $table = 'districts';
	protected $fillable = ['d_id', 'd_name', 'd_pre', 'p_id'];
	public $timestamps = false;

	public function getDistrictsAccordingToProvinces($id) {
		$diss = self::where("p_id", $id)->get();
		return $diss;
	} 

	public function getDistricts(){
		$dis = self::all();
		return $dis;
	}
}