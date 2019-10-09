<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;


use App\Districts;
use App\Wards;
use App\Streets;

class AjaxController extends Controller
{
	private $diss;
	private $wards;
	private $streets;
	public function __construct()
	{
		# code...
		$this->diss = new Districts();
		$this->wards = new Wards();
		$this->streets = new Streets();
	}
	

	public function getDistricts(Request $request){
		$states = $this->diss->getDistrictsAccordingToProvinces($request->p_id);

		return response()->json($states);

	}

	public function getWards(Request $request){
		$state = $this->wards->getWardsAccordingToDistricts($request->d_id);

		return response()->json($state);

	}

	public function getStreets(Request $request){
		$statess = $this->streets->getStreetsAccordingToWards($request->w_id);

		return response()->json($statess);
	}
}