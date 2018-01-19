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
            <div class="panel itemBox">
                <div class="prod"><h2 align="left">My Account</h2></div>



                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(isset($link))
                    <div class="myContent">

                      <ul class="nav nav-tabs">
                        @if($link=="profile")
                        <li class="active"><a href="#profile" data-toggle="tab">profile</a></li>
                        <li><a href="#myorders" data-toggle="tab">My orders</a></li>
                        <li><a href="#changepassword" data-toggle="tab">change Password</a></li>

                        @elseif($link=="myorders")
                        <li ><a href="#profile" data-toggle="tab">profile</a></li>
                        <li class="active"><a href="#myorders" data-toggle="tab">My orders</a></li>
                        <li><a href="#changepassword" data-toggle="tab">change Password</a></li>

                        @elseif($link=="changepassword")
                        <li ><a href="#profile" data-toggle="tab">profile</a></li>
                        <li><a href="#myorders" data-toggle="tab">My orders</a></li>
                        <li class="active"><a href="#changepassword" data-toggle="tab">change Password</a></li>
                        @else
                        something else
                        @endif
                      </ul>

                      <div class="tab-content col-md-6">
                        <div id="profile" class="tab-pane fade in active">
                        your {{$link}} data
                        </div>
                        <div id="myorders" class="tab-pane fade in">
                          myorders tab
                        </div>
                        <div id="changepassword" class="tab-pane fade in">
                          changepassword tab
                        </div>
                      </div>

                    </div>
                    @else
                  <div class="myContent">

                    <ul class="nav nav-tabs">

                      <li class="active"><a href="#profile" data-toggle="tab">profile</a></li>
                      <li><a href="#myorders" data-toggle="tab">My orders</a></li>
                      <li><a href="#changepassword" data-toggle="tab">change Password</a></li>

                    </ul>

                    <div class="tab-content col-md-6">
                      <div id="profile" class="tab-pane fade in active">

                      <form action="" method="post">

                        <lable>Name</lable>
                        <input type="text" name="name" class="form-control"
                         value="{{AUth::user()->name}}"/>
                        <br>

                        <lable>Email</lable>
                         <input type="text" name="email" class="form-control"
                         value="{{AUth::user()->email}}"
                         readonly style="background-color:#efefef"/>
                         <br>

                          <lable>City</lable>
                          <input type="text" name="city" class="form-control"
                          value=""/>
                          <br>
                          <lable>Country</lable>
                          <input type="text" name="country" class="form-control"
                          value=""/>
                          <br>
                          <lable>Phone number</lable>
                          <input type="text" name="phoneNumber"  class="form-control"
                          value=""/>
                          <br>
                         <input type="submit" class="btn btn-primary" value="Update">
                      </form>
                      </div>

                      <div id="myorders" class="tab-pane fade in">
                        myorders tab
                      </div>

                      <div id="changepassword" class="tab-pane fade in">
                        change password tab
                      </div>


                    </div>
                  </div>
                  @endif

                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
