@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Grading',
       'form_title' => 'Register Grades'
      ])
    @section('create-form')
        <form method="POST" action="/grades">
          {{ csrf_field() }}
           <div class="row">
            <div class="col-md-12">
                @if($flash=session('message'))
                  <div class="alert alert-success" role="alert">
                    {{ $flash }}
                  </div>
                @endif 
            </div>
          <div class="col-md-12 col-xl-8">
            <!-- Example Date Range -->
            <div class="example-wrap">
              <h4 class="example-title">Date Range</h4>
              <p>Set <code>name="start"</code> and <code>name="end"</code> for
                date range.</p>
              <div class="example">
                  <div class="input-group">
                    <span class="input-group-addon">Between %</span>
                    <input type="text" class="form-control" name="end" />
                  
                    <span class="input-group-addon">And %</span>
                    <input type="text" class="form-control" name="end" />
                  
                    <span class="input-group-addon">Score</span>
                    <input type="text" class="form-control" name="end" />
                  </div>
              </div>
            </div>
            <!-- End Example Date Range -->
          </div>
        </div>
          <div class="row">
            <div class="form-group form-material">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </div>
        </form>
      @endsection
