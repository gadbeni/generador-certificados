<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\Course;
use App\Models\Person;

class PersonController extends VoyagerBaseController
{
    //
    public function findPerson(Request $request){
        if ($request->ci) {
            $person =  Person::where('ci',$request->ci)->first();
            if($person){
                $courses = $person->courses->where('certificate_delivered', true);
                return view('home',compact('person','courses'));
            }
            else{
                $person = null;
                $courses = null;
                return view('home',compact('person','courses'))->with('error', 'Persona No encontrada.');;
            }
        }
       

        
        $person = null;
        $courses = null;
        return view('home',compact('person','courses'));
    }
}
