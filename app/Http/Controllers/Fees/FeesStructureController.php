<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeesStructure;
use App\Http\Controllers\Controller;

class FeesStructureController extends Controller
{
    public function create()
    {
    	return view('forms.school_form');
    }

    public function store(StoreTermRequest $request)
    {   
        $term = new Term($request->all());

        if(!$term->save()) {  
            session()->flash('message','Term NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Term Saved Succcessfully');
        return redirect('/terms');
    }
}
