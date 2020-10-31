<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	$albums = DB::table('people')->get();

    	return view('/user/home', compact('albums'));
    }
}
