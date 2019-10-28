<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestControler extends Controller
{
	public function index(Request $request){
		echo "<pre>";
		print_r($request->all());
		echo $request->input('name');
		echo $request->input('age');
		echo "</pre>";
	}
}
