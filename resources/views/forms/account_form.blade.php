@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Accounts',
       'form_title' => 'Register Account'
      ])
    @section('create-form')
        <form method="POST" action="/accounts">
          {{ csrf_field() }}
           <div class="row">
            <div class="col-md-12">
                @if($flash=session('message'))
                  <div class="alert alert-success" role="alert">
                    {{ $flash }}
                  </div>
                @endif 
            </div>
          {{-- <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Title
              </label>
            <input type="text" class="form-control" name="first_name">
          </div> --}}
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Account Type
              </label>
              <select class="form-control" name="account_type">
                <option value="">Choose</option>
                <option value="asset">Asset</option>
                <option value="liability">Liability</option>
                <option value="income">Income</option>
                <option value="expense">Expense</option>
                <option value="capital">Capital</option>
              </select>
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Account Code
              </label>
            <input type="text" class="form-control" name="account_code">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Account Name
              </label>
            <input type="text" class="form-control" name="account_name">
          </div>
          
          </div>
          <div class='row'>
          <div class="form-group form-material col-md-3">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
          </div>
        </form>
      @endsection
