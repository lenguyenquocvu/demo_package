<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
	protected $table = 'wards';
	protected $fillable = ['w_id', 'w_name', 'w_pre', 'd_id'];
	public $timestamps = false;

	public function getWardsAccordingToDistricts($id) {
		$wards = self::where("d_id", $id)->get();
		return $wards;
	} 
	
	public function getWards(){
		$wards = self::all();
		return $wards;
	}
}