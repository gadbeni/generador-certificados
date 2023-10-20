<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class CourseController extends VoyagerBaseController
{
    //
    public function formCertificate(Request $request,$id_course)
    {
        return view('certificate.form',compact('id_course'));
    }

    public function addCertificate(Request $request)
    {
        
    }
    public function showCertificates(Request $request){
        
    }
}
