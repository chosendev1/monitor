<?php

namespace App\Http\Controllers\Marks;

use App\Models\Marks\Marks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;

class MarksController extends Controller
{
    public function create()
    {
    	return view('forms.marks_form');
    }

    public function store(StoreMarksRequest $request)
    {   
        $marks = new Marks($request->all());

        if(!$marks->save()) {  
            session()->flash('message','Marks NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Marks Saved Succcessfully');
        return redirect('/Marks');
    }
}
