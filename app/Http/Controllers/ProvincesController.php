<?php

namespace App\Http\Controllers;

use App\Provinces;
use App\Districts;
use App\Wards;
use App\Streets;

/**
 * 
 */
class ProvincesController extends Controller {
	
	private $pros;
	private $diss;
	private $wards;
	private $streets;

	public function __construct()
	{
		# code...
		$this->pros = new Provinces();
		$this->diss = new Districts();
		$this->wards = new Wards();
		$this->streets = new Streets();
	}

	public function provinces() {
		$pro = $this->pros->getProvinces();
		return view('bds')->withPro($pro); view('tinhthanh')->withPro($pro);
	}

	public function districts() {
		$dis = $this->diss->getDistricts();
		return view('bds')->withDis($dis);
	}

	public function wards() {
		$ward = $this->wards->getWards();
		return view('phuong')->withWard($ward);
	}

	public function streets() {
		$street = $this->streets->getStreets();
		return view('duong')->withStreet($street);
	}
}