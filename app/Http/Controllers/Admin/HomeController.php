<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	return view('/admin/home');
    }
}
