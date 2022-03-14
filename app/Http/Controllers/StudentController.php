<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function addStudent(){
        return view('student.add_student');
    }

    public function addStudentData(Request $request)
    {

        dd($request->all());
    
    }

    public function oldAma(){
        return view("old_ama");
    }

    public function oldSite(){
        return view("student.old_site");
    }


}