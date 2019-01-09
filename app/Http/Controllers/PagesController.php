<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function get_home(){
    	return view('home');
    }
    public function get_about(){
    	return view('about');
    }
    public function get_contact(){
    	return view('contact');
    }
}
