<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
class StartEndCountController extends Controller
{
    public function all(Request $request)
    {
    	$result = 0 ;
    	$result_arr = [] ;

    	for ($i=$request->start; $i < $request->end+1; $i++) { 
    		$arr_first = str_split($i)  ;

    		//search inside single number 
    		$flag= 1;
    		foreach ($arr_first as $key => $value) {
				if ($value == 5) {
					 $flag = 0;
				}
    		}

    		if ($flag == 1) {
				// $result++;
				$result_arr[] += $i;
    		}	
    		
    	}
    	//return $result;
    	 return $result_arr;
    }
}
