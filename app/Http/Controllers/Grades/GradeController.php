<?php

namespace App\Http\Controllers\Grades;

use Illuminate\Http\Request;
use App\Models\Grades\Grade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGradeRequest;

class GradeController extends Controller
{
    public function create()
    {
    	return view('forms.grading_form');
    }

    public function store(StoreGradeRequest $request)
    {   
        $term = new Grade($request->all());

        if(!$term->save()) {  
            session()->flash('message','Grade NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Grade Saved Succcessfully');
        return redirect('/terms');
    }
}
