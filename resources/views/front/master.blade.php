<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=no"  />	
<title>LaraShop 55</title>
<link type="text/css" href="{{Config::get('app.url')}}/theme/css/bootstrap.css" rel="stylesheet"/>
<link type="text/css" href="{{Config::get('app.url')}}/theme/css/font-awesome.css" rel="stylesheet" />
<link type="text/css" href="{{Config::get('app.url')}}/theme/css/style.css" rel="stylesheet"/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<header id="header" class="hidden-xs">
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6"><div class="tollNum">Tollfree : 888 888 8888</div></div>
				<div class="col-sm-6">
					<div class="account-link">
						<ul>
							<li><a href="/">MY ACCOUNT</a></li>
							<li><a onclick="javascript:showDiv('slidingDiv');" href="javascript:;">SEARCH</a>
								<div id="slidingDiv" class="srchBox">
									 <input type="text" value="" />
						            <i class="fa fa-search"></i>
						           
						        </div> 
							</li>
							<li><a href="/">LOGIN</a></li>
						</ul>	
					</div>
				</div>
		    </div>
	    </div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-2"><div class="logo"><a href="index.php"
			class="logo-container"><img src="{{Config::get('app.url')}}/theme/images/logo.jpg" /></a></div></div>
    		<div class="col-sm-8">
				<div class="nav-link">
					<ul>
						
						<li><a href="/">Products</a>
							<ul class="dropdown">
				                <li><a href="#">Suspendisse semper</a></li>
				                <li><a href="#">lorem gravida</a></li>
				                <li><a href="#">Vestibulum</a></li>
				                <li><a href="#">Tincidunt </a></li>				            
				            </ul>	
						</li>
						
					</ul>	
				</div>
		    </div>
		    <div class="col-sm-2">
				<div class="nav-btns">
					<div class="nav-cart">
						<img src="{{Config::get('app.url')}}/theme/images/cart.png"/> CART(0)
					</div>
				</div>
		    </div>
		</div>
	</div>
</header>
<header id="header" class=" hidden-sm hidden-md hidden-lg">
	<div class="nav-toggle"><div class="icon-menu"> <span class="line line-1"></span> <span class="line line-2"></span> <span class="line line-3"></span> </div></div>
	<div class="logo"><a href="index.php"><img src="{{Config::get('app.url')}}/theme/images/logo.jpg" alt=""  /></a></div>
	<div class="m-cart">
		<div class="nav-btns">
			<div class="nav-cart">
				<img src="images/cart.png"/>
				<span>0</span>
			</div>
		</div>
	</div>
	<div class="nav-container">
		<div class="mob-srch">
           <input type="text" placeholder="Search here..." />
        </div>
		<div>
		    <ul class="topnav">
		    	
		        <li><a href="#">Products</a>
		            <ul>
								<li><a href="#">Suspendisse semper</a></li>
				                <li><a href="#">lorem gravida</a></li>
				                <li><a href="#">Vestibulum</a></li>
				                <li><a href="#">Tincidunt </a></li>		          
				    </ul>	
		        </li>
		      
		       
		    </ul>
	        <div class="mob-nav">
	        	<ul>
	        		<li><a href="business-enquiry.php"> <i class="fa fa-th"></i> Bulk Buying</a></li>
                    <li><a href="faq.php"><i class="fa fa-question-circle"></i> Faq's</a></li>
                    <li><a href="testimonials.php"><i class="fa fa-users"></i> Testimonials</a></li>
                    <li><a href="shipping-policy.php"><i class="fa fa-paper-plane"></i> Shipping Policy</a></li>
                    <li><a href="return-policy.php"><i class="fa fa-refresh"></i> Return Policy</a></li>
		          	<div class="clearfix"></div>
		        </ul>  	
	        </div>
        </div>
	</div>
	<div class="clearfix"></div>
</header>	


<div class="container-fluid">
	
	<div class="home-content">
		<div class="row">	
		    <div class="banner"><img src="{{Config::get('app.url')}}/theme/images/banner1.jpg" alt="" /></div>
	    </div>
	    <div class="container">
			<div class="row">
				<div class="home-text">	
					<h1 class="text-center">Nam tincidunt eros consectetur odio viverra fermentum</h1>
					<p class="text-center">Pellentesque eu venenatis erat. Cras lacinia a orci sed faucibus. Vestibulum congue arcu vitae elit efficitur, quis mollis mauris posuere. In volutpat vestibulum diam, nec convallis nibh interdum non. Duis vestibulum laoreet dolor et gravida. Mauris nisi turpis, ultrices et arcu blandit, dictum volutpat est.</p>
					<div class="blackbtn">READ MORE</div>
				</div>
			</div>
	    </div>
	    <div class="row">	
			<div class="yellowBg">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="images/doshas.png" alt="" /></div>
							<h3>Ayurvedic Doshas</h3>
							<div class="col-text">In Ayurveda, there are 3 doshas that make up one’s constitution: Vata (gas), Pitta (bile) and Kapha (mucus). Maintaining balance between these doshas ensures perfect health.</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="images/gluten-allergy.png" alt="" /></div>
							<h3>Gluten Allergy</h3>
							<div class="col-text">Found in wheat, rye and barley, gluten is a common allergen linked to 50+ diseases. If you too have gluten intolerance, allergy or sensitivity, don’t worry – we can help you cure it.</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="images/diet.png" alt="" /></div>
							<h3>Ayurvedic Diet</h3>
							<div class="col-text">We are probably the only company that doesn’t want you to come back to us again and again. Made with love, our Ayurvedic diet can surely help you be in good health always.</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="container hidden-xs">
            <div id="hdLine"><span><h1>Our Product Range</h1></span><hr></div>
       		<div class="row">
       			<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{Config::get('app.url')}}/theme/images/1.jpg" alt="" /></div>
	    				<label>Lorem ipsum1</label>
	    				<span class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
	    				<div class="addcart">
	    					<div class="price">Rs 900.00</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{Config::get('app.url')}}/theme/images/2.jpg" alt="" /></div>
	    				<label>Lorem ipsum2</label>
	    				<span class="hidden-xs"> Nunc pharetra nulla nec dolor sodales</span>
	    				<div class="addcart">
	    					<div class="price">Rs 900.00</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{Config::get('app.url')}}/theme/images/3.jpg" alt="" /></div>
	    				<label>Lorem ipsum3</label>
	    				<span class="hidden-xs">id congue mauris efficitur</span>
	    				<div class="addcart">
	    					<div class="price">Rs 900.00</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
       		</div>
       		<div class="row hidden-xs">
       			<div class="col-sm-12">
		   			<div class="topSell">
		   				<h3>DISCOVER OUR TOP SELLERS PRODUCTS FOR BODYCARE</h3>
		   				<span class="bttn"><a href="">SHOP NOW</a></span>
		   			</div>
       		    </div>
       		</div>
       		<div class="row">
       			<div class="col-sm-4 text-center">
       				<div class="helpIco">
       					<img src="{{Config::get('app.url')}}/theme/images/free-shipping.png" alt="" />
       				</div>
       			
       				<h5>Free Shipping</h5>
       				<div class="helpText">Get your desirable product on your doorstep and  free delivery on all over india.</div>
       			</div>
       			<div class="col-sm-4 text-center">
       				<div class="helpIco"><img src="{{Config::get('app.url')}}/theme/images/call-us.png" alt="" /></div>
       				<h5>Call : +1&shy; 1223 45566</h5>
       				<div class="helpText">If you have any question feel free to contact us and we would be happy to help you</div>
       			</div>
       			<div class="col-sm-4 text-center">
       				<div class="helpIco"><img src="{{Config::get('app.url')}}/theme/images/return-policy.png" alt="" /></div>
       				<h5>Return Policy</h5>
       				<div class="helpText">If you want to return, feel free to contact our customer service</div>
       			</div>
       		</div>
        </div>
    </div>
</div>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-3 col-lg-3 hidden-xs">
          <h5>More Info</h5>
          <div class="ft-link">
            <ul>
              <li><a href="business-enquiry.php">Bulk Buying</a></li>
              <li><a href="faq.php">Faq's</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
              <li><a href="shipping-policy.php">Shipping Policy</a></li>
              <li><a href="return-policy.php">Return Policy</a></li>
            </ul>  
          </div>  
        </div>
        <div class="col-sm-3 col-lg-3 hidden-xs">
           <h5>Resources</h5>
           <div class="ft-link">
            <ul>
              <li><a href="ayurvedic-doshas.php">Ayurvedic Doshas</a></li>
              <li><a href="gluten-allergy.php">Gluten Allergy</a></li>
              <li><a href="ayurvedic-diet.php">Ayurvedic Diet</a></li>
            </ul>  
          </div>  
        </div>
        <div class="col-sm-5 col-lg-4">
          <h5>Newsletter</h5>
          <div class="newsletter"> 
            <p>Sign up for email to get the latest updates &amp; more.</p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="enter your email...">
              <span class="input-group-btn">
                <input type="submit" class="btn btn-default" type="button" Value="Subscribe" />
              </span>
            </div>
            <ul class="social">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="youtube"><i class="fa fa-play"></i></a></li>
            </ul>  
          </div>
        </div>
      </div>
    </div>  
    <div class="row">
      <div class="col-sm-12">
        <div class="copyrt">
          &copy; 2017 LaraShop55. All Rights Reserved. <a href="terms-conditions.php">Terms &amp; Conditions</a>
        </div>
      </div>       
    </div>
  </div>
</footer>
<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/html5.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/bootstrap.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/multiple-accordion.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/jquery.nice-select.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/jquery.bootstrap-responsive-tabs.js"></script>
<script>
$(function() {
    var html = $('html, body'),
        navContainer = $('.nav-container'),
        navToggle = $('.nav-toggle'),
        navDropdownToggle = $('.has-dropdown');
    // Nav toggle
    navToggle.on('click', function(e) {
        var $this = $(this);
        e.preventDefault();
        $this.toggleClass('is-active');
        navContainer.toggleClass('is-visible');
        html.toggleClass('nav-open');
    });
});
</script>
<script language="JavaScript">
  $(document).ready(function() {
    $(".topnav").accordion({
      accordion:false,
      speed: 500,
      closedSign: '+',
      openedSign: '-'
    });
  });
</script>
<script type="text/javascript">

    $(document).ready(function() {
      $('select').niceSelect();      
      FastClick.attach(document.body);
    });
</script>
<script>
$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs', 'sm']
});
</script>
<script type="text/javascript">
  function showDiv(divname){
    closealldivs(divname);
    $("#"+divname).slideToggle();
  }
  function closeMe(trgt)
  {
   $("#slidingDiv"+trgt).toggle();
  }
  function closealldivs(divname){
    for(var i=1; i<=3; i++){
      var abc="slidingDiv"+i;
      if(divname!=abc){
     $("#slidingDiv"+i).hide(); }
  }}
</script>
<script type="text/javascript">
  $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
</body>
</html>