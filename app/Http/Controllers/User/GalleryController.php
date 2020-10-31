<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GalleryController extends Controller
{
    public function people()
    {
    	$people = DB::table('people')->get();

    	return view('/user/people', compact('people'));
    }
}
