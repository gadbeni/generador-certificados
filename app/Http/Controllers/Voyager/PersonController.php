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
        if ($request->search) {
            $search = $request->search;
            $query = Person::query();
            $query->orWhere('ci',$search);
            $query->orWhere('full_name','LIKE','%'.$search.'%');

            $person = $query->first();
            // $person =  Person::where('ci',$request->ci)->first();
            if($person){
                $courses = $person->courses->where('certificate_delivered', true)->sortByDesc('certificate_date');
                if ($courses->count() > 0) {
                    return view('home',compact('person','courses'));
                }
                $courses = null;
                return view('home',compact('person','courses'))->with('error_course', 'Aun no tienes Certificados');
            }
            else{
                $person = null;
                $courses = null;
                return view('home',compact('person','courses'))->with('error', 'Persona No encontrada.');
            }
        }
       

        
        $person = null;
        $courses = null;
        return view('home',compact('person','courses'));
    }
}
