@extends('front.master')

@section('content')

<div class="greyBg">
    <div class="container">
		<div class="wrapper">
      <div class="row">
				<div class="col-sm-12">
				 <div class="breadcrumbs">
			       <ul>
			          <li><a href="{{url('/')}}">Home </a></li>
                 <li><span class="dot">/</span>
			          <a href="{{url('/home')}}"> {{Auth::user()->name}}</a></li>
			        </ul>
            </div>
         </div>
		    </div>

        <div class="row top25">
            <div class="panel panel-body">
                <h2 align="left">Dashboard</h2>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div class="row">

                    <div class="col-md-3">
                      <a href="{{url('myaccount')}}"
                       class="btn btn-default">My Account</a>
                    </div>

                    <div class="col-md-3">
                      <a href="{{url('inbox')}}"
                       class="btn btn-default">Messages</a>
                    </div>


                  </div>

                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
