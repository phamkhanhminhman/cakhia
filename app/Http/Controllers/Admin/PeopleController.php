<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PeopleController extends Controller
{
    public function index()
    {
    	$people = DB::table('people')->get();
    	
    	return view('/admin/people/people',compact('people'));
    }

    public function create() 
    {
    	return view('/admin/people/people-create');
    }

    public function show($id)
    {
    	$person = DB::table('people')->where('id', $id)->get();

    	return view('/admin/people/people-edit', compact('person'));
    }
}
