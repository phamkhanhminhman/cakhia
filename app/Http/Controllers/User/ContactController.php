<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ContactController extends Controller
{
    public function index()
    {
    	return view('/user/contact');
    }
}
