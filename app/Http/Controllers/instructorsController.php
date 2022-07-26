<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trainer;
use App\Models\course;
use App\Models\workshop;
use App\Models\general;
use DB;

class instructorsController extends Controller
{
    //
      // instructors
    public function instructor(){
		  $trainers = trainer::all();
          $meta = general::find(1);
        // return $trainers;
      return view('trainers')->with(compact('trainers','meta'));
    }
    public function singletrainer($id){
		$trainer = trainer::where('id',$id)->first();
    $courses = course::where('status','1')->orderby('id','desc')->get();
    $workshops = workshop::all();
    $finalArray = array();

    $meta = general::find(1);
    // return $workshops;
    return view('singletrainer', compact('trainer','courses','workshops','meta'));
    }
}
