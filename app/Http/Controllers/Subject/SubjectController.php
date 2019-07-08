<?php

namespace App\Http\Controllers\Subject;

use Illuminate\Http\Request;
use App\Models\Subject\Subject;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;

class SubjectController extends Controller
{   
    public function index()
    {
        $subjects = Subject::orderBy('id', 'ASC')->get();
        //$subjects = Customer::paginate(10);
        return view('lists.subjects.subjects_list',compact('subjects'));
    }

    public function create()
    {
    	return view('forms.subject_form');
    }

    public function store(StoreSubjectRequest $request)
    {   
        $subject = new Subject($request->all());

        if(!$subject->save()) {  
            session()->flash('message','Subject NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Subject Saved Succcessfully');
        return redirect('/subject');
    }
}
