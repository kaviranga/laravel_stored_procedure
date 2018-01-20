<?php
/* Copyright 2016 W.A.D.K.Gunawardhana
 * This code block handles the 
 * laravel stored procedure
 */
use App\Document;
use Illuminate\Support\Facades\Input;
//use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
	Route::get('documents/send',function()
	    {
	         return view('documents/create');  
	    });

	//Route::post('documents/add',function(\Illuminate\Http\Request $request)
	Route::post('documents/add',function(\Illuminate\Http\Request $request)
	{ 
	    if(isset($request['name']) && ($request['path']))
	    {
	        //tested easiest way of running stored procedure using laravel 2016_05_13
	          $doc_name = Input::get('name');
	          $doc_path = Input::get('path');
	          return DB::select('call sp_insert_document_details(?,?)',array($doc_name,$doc_path));
	              
	    }
	    //return redirect()->back();
	    return redirect()->back('documents/send');
	});

	Route::post('documents/delete',function(\Illuminate\Http\Request $request)
	{ 
	    if(isset($request['id']))
	    {
	        //tested easiest way of running stored procedure using laravel 2016_05_13
	          $id = Input::get('id');
	          return DB::select('call sp_delete_document_details_by_id(?)',array($id,));
	              
	    }
	    //return redirect()->back('documents/send');
	});
});	

/* Copyright 2016 W.A.D.K.Gunawardhana
 * This code block handles the 
 * laravel stored procedure
 */