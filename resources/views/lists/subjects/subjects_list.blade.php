@extends('layouts.partials.lists.main-list')
@include('layouts.partials.lists.list-header',
      ['header' => 'Subjects'])
      
    @section('create-list')
        <ul class="list-group list-group-full">
          <li class="list-group-item">
            <div class="media">
              <div class="media-body">
                <h4 class="example-title">Subjects</h4>
              </div>
            <div class="pl-20">
              <form method="GET" action="/subject">
                <button type="submit" class="btn btn-success btn-sm ladda-button" data-style="expand-left"
                  data-plugin="ladda"><i class="icon md-plus" aria-hidden="true"></i>
                  Add New
                </button>
              </form>
            </div>
            </div>
            <hr>
          </li>
          <li class="list-group-item">
            @include('lists.subjects.subject_search_form')
          </li>
          @foreach($subjects as $subject)
          <li class="list-group-item">
          <div class="media">
              <!-- <div class="pr-20">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-fluid" src="../../../global/portraits/1.jpg"
                    alt="...">
                </a>
              </div> -->
              <div class="media-body">
                <h4>{{ $subject->subject_name}}</h4>
                <a>
                  <i class="icon icon-color md-dot-circle" aria-hidden="true"></i> 
                    {{ $subject->subject_type  }}      
                </a>
              </div>
              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Teachers</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-star" aria-hidden="true"></i> 
                      Munyagwa Ambrose      
                  </a>
                </p>
              </div>

              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Students</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-check-circle" aria-hidden="true"></i> 
                     500      
                  </a>
                </p>
              </div>
            </div>
            <hr>
          </li>
          @endforeach
        </ul>
      @endsection
