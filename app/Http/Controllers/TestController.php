<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function test()
    {
    	$data = DB::table('test')->get();

    	var_dump($data);
    }
}
