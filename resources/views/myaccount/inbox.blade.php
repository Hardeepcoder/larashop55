@extends('front.master')

@section('content')

<script>
$(document).ready(function(){
  @foreach($data as $msg)
  $("#msg{{$msg->id}}").click(function(){
    var mId = $("#mId{{$msg->id}}").val();
    $.ajax({
      type:'get',
      data:'msgId=' + mId,
      url:'{{url('/updateInbox')}}',
      success:function(response){
        console.log(response);
      }
    });
  });
  @endforeach

});
</script>

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
                <li><span class="dot">/</span>
                  <a href="">inbox</a>
			        </ul>
            </div>
         </div>
		    </div>

        <div class="row top25 inboxMain" >

              <div class="col-md-12 inboxRow">
                  <div class="prod"><h2 align="left">Inbox</h2></div>
                  <hr>
               <div class="col-md-3">
                    <input type="checkbox">
                </div>

                <div class="col-md-3">
                    <b>SENDER</b>
                </div>

                <div class="col-md-3">
                    <b>SUBJECT</b>
                </div>

                <div class="col-md-3">
                    <b>UPDATED</b>
                </div>
              </div>

                @foreach($data as $msg)
                <input type="hidden" value="{{$msg->id}}" id="mId{{$msg->id}}">
                 <a href="#" data-toggle="collapse"
                 data-target="#d{{$msg->id}}">

                 @if($msg->status=="1")
                  <div class="col-md-12 inboxRow"
                  style="background:#ccc; font-weight:bold;
                   border:1px solid #efefef" id="msg{{$msg->id}}">
                  @else
                  <div class="col-md-12 inboxRow">
                   @endif

                    <div class="col-md-3">
                        <input type="checkbox">
                    </div>

                    <div class="col-md-3">
                        <p>Admin</p>
                    </div>

                    <div class="col-md-3">
                        <p>{{$msg->subject}}</p>
                    </div>

                    <div class="col-md-3">
                        <p>{{$msg->updated_at }}</p>
                    </div>

                  </div>
                </a>
                  <div class="collapse container" id="d{{$msg->id}}">

                      <div class="inner_msg">
                        <p>{{$msg->message}}<p>
                        </div>

                  </div>



                @endforeach
              </table>


        </div>
    </div>
  </div>
</div>
@endsection
