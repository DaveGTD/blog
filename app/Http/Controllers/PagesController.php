<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getAbout()
	{
		return view('about');
	}

}