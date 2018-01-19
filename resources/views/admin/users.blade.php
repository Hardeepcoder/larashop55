@extends('admin.master')
@section('title', 'Admin')

@section('content')
<script>
$(document).ready(function(){

  @foreach($data as $user)
  $("#selectDiv{{$user->id}}").hide();
  $("#showSelectDiv{{$user->id}}").click(function(){
      $("#selectDiv{{$user->id}}").show();
  });
$("#loginStatus{{$user->id}}").change(function(){
  var status = $("#loginStatus{{$user->id}}").val();
  var userID = $("#userID{{$user->id}}").val()
  if(status==""){
    alert("please select an option");
  }else{
   $.ajax({
     url: '{{url("/admin/banUser")}}',
     data: 'status=' + status + '&userID=' + userID,
     type: 'get',
     success:function(response){
       console.log(response);
     }
   });
  }

});
  @endforeach
});
</script>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="content">
                            <h2>Users</h2>
                            <p>Etiam et tellus sem. Etiam blandit sollicitudin lectus vitae faucibus. Donec et massa fringilla.</p>
                                <div class="footer">
                                <p>hasellus non imperdiet sem, vel posuere tellus</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">

                            <div class="content">
                              <table style="width:100%" class="table table-hover table-striped" >

                                <tr>
                                  <th>Name</th>
                                  <th>Enail</th>
                                  <th>Status</th>
                                  <th>Role</th>
                                  <th>Login Status</th>
                                </tr>
                                @foreach($data as $user)
                                <tr>

                                  <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if($user->status==0)
                                      <b style="color:green"> enable</b>
                                      @else
                                    <b style="color:red">  Disabled</b>
                                      @endif
                                      <br>
                                      <button id="showSelectDiv{{$user->id}}"
                                        class="btn btn-primary btn-fill">
                                        Change status
                                      </button>
                                      <div id="selectDiv{{$user->id}}">
                                      <input type="hidden" id="userID{{$user->id}}" value="{{$user->id}}">
                                      <select id="loginStatus{{$user->id}}">
                                        <option value="">select a option</option>
                                        <option value="0">enable</option>
                                        <option value="1">Disabled</option>
                                      </select>
                                      </div>
                                    </td>
                                    <td>{{$user->role}}</td>
                                   <td><a href="" class="btn btn-fill btn-success">Actions</a></td>

                                </tr>
                                  @endforeach
                              </table>
                             <div class="footer">
                                <p>Donec congue eleifend sapien, in molestie diam vulputate sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


@endsection
