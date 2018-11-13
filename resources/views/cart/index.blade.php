@extends('front.master')
  @section('content')
  <script>
  $(document).ready(function(){
    $("#CartMsg").hide();
    //$('#CartTotal').hide();
    @foreach($data as $pro)
    $("#upCart{{$pro->id}}").on('change keyup', function(){
      var newQty = $("#upCart{{$pro->id}}").val();
      var rowID = $("#rowID{{$pro->id}}").val();
      $.ajax({
          url:'{{url('/cart/update')}}',
          data:'rowID=' + rowID + '&newQty=' + newQty,
          type:'get',
          success:function(response){
            $("#CartMsg").show();
            console.log(response);
            $("#CartMsg").html(response);
          }
      });
    });
    @endforeach
  $('#coupon_btn').click(function(){
      var coupon_id = $('#coupon_id').val();
      //alert(coupon_id);
      $.ajax({
        url:'{{url('/checkCoupon')}}',
        data: 'code=' + coupon_id,
        success:function(res){
       // alert(res);
       $('#cartTotal').html(res);
        }
      })
  });
   
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
                    <a href="">cart</a>
  			        </ul>
              </div>
           </div>
  		    </div>
            @if(Cart::count()!="0")
          <!-- design of cart page -->
          <div class="row top20 hidden-xs">
                <div class="col-sm-3">
                  <div class="blk-box">
                    <div class="blk-boxHd">Shopping Cart</div>
                    <div class="blk-boxTxt hidden-sm">Do you want to look on order?</div>
                    <div class="arrow-down"></div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Billing &amp; Shipping</div>
                    <div class="wht-boxTxt hidden-sm">Where should we send this order?</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Order Review</div>
                    <div class="wht-boxTxt hidden-sm">How do you want to pay for your order?</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="wht-box">
                    <div class="wht-boxHd">Confirmation</div>
                    <div class="wht-boxTxt hidden-sm">Confirm your order</div>
                  </div>
                </div>
            </div>
         </div>

                <div class="row">
                  <div class="cart">
                      <div class="col-sm-12">
                        <h2>Shopping Basket</h2>
                        <div class="row">
                            <div class="col-sm-8">
                              @if(isset($msg))
                              <div class="alert alert-info">{{$msg}}</div>
                              @endif
                              <div class="alert alert-info" id="CartMsg"></div>

                            @foreach($data as $pro)

                              <div class="cart-row">
                                  <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                    <img src="{{Config::get('app.url')}}/public/img/{{$pro->options->img}}"
                                     class="img-responsive pull-left" width="100px" />
                                      <span class="pull-left top20">
                                      <a href="{{url('details')}}/{{$pro->id}}">
                                          <b>{{ucwords($pro->name)}}</b>
                                        </a>
                                      </span>

                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                      <input type="hidden" value="{{$pro->rowId}}"
                                       id="rowID{{$pro->id}}"/>
                                    <div class="cart-qty"> <span>Qty : </span>
                                        <input type="number" max="10" min="1"
                                        value="{{$pro->qty}}" class="qty-fill"
                                        id="upCart{{$pro->id}}">
                                      </div>
                                      <a class="cart-remove btn btn-success" >Update</a>
                                      <a href="{{url('cart/remove')}}/{{$pro->rowId}}"
                                         class="cart-remove btn btn-danger">Remove</a>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                      <h6>Unit Price</h6>
                                      <p>${{$pro->price}}
                                      </p>

                                      <hr/>
                                      <h6 class="redtext">
                                        Sub Total: {{$pro->subtotal}}
                                        <br>
                                        Total(included Tax): {{$pro->total}}
                                      </h6>
                                    </div>
                                  </div>
                              </div>
                              @endforeach

                              <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="chk-coupon">
                                  <label>Coupon Code (if any)</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="coupon_id" >
                                      <span class="input-group-btn">
                                      <input type="button" class="btn btn-primary fld-btn"
                                      value="Redeem Coupon" id="coupon_btn"/>
                                      </span>
                                  </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-4" id="cartTotal">
                            <div class="cart-total" >
                                <h4>Total Amount</h4>
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>Sub Total</td>
                                      <td>$ {{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                      <td>Tax (%)</td>
                                      <td>$ {{Cart::tax()}}</td>
                                    </tr>
                                   
                                  
                                    <tr>
                                      <td>Grand Total</td>
                                      <td>$ {{Cart::total()}}</td>
                                    </tr>
                                  </tbody>
                                </table>
                          
                         <a href="{{url('checkout')}}" class="btn check_out btn-block">checkout</a>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                </div>
                @else
                <div class="row">
                   <div class="col-md-2 col-md-offset-5 top25">
                    <img src="{{Config::get('app.url')}}/public/img/empty-cart-page-doodle.png"
                    class="img-response"/>
                    <br><br>
                    <p style="text-align:center">Nothing in the bag<br><br>
                    <a href="{{url('products')}}"
                    class="btn btn-fill btn-primary">Continue Shopping</a>
                    </p>

                  </div>
                </div>
                @endif


  <!-- design of cart page  end -->
</div>
</div>
</div>
@endsection
