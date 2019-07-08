@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Subjects',
       'form_title' => 'Register Subject'
      ])
    @section('create-form')
        <form class="card" method="POST" action="/subject">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-12">
                @if ($flash=session('message'))
                    <div class="alert alert-success" role="alert">
                      {{ $flash }}
                    </div>
                @endif 
            </div>
          </div>
          <div class="row">
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Subject Name
              </label>
            <input type="text" class="form-control" name="subject_name">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Subject Type
              </label>
            <input type="text" class="form-control" name="subject_type">
          </div>
          </div>
          <div class="row">
          <div class="form-group form-material col-md-6">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
          </div>
        </form>
      @endsection
