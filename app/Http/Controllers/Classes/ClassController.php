<?php

namespace App\Http\Controllers\Classes;

use Illuminate\Http\Request;
use App\Models\Classes\Classes;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassRequest;

class ClassController extends Controller
{   

    public function index()
    {
        $classes = Classes::orderBy('id', 'ASC')->get();
        //$classes = Customer::paginate(10);
        return view('lists.classes.classes_list',compact('classes'));
    }

    public function create()
    {
    	return view('forms.class_form');
    }

    public function store(StoreClassRequest $request)
    {   
        $class = new Classes($request->all());

        if(!$class->save()) {  
            session()->flash('message','Class NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Class Saved Succcessfully');
        return redirect('/classes');
    }
}
