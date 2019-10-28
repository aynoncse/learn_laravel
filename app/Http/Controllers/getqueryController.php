<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class getqueryController extends Controller
{
	public function index(){

		

		/*===============INSERT==============*/

		/*
		$data=DB::table('students')->insert([
			['name' => 'Ashraf Uddin', 'email' => 'ashraf@gmail.com',  'mobile' => '01829603125'],
			['name' => 'Ahnaf Uddin', 'email' => 'ahnaf@gmail.com',  'mobile' => '01824533943'],
			['name' => 'Abul Kashem', 'email' => 'kashem@gmail.com',  'mobile' => '01639603943'],
		]);

		echo $data?"Insert Success":"Data Insert Fail";
		
		*/


		/*==============UPDATE=================*/

		 /*$data=DB::table('students')
            ->where('id', 4)
            ->update(['email' => 'kabir@gmail.com']);
 
            echo $data?"Data Update Success":"Data Update Fail";*/

        }

        public function getStudents(){
        	$students = DB::table('students')->get();
        	return view('students', ['students' => $students]);
        }

        public function getStudent(){
        	$user = DB::table('students')->where('name', 'Md Aynon')->first();
        	echo $user->email;
        }
    }
