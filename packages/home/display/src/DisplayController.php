<?php

namespace Home\Display;

use App\Http\Controllers\Controller;

Class DisplayController extends Controller
{

    public function index()
    {
		return view('display::index', array());
	}

}
