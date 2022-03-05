<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmallestPositiveElementController extends Controller {

    public function store(Request $request) {

    	  $positive_arr = [];
    	  foreach ($request->arr_values as $key_ => $value_) {
    	  	if ($value_>0) {
    	  		$positive_arr[] += $value_;
    	  	}
    	  }

          $smallest_value =  min($positive_arr);
		  foreach ($positive_arr as $key => $value) {

			if (in_array($smallest_value, $positive_arr)) {
				$smallest_value++;
			}else{
				return $smallest_value;
			}		
		 }
    }



    
}
