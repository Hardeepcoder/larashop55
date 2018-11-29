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
			          <a href="{{url('/myaccount')}}"> {{Auth::user()->name}}</a></li>
                <li><span class="dot">/</span>
                  <a href="">Order Details</a>
			        </ul>
                        </div>
                    </div>
	     </div>

          <div class="row top25 inboxMain" >
                    
              </div>

       

        </div>
    </div>
  </div>
</div>
@endsection
