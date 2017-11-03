<?php include("header.php"); ?> 
    <div class="container">
		<div class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
				        <ul>
				          	<li><a href="#">Home</a></li>
				         	<li><span class="dot">/</span><a href="#">Billing &amp; Shipping</a></li>
				        </ul>
	                </div>
                </div>
		    </div>
	    	<div class="row top20 hidden-xs">
	            <div class="col-sm-3">
		          <div class="wht-box">
		            <div class="wht-boxHd">Shopping Cart</div>
		            <div class="wht-boxTxt hidden-sm">Do you want to look on order?</div>
		          </div>
		        </div>
		        <div class="col-sm-3">
		          <div class="blk-box">
		            <div class="blk-boxHd">Billing &amp; Shipping</div>
		            <div class="blk-boxTxt hidden-sm">Where should we send this order?</div>
		            <div class="arrow-down"></div>
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
		    <div class="row">
		        <div class="col-xs-12 col-sm-6 col-md-6">
		            <div class="chose_area">
		              <h4 >Billing Address</h4>
		              <input type="text" class="list-group-item" onfocus="if(this.value=='Name')this.value='';" onblur="if(this.value=='')this.value='Name';" value="Name"/>
		              <input type="text" class="list-group-item" onfocus="if(this.value=='Address')this.value='';" onblur="if(this.value=='')this.value='Address';" value="Address"/>
		              <input type="text" class="list-group-item" onfocus="if(this.value=='State')this.value='';" onblur="if(this.value=='')this.value='State';" value="State"/>
		              <input type="text" class="list-group-item" onfocus="if(this.value=='Pincode')this.value='';" onblur="if(this.value=='')this.value='Pincode';" value="Pincode"/>
		              <input type="text" class="list-group-item" onfocus="if(this.value=='Country')this.value='';" onblur="if(this.value=='')this.value='Country';" value="Country"/>
		              <input type="text" class="list-group-item" onfocus="if(this.value=='Phone No.')this.value='';" onblur="if(this.value=='')this.value='Phone No.';" value="Phone No."/>
		              <ul class="user_option">
		                <li>
		                  <input type="checkbox">
		                  <label>Shipping address same as billling address </label>
		                </li>
		              </ul>
		            </div>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-6">
		            <div class="chose_area">
		                <h4 >Shipping Address</h4>
		                <input type="text" class="list-group-item" onfocus="if(this.value=='Meera')this.value='';" onblur="if(this.value=='')this.value='Meera';" value="Meera"/>
		                <input type="text" class="list-group-item" onfocus="if(this.value=='H.no 12/01 Ludhiana')this.value='';" onblur="if(this.value=='')this.value='H.no 12/01 Ludhiana';" value="H.no 12/01 Ludhiana"/>
		                <input type="text" class="list-group-item" onfocus="if(this.value=='Punjab')this.value='';" onblur="if(this.value=='')this.value='Punjab';" value="Punjab"/>
		                <input type="text" class="list-group-item" onfocus="if(this.value=='141001')this.value='';" onblur="if(this.value=='')this.value='141001';" value="141001"/>
		                <input type="text" class="list-group-item" onfocus="if(this.value=='India')this.value='';" onblur="if(this.value=='')this.value='India';" value="India"/>
		                <input type="text" class="list-group-item" onfocus="if(this.value=='1234567890')this.value='';" onblur="if(this.value=='')this.value='1234567890';" value="1234567890"/>
		                <input type="submit" value="Continue Process" class="btn btn-default code" />
		            </div>
	            </div>
	        </div>
		</div>
	</div>
<?php include("footer.php"); ?> 