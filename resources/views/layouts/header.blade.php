<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url('/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ url('/css/animate.css') }}" rel="stylesheet">
	<link href="{{ url('/css/main.css') }}" rel="stylesheet">
	<link href="{{ url('/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"></i> +2 95 01 88 821</a></li>
								<li><a href="#"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ route('magazin/index') }}"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							@auth
     @if(Auth::user()->hasRole('user'))
								<li><a href="{{ route('magazin/account') }}"></i> Account</a></li>
								@endif
@endauth
@auth

@if(Auth::user()->hasRole('admin'))
								<li><a href="{{ route('magazin/accountadmin') }}"></i> Account</a></li>
@endif
@endauth

								<li><a href="#"></i> Wishlist</a></li>
								<li><a href="{{ route('magazin/checkout') }}"></i> Checkout</a></li>
								<li><a href="{{ route('magazin/cart') }}"></i> Cart</a></li>
								<li><a href="{{ route('login') }}"></i> Login</a></li>
								<li><a href="{{ route('register') }}"></i> Register</a></li>



							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							<li class="dropdown"><a href="{{ route('magazin/index') }}">Home</i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></li>
	
                                    </ul>
                                </li> 
								
								<li class="dropdown"><a href="{{ route('magazin/shop') }}">Shop</i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ route('magazin/shop') }}">Products</a></li>
										<li><a href="{{ route('magazin/checkout') }}">Checkout</a></li> 
										<li><a href="{{ route('magazin/cart') }}">Cart</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog</i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ route('magazin/blog') }}">Blog List</a></li>
										<li><a href="{{ route('magazin/blogsingle') }}">Blog Single</a></li>

                                    </ul>
                                </li> 

								<li><a href="{{ route('magazin/contact-us') }}">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    @yield('content')