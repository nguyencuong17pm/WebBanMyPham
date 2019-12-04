<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<title>@yield('title') | Mỹ phẩm MWhite</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link rel="stylesheet" media="screen" href="js/bootstrap.min.js">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--theme-style-->
	<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<script src="js/jquery.min.js"></script>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' '+val);
						return val;
					} 
				})
			});
		});
	</script>
	<!---//End-rate---->

</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class=" logo">
					<a href="{{asset('/')}}"><img src="images/mwhitelogo.jpg" alt=""></a>	
				</div>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="col-sm-5 col-md-offset-2  header-login">
				<!-- 	<ul >
						@if(Auth::check())
						<li><a href="{{asset('thongtin')}}" class="glyphicon glyphicon-user"> {{Auth::user()->name}}</a></li>
						<li><a href="{{asset('dangxuat')}}">Đăng xuất</a></li>
						@else
						<li><a href="{{asset('dangnhap')}}">Đăng nhập</a></li>
						<li><a href="{{asset('dangki')}}">Đăng kí</a></li>
						@endif
					</ul> -->
				</div>
				
				<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="{{asset('/')}}"><i></i></a></li>
						<li><a href="{{asset('https://www.facebook.com/Trang98ag')}}"><i class="ic1"></i></a></li>
						<li><a href="{{asset('/')}}"><i class="ic2"></i></a></li>
						<li><a href="{{asset('/')}}"><i class="ic3"></i></a></li>
						<li><a href="{{asset('/')}}"><i class="ic4"></i></a></li>
					</ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="container">

			<div class="head-top">

				<div class="col-sm-8 col-md-offset-2 h_menu4">
					<nav class="navbar nav_bottom" role="navigation">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div> 
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" style="font-family: Bookman; font-size: 20px">
							<ul class="nav navbar-nav nav_1">
								<li><a class="color" href="{{asset('/')}}">Trang chủ</a></li>
								<li><a class="color" href="{{asset('product')}}">Sản Phẩm</a></li>
								<!-- <li class="dropdown mega-dropdown active">
									<a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm<span class="caret"></span></a>				
									<div class="dropdown-menu ">
										<div class="menu-top">
											<div class="col1">
												<div class="h_nav">
													<a href=""><h4>Dưỡng Da Mặt</h4></a>
													<a href=""><h4>Dưỡng Body</h4></a>
													<a href=""><h4>Tăng & Giảm Cân</h4></a>
													<a href=""><h4>Trang Điểm</h4></a>
												</div>							
											</div>
											<div class="clearfix"></div>
										</div>                  
									</div>				
								</li> -->
								<li><a class="color3" href="{{asset('productkhuyenmai')}}">Khuyến Mãi</a></li>
								<li><a class="color3" href="{{asset('productkhuyenmai')}}">Blog</a></li>
								<li ><a class="color6" href="{{asset('contact')}}">Giới Thiệu</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
				<div class="col-sm-2 search-right">
					<ul class="heart">
						<li>
							<a href="{{asset('/')}}" >
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
							</a></li>
							<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
						</ul>
						<div class="cart box_1">
							<a href="{{asset('cart/show')}}">
								<h3>
									<div class="total">
{{number_format(Cart::getTotal(),0,',','.')}}
									</div>
									<img src="images/cart.png" alt=""/></h3>
								</a>
								<p><a href="{{asset('cart/show')}}" class="simpleCart_empty">Giõ Hàng</a></p>

							</div>
							<div class="clearfix"> </div>

							<!----->

							<!---pop-up-box---->					  
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							<!---//pop-up-box---->
							<div id="small-dialog" class="mfp-hide">
								<form action="{{asset('search')}}" method="get">
								<div class="search-top">
									<div class="login-search">
										<input type="submit" value="">
										<input type="text" required name="tukhoa" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
									</div>
									</form>
									<p>MWhite</p>
								</div>				
							</div>
							<script>
								$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});

								});
							</script>		
							<!----->
						</div>
						<div class="clearfix"></div>
					</div>	
				</div>	
			</div>
			<!--banner-->
			


@yield('main')


			<div class="footer" style="margin-top: 20px; font-family: Bookman; font-size: 20px;">
					<div class="footer-middle">
						<div class="container">
							<div class="col-md-3 footer-middle-in">
								<ul class=" in">
								<a href="{{asset('/')}}"><img width="120" src="images/mwhitelogo.jpg" alt=""></a>
								<li><a href="{{asset('contact')}}" style="margin-top: 15px;">Giới thiệu</a></li>
								</ul>
							</div>

							<div class="col-md-3 footer-middle-in">
								<h6>Liên hệ</h6>
								<ul class=" in">
									<li><a href="https://www.facebook.com/Trang98ag">Facebook: Nguyễn Hải Thiên Trang</a></li>
									<li><p>Zalo: 0912.431.884</p></li>
									<li><p>Điện thoại tư vấn: 0912.431.884</p></li>
									<li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+H%E1%BB%8Dc+T%C3%A2y+%C4%90%C3%B4/@9.9990704,105.7577634,17z/data=!4m12!1m6!3m5!1s0x31a089c799d1a341:0xa3c33eac2e0e8938!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBUw6J5IMSQw7Q!8m2!3d9.9990651!4d105.7599521!3m4!1s0x31a089c799d1a341:0xa3c33eac2e0e8938!8m2!3d9.9990651!4d105.7599521">Cửa hàng Cần Thơ</a></li>
									<li><a href="https://www.google.com/maps/place/Ch%E1%BB%A3+C%E1%BA%A7n+%C4%90%C4%83ng,+C%E1%BA%A7n+%C4%90%C4%83ng,+Ch%C3%A2u+Th%C3%A0nh,+An+Giang,+Vi%E1%BB%87t+Nam/@10.4594397,105.294916,21z/data=!4m5!3m4!1s0x310a1199fa6360ad:0xd36d89cece2d3afc!8m2!3d10.4593829!4d105.2950544">Cửa hàng An Giang</a></li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="col-md-3 footer-middle-in">
								<h6>Tags</h6>
								<ul class="tag-in">
									@foreach($category as $cate)
									<li><a href="{{asset('product')}}">{{$cate->cate_name}}</a></li>
									@endforeach
								</ul>
							</div>
							<div class="col-md-3 footer-middle-in">
								<h6>Hỗ trợ khách hàng</h6>
									<ul class=" in">
									<li><a href="https://www.facebook.com/Trang98ag"><img src="https://img.icons8.com/color/48/000000/facebook.png">  Email</a></li>
									
									<li><a href="https://mail.google.com/mail/u/0/#inbox"><img src="https://img.icons8.com/color/48/000000/gmail.png">  Email</a></li>

								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="container">
							<p class="footer-class">&copy; Tổng Đại Lý Mỹ Phẩm MWHITE Khu Vực Miền Nam | Design by  <a href="https://www.facebook.com/profile.php?id=100005303627815" target="_blank">Hạnh Lê</a> </p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!--//footer-->
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="js/simpleCart.min.js"> </script>
				<!-- slide -->
				<script src="js/bootstrap.min.js"></script>
				<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
				<!--light-box-files -->
				<script src="js/jquery.chocolat.js"></script>
				<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
				<!--light-box-files -->
				<script type="text/javascript" charset="utf-8">
					$(function() {
						$('a.picture').Chocolat();
					});
				</script>
			</body>
			</html>