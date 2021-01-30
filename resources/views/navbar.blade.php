
   
@extends('layouts.app')

@section('content')

<div class="row"><!--  row -->
	<div class="col-4">
	</div>
  <div class="col-8"><!--  col-8 -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top  navbar_bg">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-dark navbar_bg navabar_border" id="navbarCollapse">
            <ul class="navbar-nav justify-content-end">
            <div id="user_name">    
            <div class="row text-white ">
                  
                    <div class="col-4">
                        <li class="nav-item active">
                            <img src="{{ asset('/storage/user/' . session()->get('avtar')) }}" class="rounded-circle" alt="Cinque Terre" width="50" height="50">
                        </li>
                    </div>
                    <div class="col-8 mt-2  ">
                        <li class="nav-item active">
                            <label class="text-white ml-4 align-middle">{{session()->get('user_name')}} </label>
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                          @endif
                        </li>
                    </div>
                  </div>
                </div>
                
                <li class="nav-item active ">
                    <a class="nav-link text-white  " href="{{url('home')}}" >Home</a>
                </li>

                <!---------- My Team Dropdown  ------------>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  text-white   "  id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Dashboard</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink3">
                      <a class="dropdown-item " href="{{url('/my_direct')}}">My Direct</a>
                      <a class="dropdown-item" href="{{url('/my_direct_report')}}">My Direct Report</a>
                    </div>
                  </li>
                <!---------- My Team Dropdown Close  ------------>
                <!---------- Task Dropdown    ------------>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white " id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Task</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                      <a class="dropdown-item" href="{{url('/task')}}">Task</a>
                      <a class="dropdown-item" href="{{url('/attempted_task')}}">Attempted Task</a>
                    </div>
                  </li>
                <!---------- Task Dropdown close   ------------>


                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url('/showprofile')}}">Profile</a>
                </li>
                <!---------- Document Dropdown    ------------>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white " id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Document</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink2">
                      <a class="dropdown-item" href="{{url('/invoice')}}">Invoice</a>
                    </div>
                  </li>
                <!---------- Document Dropdown close    ------------>

                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url('/uploadkyc')}}">Upload kyc</a>
                </li>

                

                <!---------- Wallet Dropdown  ------------>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white " id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Wallet</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink3">
                      <a class="dropdown-item" href="{{url('/mywallet')}}">My Wallet</a>
                      <a class="dropdown-item" href="{{url('/wallet_report')}}">Wallet Report</a>
                    </div>
                  </li>
                <!---------- Wallet Dropdown close ------------>

                   <!---------- Benifits Dropdown  ------------>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white " id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Benifits</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink4">
                      <a class="dropdown-item" href="{{url('/withdraw')}}">Bank Withdrawl</a>
                      <a class="dropdown-item" href="{{url('/withdraw_details')}}">Bank Withdrawl details</a>
                    </div>
                  </li>
                <!---------- Benifits Dropdown close ------------>

                    <!---------- Support Dropdown  ------------>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">Support</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink5">
                          <a class="dropdown-item" href="#">Support Team</a>
                         
                        </div>
                      </li>
                    <!---------- Support Dropdown close ------------>
             
                <!-- <li class="nav-item">
                    
                    <form  action="{{ route('logout') }}" method="POST" class="">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                                        @csrf
                                        @method('PUT')
                                    </form>


                                    
                </li> -->

                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <!-- {{ Auth::user()->name }} -->
                                    Profile
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

            </ul>
           
          </div>
        </nav>
		</div> <!--  col-8 -->
      </div><!--  row -->
        @endsection

