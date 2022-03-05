<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniqueController extends Controller
{
    public function store(Request $request)
    {
    	// return $request->all();
    	foreach ($request->arr_values as $key_ => $value_) {
    		$count = 0;
    		// $flag = 0;

    		foreach ($request->arr_values as $key => $value) {
    			if ($value_ == $value) {
    				 $count++;
    			}
    		}
    		
    		if ($count == 1) {
    			return $value_;
    		}

    	}
    	
    }
}
