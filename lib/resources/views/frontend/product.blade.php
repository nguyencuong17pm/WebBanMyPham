@extends('frontend.master')
@section('title','Sản Phẩm')
@section('main')
@include('frontend.slide')
<div class="product">
	<div class="container">
		@foreach($category as $cate)
		<div class="col-md-12">
				<h1 style="text-align: center; font-family: bookman;">Sản Phẩm {{$cate->cate_name}}</h1>
				<label class="line"></label>
			<div class="row">
				<div class="mid-popular">
					@foreach($product as $prod)
				@if($prod->prod_cate == $cate->cate_id)
					<div class="col-md-3 item-grid1 simpleCart_shelfItem">
						<div class=" mid-pop">
							<div class="pro-img">
								<img src="{{asset('lib/storage/app/avatar/'.$prod->product_img)}}" style="width: 232px; height: 255px;" class="img-responsive" alt="">
								<div class="zoom-icon ">
									<a class="picture" href="{{asset('lib/storage/app/avatar/'.$prod->product_img)}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
									<a href="{{asset('detail/'.$prod->prod_id.'/'.$prod->product_slug.'.html')}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
								</div>
							</div>
							<div class="mid-1">
								<div class="women">
									<div class="women-top">
										@if($prod->product_trangthai==1)
													<span>Còn Hàng</span>
													@else
													<span>Hết Hàng</span>
													@endif
										<h6 style="font-family: bookman;"><a href="{{asset('detail/'.$prod->prod_id.'/'.$prod->product_slug.'.html')}}">{{$prod->product_name}}</a></h6>
									</div>
									<div class="img item_add">
										<a href="{{asset('card/add/'.$prod->prod_id)}}"><img src="images/ca.png" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									@if($prod->product_giakhuyenmai != 0)
												<p style="font-family: bookman;">
													<label>{{number_format($prod->product_gia,0,',','.')}} VNĐ
													</label>
													<p class="item_price">{{number_format($prod->product_giakhuyenmai,0,',','.')}} VNĐ
													</p>
												</p>
												@else
												<label>{{number_format($prod->product_gia,0,',','.')}} VNĐ</label>
												@endif
									<!-- <div class="block">
										<div class="starbox small ghosting"> </div>
									</div> -->

									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
						@endif
				@endforeach
				</div>
				<div class="clearfix"></div>
			</div>
		
		</div>
		@endforeach
		
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
				var menu_ul = $('.menu-drop > li > ul'),
				menu_a  = $('.menu-drop > li > a');
				menu_ul.hide();
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});

			});
		</script>
		<!--//menu-->



		<!---->

	</div>
	<div class="clearfix"></div>
</div>
@stop