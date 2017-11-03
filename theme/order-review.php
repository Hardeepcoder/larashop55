<?php include("header.php"); ?> 
    <div class="container">
		<div class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
				        <ul>
				          	<li><a href="#">Home</a></li>
				         	<li><span class="dot">/</span><a href="#">Order Review</a></li>
				        </ul>
	                </div>
                </div>
		    </div>
	    	<div class="row hidden-xs">
	            <div class="col-sm-3">
		          <div class="wht-box">
		            <div class="wht-boxHd">Shopping Cart</div>
		            <div class="wht-boxTxt hidden-sm">Do you want to look on order?</div>
		          </div>
		        </div>
		        <div class="col-sm-3">
		          <div class="wht-box">
		            <div class="wht-boxHd">Billing &amp; Shipping</div>
		            <div class="wht-boxTxt hidden-sm">Where should we send this order?</div>
		            
		          </div>
		        </div>
	            <div class="col-sm-3">
		          <div class="blk-box">
		            <div class="blk-boxHd">Order Review</div>
		            <div class="blk-boxTxt hidden-sm">How do you want to pay for your order?</div>
		            <div class="arrow-down"></div>
		          </div>
		        </div>
		        <div class="col-sm-3">
		          <div class="wht-box">
		            <div class="wht-boxHd">Confirmation</div>
		            <div class="wht-boxTxt hidden-sm">Confirm your order</div>
		          </div>
		        </div>
	        </div>
		    <div class="row">
		        <h2>Order Review</h2>
		        <div class="cart">
		            <div class="col-sm-8">
			            <h4><i class="fa fa-shopping-cart redtext"></i> Shopping Basket</h4>
			            <div class="cart-row">
			                <div class="row">
				                <div class="col-xs-4 col-sm-3 col-md-2 text-center"><img src="images/thumb1.jpg" class="img-responsive" /></div>
				                <div class="col-xs-8 col-sm-4 col-md-4">
				                <strong>Pink Tunic</strong>
				                </div>
				                <div class="col-xs-12 col-sm-3 col-md-3">
				                    <div class="cart-qty"> <span>Qty : </span>
				                       
				                    </div>
				                   
				                    
				                </div>
				                <div class="col-xs-12 col-sm-2 col-md-3">
				                    <h6>Unit Price</h6>
				                    <p>Rs.2,500</p>
				                    <hr/>
				                    <h6 class="redtext">Total: Rs.2,500</h6>
				                </div>
			                </div>
			            </div>
		            </div>
		            <div class="col-sm-4 col-md-4">
			            <h4><i class="fa fa-map-marker redtext"></i> Shipping Address</h4>
			            <div class="add-address">
			                <p>Meera</p>
			                <p>H.no 12/01 Ludhiana, Punjab (141001)</p>
			                <p>1234567890</p>
			            </div>
		            </div>
		        </div>
		    </div>
		    <div class="row">
		        <hr/>
		    </div>
		    <div class="row btm25">
		        <div class="cart">
		            <div class="col-xs-12 col-sm-12 col-md-5">
			            <h4>Payment Method</h4>
			            <div class="pm-box">
			              <div class="col-xs-12 col-md-12">
			                <input type="radio" class="pm-radio" value="PayU">
			                <label class="pm-text">Pay by Netbanking/Credit Card/Debit Card </label>
			              </div>
			            </div>
			            <div class="pm-box">
			              <div class="col-xs-12 col-md-12">
			                <input type="radio" class="pm-radio" value="PayU">
			                <label class="pm-text">Cash on Delivery</label>
			              </div>
			            </div>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-3">
			            <h4>Total Amount</h4>
			            <table>
			              <tbody>
			                <tr>
			                  <td><strong>Sub Total</strong></td>
			                  <td>Rs. 5,500</td>
			                </tr>
			                <tr>
			                  <td><strong>Discount (If Any)</strong></td>
			                  <td>Rs. 100</td>
			                </tr>
			                <tr>
			                  <td><strong>Total</strong></td>
			                  <td>Rs. 5,500</td>
			                </tr>
			              </tbody>
			            </table>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-4">
			            <div class="col-xs-12 col-sm-12 col-md-10 pull-right">
			              <h4>Add Comments</h4>
			              <textarea class="form-control" row="3" col="3"></textarea>
			              <input type="submit" class="btn check_out btn-block" value="Place Order">
			            </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
<?php include("footer.php"); ?> 