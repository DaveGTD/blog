<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getAbout()
	{
		$name = 'Dave';
		return view('about')->with("full_name", $name);
	}

}