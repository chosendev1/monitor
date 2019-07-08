<?php

namespace App\Http\Controllers\Students;

use App\Models\Students\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function create()
    {
    	return view('forms.student_form');
    }

    public function store(StoreStudentRequest $request)
    {   
        $student = new Student($request->all());

        if(!$student->save()) {  
            session()->flash('message','Student NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Student Saved Succcessfully');
        return redirect('/students');
    }
}
