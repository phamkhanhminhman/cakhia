<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\People;
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

    public function store(Request $request)
    {
    	$data = $request->all();

    	$file = $request->file('thumbnail');
    	
    	$people = new People();

    	$people->group = $data['group'];
    	$people->name = $data['name'];
	    $people->link = $data['link'];
	    $people->description = $data['description'];
	    
    	if($file) 
    	{
    		$file->move('./upload/',$file->getClientOriginalName());
    		$path ="upload/".$file->getClientOriginalName();
	    	$people->thumbnail = $path;
    	} 

    	$people->save();

    	return redirect('/admin/people/'); 
    }

    public function show($id)
    {
    	$person = DB::table('people')->where('id', $id)->get();

    	return view('/admin/people/people-edit', compact('person'));
    }

    public function update(Request $request)
    {

    	$data = $request->all();
    	$file = $request->file('thumbnail');
    	$people = People::find($data['id']);

    	$people->name = $data['name'];
	    $people->link = $data['link'];

    	if($file) 
    	{
    		$file->move('./upload/',$file->getClientOriginalName());
    		$path ="upload/".$file->getClientOriginalName();
	    	$people->thumbnail = $path;
    	} 

    	$people->save();

    	return redirect('/admin/people/'); 
    }
}
