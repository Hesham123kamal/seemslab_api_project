<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlphapiticalController extends Controller
{
	public function all(Request $request)
    {
    	$litters = [
    		"A" => 1 , "B" => 2 , "C" => 3 , "D" => 4 , "E" => 5,
    	 	"F" => 6 , "G" => 7 , "H" => 8 , "I" => 9 , "J" => 10,
    	 	"K" => 11, "L" => 12, "M" => 13, "N" => 14, "O" => 15,
    	 	"P" => 16, "Q" => 17, "R" => 18, "S" => 19, "T" => 20, 
    	 	"U" => 21, "V" => 22, "W" => 23, "X" => 24, "Y" => 25, 
    	 	"Z" => 26
    	 ];
    	
    	$str_litters = str_split($request->input_string) ;
		$count = 0;

    	foreach ($str_litters as $key => $value) {
    		if ($key == 0) {
    			$count =           ( $key * 26 ) + $litters[$value] ;
    		}else{

    			$count = $count *  (  		26 ) + $litters[$value] ;

    		}

    	}
    	return $count;

    }
}
