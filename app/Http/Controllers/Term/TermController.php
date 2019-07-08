<?php

namespace App\Http\Controllers\Term;

use Illuminate\Http\Request;
use App\Models\Term\Term;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTermRequest;

class TermController extends Controller
{	

	public function index()
    {
        $terms = Term::orderBy('id','DESC')->get();
        return view('lists.terms_list',compact('terms'));
    }

    public function create()
    {
    	return view('forms.term_form');
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
