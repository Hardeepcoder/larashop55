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
    var token = $("#token").val();

    $.ajax({
      type: "post",
      data: "pro_name=" + pro_name + "&pro_code=" + pro_code + "&pro_price=" + pro_price + "&_token=" + token,
      url: "<?php echo url('/admin/saveProduct') ?>",
      success:function(data){
        $("#msg").html("Product has been inserted");
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
                    <div class="col-md-7">
                        <div class="card">

                            <div class="content">
                            <h2>Add Product</h2>
                            <p id="msg" class="alert alert-success"></p>

                          <input type="hidden" value="{{csrf_token()}}" id="token"/>
                              <label>Product Name</label>
                              <input type="text" id="pro_name" class="form-control"/>
                              <br>

                              <label>Product Code</label>
                              <input type="text" id="pro_code" class="form-control"/>
                              <br>

                              <label>Product Price</label>
                              <input type="text" id="pro_price" class="form-control"/>
                              <br>
                                <input type="submit" class="btn btn-success btn-fill" value="Submit" id="btn"/>


                              <div class="footer">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card">

                            <div class="content" id="products">
                           <p> Fusce quis dictum erat, ornare mattis quam. Pellentesque eget ipsum hendrerit, feugiat risus lacinia, accumsan eros. In fringilla volutpat elementum. Integer volutpat ex ut pharetra auctor. Vivamus turpis arcu, sollicitudin id est nec, imperdiet consectetur sapien. Integer quis volutpat velit, id auctor leo</p>
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
