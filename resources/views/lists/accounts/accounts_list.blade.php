@extends('layouts.partials.lists.main-list')
@include('layouts.partials.lists.list-header',
      ['header' => 'Accounts'])
      
    @section('create-list')
    <create-account></create-account>
        <ul class="list-group list-group-full">
          <li class="list-group-item">
            <div class="media">
              <div class="media-body">
                <h4 class="example-title">Accounts</h4>
              </div>
            <div class="pl-20">
              {{-- <form method="GET" action="/account">
                <button type="submit" class="btn btn-success btn-sm ladda-button" data-style="expand-left"
                  data-plugin="ladda"><i class="icon md-plus" aria-hidden="true"></i>
                  Add New
                </button>
              </form> --}}
              <a href='/accounts/create' class="btn btn-success btn-sm ladda-button" data-style="expand-left"
                  data-plugin="ladda"><i class="icon md-plus" aria-hidden="true"></i>Add New</a>
            </div>
            </div>
            <hr>
          </li>
          {{-- <li class="list-group-item">
            @include('lists.classes.class_search_form')
          </li> --}}

          <div class="col-xl-8">
                <!-- Example Tabs -->
                <div class="example-wrap">
                  <div class="nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#assets"
                          aria-controls="exampleTabsOne" role="tab">Assets</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#liabilities"
                          aria-controls="exampleTabsTwo" role="tab">Liabilities</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#incomes"
                          aria-controls="exampleTabsThree" role="tab">Incomes</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#expenses"
                          aria-controls="exampleTabsFour" role="tab">Expenses</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#capital"
                          aria-controls="exampleTabsFour" role="tab">Capital/Equity</a></li>
                      {{-- <li class="dropdown nav-item" role="presentation">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                        <div class="dropdown-menu" role="menu">
                          <a class="active dropdown-item" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne"
                            role="tab">Home</a>
                          <a class="dropdown-item" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo"
                            role="tab">Components</a>
                          <a class="dropdown-item" data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree"
                            role="tab">Css</a>
                          <a class="dropdown-item" data-toggle="tab" href="#exampleTabsFour" aria-controls="exampleTabsFour"
                            role="tab">Javascript</a>
                        </div>
                      </li> --}}
                    </ul>
                    <div class="tab-content pt-20">
                      <div class="tab-pane active" id="assets" role="tabpanel">
                        @foreach($assets as $account)
          <li class="list-group-item">
          <div class="media">
              <!-- <div class="pr-20">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-fluid" src="../../../global/portraits/1.jpg"
                    alt="...">
                </a>
              </div> -->
              <div class="media-body">
                <h4>{{ $account->account_name}}</h4>
                {{-- <a>
                  <i class="icon icon-color md-plus-square" aria-hidden="true"></i> 
                    {{ $customer->member_number  }}      
                </a> --}}
              </div>
              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Account Code</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-star" aria-hidden="true"></i> 
                      {{ $account->account_code}}      
                  </a>
                </p>
              </div>

              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Account Type</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-check-circle" aria-hidden="true"></i> 
                     {{ $account->account_type}}      
                  </a>
                </p>
              </div>
            </div>
            <hr>
          </li>
          @endforeach
                      </div>
                      <div class="tab-pane" id="liabilities" role="tabpanel">
                        <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous"
                    aria-multiselectable="true" role="tablist">
                    @php $y = 1;@endphp
                    @foreach($liabilities as $account)
                      @if($y == 1)
                       @php $k = 'One'; @endphp
                      @elseif($y == 2)
                       @php $k = 'Two'; @endphp
                      @elseif($y == 3)
                       @php $k = 'Three'; @endphp
                      @elseif($y == 4)
                       @php $k = 'Four'; @endphp
                       @endif
                       @php $class = "panel-collapse collapse"; @endphp
                      {{--@if($y==1) 
                      @php $class = "panel-collapse collapse show"; @endphp
                      @else @php $class = "panel-collapse collapse"; @endphp
                      @endif --}}
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingContinuous{{$k}}" role="tab">
                        <a class="panel-title" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                          href="#exampleCollapseContinuous{{$k}}" aria-controls="exampleCollapseContinuous{{$k}}"
                          aria-expanded="false">
                        <strong>{{ $account->account_code}} - {{ $account->account_name}}</strong> 
                        </a>
                      </div>
                      <div class="{{$class}}" id="exampleCollapseContinuous{{$k}}" aria-labelledby="exampleHeadingContinuous{{$k}}"
                        role="tabpanel">
                        <div class="panel-body">
                            <li class="list-group-item">
                                  <p>
                                    <a>
                                      <i class="icon icon-color md-star" aria-hidden="true"></i> 
                                        <strong>{{ $account->account_code }} - {{ $account->account_name }}</strong> 
                                        <div id="app-5">
                                          <p>@{{ message }}</p>
                                          <button v-on:click="reverseMessage">Reverse Message</button>
                                        </div>
                                        <button class="btn btn-primary" data-target="#exampleFormModal" data-toggle="modal"
                                          type="button">add new account
                                        </button>   
                                    </a>

                                  </p>
                              <hr>
                            </li>
                          </div>
                            </div>
                            </div>
                            @php $y++; @endphp
                             @endforeach
                            </div>
                            </div>

                      <div class="tab-pane" id="incomes" role="tabpanel">
                        @foreach($incomes as $account)
                          <li class="list-group-item">
                          <div class="media">
                              <!-- <div class="pr-20">
                                <a class="avatar" href="javascript:void(0)">
                                  <img class="img-fluid" src="../../../global/portraits/1.jpg"
                                    alt="...">
                                </a>
                              </div> -->
                              <div class="media-body">
                                <h4>{{ $account->account_name}}</h4>
                                {{-- <a>
                                  <i class="icon icon-color md-plus-square" aria-hidden="true"></i> 
                                    {{ $customer->member_number  }}      
                                </a> --}}
                              </div>
                        <div class="media-body align-self-center">
                          <p>
                            <a>
                              <strong>Account Code</strong>
                            </a>
                          </p>
                          <p>
                            <a>
                              <i class="icon icon-color md-star" aria-hidden="true"></i> 
                                {{ $account->account_code}}      
                            </a>
                          </p>
                        </div>

              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Account Type</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-check-circle" aria-hidden="true"></i> 
                     {{ $account->account_type}}      
                  </a>
                </p>
              </div>
            </div>
            <hr>
          </li>
          @endforeach
                      </div>
                      <div class="tab-pane" id="expenses" role="tabpanel">
                        @foreach($expenses as $account)
          <li class="list-group-item">
          <div class="media">
              <!-- <div class="pr-20">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-fluid" src="../../../global/portraits/1.jpg"
                    alt="...">
                </a>
              </div> -->
              <div class="media-body">
                <h4>{{ $account->account_name}}</h4>
                {{-- <a>
                  <i class="icon icon-color md-plus-square" aria-hidden="true"></i> 
                    {{ $customer->member_number  }}      
                </a> --}}
              </div>
              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Account Code</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-star" aria-hidden="true"></i> 
                      {{ $account->account_code}}      
                  </a>
                </p>
              </div>

              <div class="media-body align-self-center">
                <p>
                  <a>
                    <strong>Account Type</strong>
                  </a>
                </p>
                <p>
                  <a>
                    <i class="icon icon-color md-check-circle" aria-hidden="true"></i> 
                     {{ $account->account_type}}      
                  </a>
                </p>
              </div>
            </div>
            <hr>
          </li>
          @endforeach
                      </div>
                      <div class="tab-pane" id="capital" role="tabpanel">
                        @foreach($capital as $account)
          <li class="list-group-item">
          
                <h4>{{ $account->account_name}}</h4>
                <p>
                  <a>
                    <strong>Account Code</strong>
                  </a>
                </p>

                <p>
                  <a>
                    <i class="icon icon-color md-star" aria-hidden="true"></i> 
                      {{ $account->account_code}}      
                  </a>
                </p>

                <p>
                  <a>
                    <i class="icon icon-color md-check-circle" aria-hidden="true"></i> 
                     {{ $account->account_type}}      
                  </a>
                </p>

            <hr>
          </li>
          @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Tabs -->
              </div>
        </ul>
          
        <div class="col-xl-6">
              <!-- Example Continuous Accordion -->
              <div class="examle-wrap">
                <h4 class="example-title">Continuous Accordion</h4>
                <div class="example">
                  <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous"
                    aria-multiselectable="true" role="tablist">
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
                        <a class="panel-title" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                          href="#exampleCollapseContinuousOne" aria-controls="exampleCollapseContinuousOne"
                          aria-expanded="true">
                      Collapsible Group Item #1
                    </a>
                      </div>
                      <div class="panel-collapse collapse show" id="exampleCollapseContinuousOne" aria-labelledby="exampleHeadingContinuousOne"
                        role="tabpanel">
                        <div class="panel-body">
                          Amice cum distinguantur, pronuntiaret omnesque. Sensum opes bonorum rationis propemodum
                          viros elegantis perpetua impetu, sentiunt probo insidiarum
                          telos eruditus, inanium, inprobitatem sero medium necessitatibus,
                          reperiuntur tolerabiles arbitrarer maxime equidem iniucundus
                          ecce sine possunt, primo expedire sumitur infinitio dicturum
                          statuam adhibuit, assumenda.
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingContinuousTwo" role="tab">
                        <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                          href="#exampleCollapseContinuousTwo" aria-controls="exampleCollapseContinuousTwo"
                          aria-expanded="false">
                      Collapsible Group Item #2
                    </a>
                      </div>
                      <div class="panel-collapse collapse" id="exampleCollapseContinuousTwo" aria-labelledby="exampleHeadingContinuousTwo"
                        role="tabpanel">
                        <div class="panel-body">
                          Honoris euripidis, perspici dolemus varias dicat dicantur feramus quisquis desideret
                          solet, diligant aequo iudicem a superstitione secumque
                          ponatur soluta iucunditate, artibus confidam esset quaeri
                          sitisque legendis appareat consequuntur notionem, splendore
                          maius legendis, adolescens nescio perpetua motum adhuc
                          amoris optimus nihil requirere.
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading" id="exampleHeadingContinuousThree" role="tab">
                        <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
                          href="#exampleCollapseContinuousThree" aria-controls="exampleCollapseContinuousThree"
                          aria-expanded="false">
                      Collapsible Group Item #3
                    </a>
                      </div>
                      <div class="panel-collapse collapse" id="exampleCollapseContinuousThree" aria-labelledby="exampleHeadingContinuousThree"
                        role="tabpanel">
                        <div class="panel-body">
                          Torquatis noster, impensa turma bono, litterae postulet, permanentes nostro derigatur
                          veriusque istam accedere intervalla chremes affert. Ius
                          sententiae legatis atomus quas, ponunt levitatibus timeret.
                          Reque sinit, magnam percipi censet mentitum sis nivem
                          virtutibus seiungi. Bono disserunt nemore. Propter blanditiis
                          laboriosam expeteremus.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Continuous Accordion -->
            </div>
          @include('forms.add_account_form',
      ['parent_account' => 'Accounts'])
      @endsection
      
      {{-- <script>
        var app5 = new Vue({
        el: '#app-5',
        data: {
          message: 'Hello Vue.js!'
        },
        methods: {
          reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
          }
        }
      })
      </script> --}}
