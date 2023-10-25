<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\Course;
use App\Models\Person;
use App\Models\Font;
use Barryvdh\DomPDF\Facade\Pdf;

class CourseController extends VoyagerBaseController
{
    //
    public function formCertificate(Request $request,$id_course)
    {
        $course = Course::find($id_course);
        $fonts = Font::all();
        return view('certificate.form',compact('course','fonts'));
    }

    public function addCertificate(Request $request, $id_course)
    {
        $course = Course::find($id_course);
        $font = Font::find($request->fonts);

        // dd($font->font_name);
        $course->x = $request->range_x;
        $course->y = $request->range_y;
        $course->font_size = $request->range_size;
        $course->font()->associate($font);
        if($request->hasFile("image")){
            $img =  $request->file('image');
            $img_name = Str::slug($request->image).".".$img->guessExtension();
            $path = public_path('storage/courses/');
            copy($img->getRealPath(),$path.$img_name);
            $course->img_certificate = "courses/".$img_name; 
        }
        // Actualiza otros campos según sea necesario
        $course->save();

        return redirect()->route('form_certificate', $id_course);
    }
    public function showCertificate(Request $request,$id_course,$id_person){
        $course = Course::find($id_course);
        $person = Person::find($id_person);


        // $pdf = Pdf::loadView('pdf.certificate',compact('person','course'));
        // return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->stream('certificado'.time().'.pdf');
        return view('pdf.certificate', compact('course', 'person'));
    }

}
