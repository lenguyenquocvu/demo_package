<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Streets extends Model
{
	protected $table = 'streets';
	protected $fillable = ['s_id', 's_name', 's_pre', 'w_id', 's_status'];
	public $timestamps = false;

	public function getStreetsAccordingToWards($id) {
		$streets = self::where("w_id", $id)->get();
		return $streets;
	} 

	public function getStreets(){
		$streets = self::all();
		return $streets;
	}
}