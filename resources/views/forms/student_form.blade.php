@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
      ['header' => 'Students',
       'form_title' => 'Register Student'
      ])
    @section('create-form')
        <form method="POST" action="/student">
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
                  First Name
              </label>
            <input type="text" class="form-control" name="first_name">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Middle Name
              </label>
            <input type="text" class="form-control" name="middle_name">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Last Name
              </label>
            <input type="text" class="form-control" name="last_name">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                 Student Number
              </label>
            <input type="text" class="form-control" name="student_number">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Date of Birth
              </label>
            <input type="date" class="form-control" name="date_of_birth">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Religion
              </label>
            <input type="text" class="form-control" name="religion">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Physical Address
              </label>
            <input type="text" class="form-control" name="physical_address">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Contact Person Names
              </label>
            <input type="text" class="form-control" name="contact_person_names">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                 Relationship To Student
              </label>
            <input type="text" class="form-control" name="relationship_to_student">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Contact Person First Phone Number
              </label>
            <input type="text" class="form-control" name="contact_person_first_phone_number">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Contact Person Second Phone Number
              </label>
            <input type="text" class="form-control" name="contact_person_second_phone_number">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                  Contact Person Email Adress
              </label>
            <input type="text" class="form-control" name="contact_person_email_address">
          </div>
          <div class="form-group form-material col-md-4">
              <label class="form-control-label">
                 Date Of Registration
              </label>
            <input type="date" class="form-control" name="date_of_registration">
          </div>
          </div>
          <div class='row'>
          <div class="form-group form-material col-md-3">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
          </div>
        </form>
      @endsection
