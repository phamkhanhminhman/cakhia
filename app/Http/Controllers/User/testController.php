<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class testController extends Controller
{
    public function index()
    {
    	$data = DB::table('test')->get();

    	return view('/user/home');
    }
}
