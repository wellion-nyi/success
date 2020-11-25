<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function report(){

    	return view('home.report');
    }

    public function attendance(){
    	return view('home.attendance');
    }


    public function teacher(){
    	return view('home.teacher');
    }

    public function student(){
    	return view('home.student');
    }

    public function message(){
    	return view('home.message');
    }



}
