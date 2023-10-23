<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\Course;
use App\Models\Person;

class CourseController extends VoyagerBaseController
{
    //
    public function formCertificate(Request $request,$id_course)
    {
        $course = Course::find($id_course);
        return view('certificate.form',compact('course'));
    }

    public function addCertificate(Request $request, $id_course)
    {
        $course = Course::find($id_course);
        // dd($course->course_name);
        $course->img_certificate = $request->image;
        $course->x = $request->range_x;
        $course->y = $request->range_y;
        // Actualiza otros campos según sea necesario
        $course->save();

        return redirect()->route('form_certificate', $id_course);
    }
    public function showCertificate(Request $request,$id_course,$id_person){
        $course = Course::find($id_course);
        $person = Person::find($id_person);

        return view('pdf.certificate', compact('course', 'person'));
    }
}
