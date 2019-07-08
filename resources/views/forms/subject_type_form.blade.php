@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Subject Types',
       'form_title' => 'Register Subject Type'
      ])
    @section('create-form')
        <form method="POST" action="/loan/{{ $loan->id }}/approval">
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
                  Subject Types
              </label>
            <input type="text" class="form-control" name="academic_year">
          </div>
          <div class="form-group form-material">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      @endsection
