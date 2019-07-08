<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Models\Teacher\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;

class TeacherController extends Controller
{
    public function create()
    {
    	return view('forms.teacher_form');
    }

    public function store(StoreTeacherRequest $request)
    {   
        $teacher = new Teacher($request->all());

        if(!$teacher->save()) {  
            session()->flash('message','Teacher NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Teacher Saved Succcessfully');
        return redirect('/teacher');
    }
}
