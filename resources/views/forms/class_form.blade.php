@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Classes',
       'form_title' => 'Register Class'
      ])
    @section('create-form')
        <form method="POST" action="/class">
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
                  Class Name
              </label>
            <input type="text" class="form-control" name="class_name">
          </div>
          </div>
          <div class="row">
          <div class="form-group form-material col-md-6">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
          </div>
        </form>
      @endsection
