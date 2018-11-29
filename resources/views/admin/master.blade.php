<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>LaraShop55 - @yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{Config::get('app.url')}}/admin_theme/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{Config::get('app.url')}}/admin_theme/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{Config::get('app.url')}}/admin_theme/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{Config::get('app.url')}}/admin_theme/assets/css/demo.css" rel="stylesheet" />

		<link href="{{Config::get('app.url')}}/node_modules/select2/dist/css/select2.min.css"
		rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{Config::get('app.url')}}/admin_theme/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="{{Config::get('app.url')}}/admin_theme/assets/js/jquery-1.10.2.js" type="text/javascript"></script>

<style>
    .row_head div{ border:1px solid #efefef}
    .row_body, .row_head div{
        padding:10px;
        text-align:center
    
    }
    .row_body{ border-bottom:1px solid #efefef}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{Config::get('app.url')}}/admin_theme/assets/img/sidebar-5.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/admin')}}" class="simple-text">
                   LaraShop55
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url('/admin')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

								<li>
									<a href="{{url('/admin/profile')}}">
										<i class="pe-7s-user"></i>
										<p>Profile</p>
									</a>
								</li>

								<li>
										<a href="{{url('/admin/addProduct')}}">
												<i class="pe-7s-note"></i>
												<p>Product</p>
										</a>
								</li>

								<li>
									<a href="{{url('/admin/addCategory')}}">
										<i class="pe-7s-notebook"></i>
										<p>Category</p>
									</a>
								</li>

								<li>
									<a href="{{url('/admin/users')}}">
										<i class="pe-7s-notebook"></i>
										<p>Users</p>
									</a>
                                </li>
                                
                                <li>
									<a href="{{url('/admin/orders')}}">
										<i class="pe-7s-note2"></i>
										<p>Orders</p>
									</a>
								</li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">

                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="{{url('/admin')}}/profile">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>
                     <a href="">LaraShop55</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{Config::get('app.url')}}/admin_theme/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="{{Config::get('app.url')}}/admin_theme/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{Config::get('app.url')}}/admin_theme/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="{{Config::get('app.url')}}/admin_theme/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="{{Config::get('app.url')}}/admin_theme/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  -->
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{Config::get('app.url')}}/admin_theme/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{Config::get('app.url')}}/admin_theme/assets/js/demo.js"></script>
	<script src="{{Config::get('app.url')}}/node_modules/select2/dist/js/select2.min.js"></script>
	<script type="text/javascript">
    	/*$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to LaraShop55 Admin."

            },{
                type: 'info',
                timer: 4000
            });

    	}); */
	</script>

</html>
