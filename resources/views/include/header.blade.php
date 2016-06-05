<!DOCTYPE html>
<html>
<head>
<title>ktmkart.com</title>
<link href="{{asset("assets/css/bootstrap.css")}}" rel='stylesheet' type='text/css' />
<link href="{{asset("assets/css/flexslider.css")}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<!-- Custom Theme files -->
<link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ktmkart Nepal's online shopping store" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset("assets/js/bootstrap-3.1.1.min.js")}}"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="{{asset("assets/js/simpleCart.min.js")}}"> </script>
<!-- cart -->
<link href="{{asset("assets/css/component.css")}}" rel="stylesheet"  type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="{{ route('account') }}"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="{{asset("assets/images/bag.png")}}" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="inner-banner">
		<div class="container">
			<div class="banner-top inner-head">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href={{ url('/') }}><span>K</span> -kart</a></h1>
				</div>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href={{url('/')}}>Home</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="{{url('product')}}">New In Clothing</a></li>
						            <li><a href="{{url('product')}}">New In Bags</a></li>
						            <li><a href="{{url('product')}}">New In Shoes</a></li>
						            <li><a href="{{url('product')}}">New In Watches</a></li>
						            <li><a href="{{url('product')}}">New In Grooming</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="{{url('product')}}">Polos & Tees</a></li>
						            <li><a href="{{url('product')}}">Casual Shirts</a></li>
						            <li><a href="{{url('product')}}">Casual Trousers</a></li>
						            <li><a href="{{url('product')}}">Jeans</a></li>
						            <li><a href="{{url('product')}}">Shorts & 3/4th</a></li>
						            <li><a href="{{url('product')}}">Formal Shirts</a></li>
						            <li><a href="{{url('product')}}">Formal Trousers</a></li>
						            <li><a href="{{url('product')}}">Suits & Blazers</a></li>
						            <li><a href="{{url('product')}}">Track Wear</a></li>
						            <li><a href="{{url('product')}}">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="{{url('product')}}">Analog</a></li>
						            <li><a href="{{url('product')}}">Chronograph</a></li>
						            <li><a href="{{url('product')}}">Digital</a></li>
						            <li><a href="{{url('product')}}">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-c{olumn-dropdown">
									<h6>NEW IN</h6{>
						            <li><a href="{{url('product')}}">New In Clothing</a></li>
						            <li><a href="{{url('product')}}">New In Bags</a></li>
						            <li><a href="{{url('product}')}}">New In Shoes</a></li>
						            <li><a href="{{url('product}')}}">New In Watches</a></li>
						            <li><a href="{{url('product')}}">New In Beauty</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-c{olumn-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="{{url('product')}}">Polos & Tees</a></li>
						            <li><a href="{{url('product')}}">Casual Shirts</a></li>
						            <li><a href="{{url('product')}}">Casual Trousers</a></li>
						            <li><a href="{{url('product')}}">Jeans</a></li>
						            <li><a href="{{url('product')}}">Shorts & 3/4th</a></li>
						            <li><a href="{{url('product')}}">Formal Shirts</a></li>
						            <li><a href="{{url('product')}}">Formal Trousers</a></li>
						            <li><a href="{{url('product}')}}">Suits & Blazers</a></li>
						            <li><a href="{{url('product}')}}">Track Wear</a></li>
						            <li><a href="{{url('product')}}">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-c{olumn-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="{{url('product')}}">Analog</a></li>
						            <li><a href="{{url('product}')}}">Chronograph</a></li>
						            <li><a href="{{url('product}')}}">Digital</a></li>
						            <li><a href="{{url('product')}}">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">{
					            <ul class="multi-c{olumn-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="{{url('product')}}">New In Boys Clothing</a></li>
						            <li><a href="{{url('product')}}">New In Girls Clothing</a></li>
						            <li><a href="{{url('product')}}">New In Boys Shoes</a></li>
						            <li><a href="{{url('product')}}">New In Girls Shoes</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">{
					             <ul class="multi-{column-dropdown">
									<h6>ACCESSORIES</h6>
						            <li><a href="{{url('product')}}">Bags</a></li>
						            <li><a href="{{url('product')}}">Watches</a></li>
						            <li><a href="{{url('product')}}">Sun Glasses</a></li>
						            <li><a href="{{url('product')}}">Jewellery</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					<li><a href="typography.html">TYPO</a></li>
					<li><a href="{{ url('contact')}}">CONTACT</a></li>
	        </ul>
	    </div>



