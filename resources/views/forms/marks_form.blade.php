@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Marks',
       'form_title' => 'Register Marks for student'
      ])
    @section('create-form')
        <form method="POST" action="/marks">
          {{ csrf_field() }}
           <div class="row">
            <div class="col-md-12">
                @if($flash=session('message'))
                  <div class="alert alert-success" role="alert">
                    {{ $flash }}
                  </div>
                @endif 
            </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Student
              </label>
            <input type="text" class="form-control" name="student">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Class
              </label>
            <input type="text" class="form-control" name="class">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Year
              </label>
            <input type="text" class="form-control" name="year">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                 Term
              </label>
            <input type="text" class="form-control" name="term">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                 Score
              </label>
            <input type="text" class="form-control" name="score">
          </div>
          <div class="form-group form-material">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      @endsection
