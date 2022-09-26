<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class FrontendController extends Controller
{
    public function index()
    {
      return view('frontend.index');
    }
	
	 public function index_about()
    {
      return view('frontend.about');
    }
	 public function index_team()
    {
      return view('frontend.team');
    }
	 public function index_contact()
    {
      return view('frontend.contact');
    }
}
