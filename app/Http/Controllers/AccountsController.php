<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts\Accounts;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $accounts = Accounts::orderBy('id', 'ASC')->get();
        $assets = Accounts::where('account_type', 'Asset')->get();
        $liabilities = Accounts::where('account_type', 'Liability')->get();
        $incomes = Accounts::where('account_type', 'Income')->get();
        $expenses = Accounts::where('account_type', 'Expense')->get();
        $capital = Accounts::where('account_type', 'Capital')->get();
        return view('lists.accounts.accounts_list', compact('assets', 'liabilities', 'incomes', 'expenses', 'capital', 'accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.account_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {  
        $account = new Accounts($request->all());

        if(!$account->save()) {  
            session()->flash('message','Account NOT Saved');
            return redirect()->back();
        }
        
        session()->flash('message','Account Saved Succcessfully');
        return redirect('/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounts $accounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accounts $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounts $accounts)
    {
        //
    }
}
