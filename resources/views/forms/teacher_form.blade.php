@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Teachers',
       'form_title' => 'Register Teacher'
      ])
    @section('create-form')
        <form method="POST" action="/teacher">
          {{ csrf_field() }}
           <div class="row">
            <div class="col-md-12">
                @if($flash=session('message'))
                  <div class="alert alert-success" role="alert">
                    {{ $flash }}
                  </div>
                @endif 
            </div>
          </div>
          <div class="row">
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Title
              </label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                 Teacher Number
              </label>
            <input type="text" class="form-control" name="teacher_number">
          </div>
          </div>
          <div class="row">
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  First Name
              </label>
            <input type="text" class="form-control" name="first_name">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Middle Name
              </label>
            <input type="text" class="form-control" name="middle_name">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Last Name
              </label>
            <input type="text" class="form-control" name="last_name">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Date of Birth
              </label>
            <input type="date" class="form-control" name="date_of_birth">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Maritual Status
              </label>
            <input type="text" class="form-control" name="maritual_status">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Religion
              </label>
            <input type="text" class="form-control" name="religion">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Physical Address
              </label>
            <input type="text" class="form-control" name="physical_address">
          </div>
           <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Email Adress
              </label>
            <input type="text" class="form-control" name="email_address">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  First Phone Number
              </label>
            <input type="text" class="form-control" name="first_phone_number">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                  Second Phone Number
              </label>
            <input type="text" class="form-control" name="second_phone_number">
          </div>
         
          <div class="form-group form-material col-md-12">
              <label class="form-control-label">
                 Qualifications
              </label>
            <textarea class="form-control" name="qualifications"></textarea>
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                Subjects Taught
              </label>
            <input type="text" class="form-control" name="subjects_taught">
          </div>
          <div class="form-group form-material col-md-6">
              <label class="form-control-label">
                 Date Of Registration
              </label>
            <input type="date" class="form-control" name="date_of_registration">
          </div>
          <div class="form-group form-material">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      @endsection
