<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller 
{
	public function home() 
	{

		$tasks = [
			'Go to the store',
			'Go to the market',
			'Go to work',
			'Go to the concert'
		];

    	return view('welcome')->withTasks($tasks)->withFoo('foo');

	}

	
	
}