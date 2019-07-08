<?php

namespace App\Http\Controllers;

use App\GeneralLedger;
use Illuminate\Http\Request;

class GeneralLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.general_ledger_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralLederRequest $request)
    {
        $transaction = new Accounts($request->all());

        if(!$transaction->save()) {  
            session()->flash('message','Transaction NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Transaction Saved Succcessfully');
        return redirect('/transactions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GeneralLedger  $generalLedger
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralLedger $generalLedger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GeneralLedger  $generalLedger
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralLedger $generalLedger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GeneralLedger  $generalLedger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralLedger $generalLedger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GeneralLedger  $generalLedger
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralLedger $generalLedger)
    {
        //
    }
}
