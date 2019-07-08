@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Terms',
       'form_title' => 'Register Term'
      ])
    @section('create-form')
        <form method="POST" action="/term">
          {{ csrf_field() }}
           <div class="row">
            <div class="col-md-12">
                @if ($flash=session('message'))
                    <div class="alert alert-success" role="alert">
                      {{ $flash }}
                    </div>
                @endif 
            </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Term
              </label>
            <input type="text" class="form-control" name="term">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Academic Year
              </label>
            <input type="text" class="form-control" name="academic_year">
          </div>
          <div class="form-group form-material">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      @endsection
