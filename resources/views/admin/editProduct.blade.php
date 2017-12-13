@extends('admin.master')
@section('title', 'Admin')

@section('content')
<script>
$(document).ready(function(){
  $("#msg").hide();
  //alert("working");
  $("#btn").click(function(){
    $("#msg").show();

    var pro_name = $("#pro_name").val();
    var pro_code = $("#pro_code").val();
    var pro_price = $("#pro_price").val();
    var pro_info = $("#pro_info").val();
    var token = $("#token").val();
    var id = $("#id").val();
    $.ajax({
      type: "post",
      data: "id=" + id + "&pro_name=" + pro_name + "&pro_info=" + pro_info + "&pro_code=" +  pro_code + "&pro_price=" + pro_price + "&_token=" + token,
      url: "<?php echo url('/admin/saveProduct') ?>",
      success:function(data){
        $("#msg").html("Product has been updated");
        $("#msg").fadeOut(2000);
      }
    });
  });

  var auto_refresh = setInterval(
    function(){
      $('#products').load('<?php echo url('admin/products');?>').fadeIn("slow");
    },100);


});
</script>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="content">
                            <h2>Product Image</h2>
                            <img src="{{url('/public/img')}}/{{$data[0]->pro_img}}"
                            width="100%"/>
                                <div class="footer" style="text-align:center">
                                <a href="{{url('admin/changeImage')}}/{{$data[0]->id}}" class="btn btn-fill btn-sm btn-primary">change product image</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">

                            <div class="content">
                              <p id="msg" class="alert alert-success"></p>
                              <input type="hidden" value="{{$data[0]->id}}" id="id"/>
                            <input type="hidden" value="{{csrf_token()}}" id="token"/>
                                <label>Product Name</label>
                                <input type="text" id="pro_name" value="{{$data[0]->pro_name}}" class="form-control"/>
                                <br>

                                <label>Product Code</label>
                                <input type="text" id="pro_code" value="{{$data[0]->pro_code}}" class="form-control"/>
                                <br>

                                <label>Product Price</label>
                                <input type="text" id="pro_price" value="{{$data[0]->pro_price}}" class="form-control"/>
                                <br>

                                <label>Product Info</label>
                                <textarea type="text" id="pro_info"  class="form-control">{{$data[0]->pro_info}}</textarea>
                                <br>
                                  <input type="submit" class="btn btn-success btn-fill" value="Submit" id="btn"/>

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
