	<!--A Design by W3layouts 
	Author: W3layout
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('frontend.master')
@section('title','Trang Chủ')
@section('main')
@include('frontend.slide')
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-mid">
			<h3 style="font-family: bookman;">Sản phẩm với từ khóa: {{$nameSearch}} </h3>
			<label class="line"></label>
			<div class="mid-popular">
				@foreach($items as $item)
				<div class="col-md-3 item-grid simpleCart_shelfItem">
					<div class="mid-pop" style="margin-bottom: 15px">
						<div class="pro-img">
							<img src="{{asset('lib/storage/app/avatar/'.$item->product_img)}}" style="width: 232px; height: 255px;" class="img-responsive" alt="">
							<div class="zoom-icon ">
								<a class="picture" href="{{asset('lib/storage/app/avatar/'.$item->product_img)}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
								<a href="{{asset('detail/'.$item->prod_id.'/'.$item->product_slug.'.html')}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
							</div>
						</div>
						<div class="mid-1">
							<div class="women">
								<div class="women-top">
									@if($item->product_trangthai==1)
									<span>Còn Hàng</span>
									@else
									<span>Hết Hàng</span>
									@endif
									<h6 style="font-family: bookman;"><a href="{{asset('detail/'.$item->prod_id.'/'.$item->product_slug.'.html')}}">{{$item->product_name}}</a></h6>
								</div>
								<div class="img item_add">
									<a href="{{asset('card/add/'.$item->prod_id)}}"><img src="images/ca.png" alt=""></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								@if($item->product_giakhuyenmai != 0)
								<p style="font-family: bookman;">
									<label>{{number_format($item->product_gia,0,',','.')}} VNĐ
									</label>
									<p class="item_price">{{number_format($item->product_giakhuyenmai,0,',','.')}} VNĐ
									</p>
								</p>
								@else
								<label>{{number_format($item->product_gia,0,',','.')}} VNĐ</label>
								@endif
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@stop