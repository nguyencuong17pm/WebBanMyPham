
<!--banner-->
@extends('frontend.master')
@section('title','Chi Tiết Sản Phẩm')
@section('main')
<div class="container">
	<h2 style="padding: 15px;font-family: bookman;">Chi Tiết Sản Phẩm</h2>
	<div class="col-md-12">
		<div class="col-md-5 grid">		
			<div class="flexslider">
				<ul class="slides">
					<li data-thumb="{{asset('lib/storage/app/avatar/'.$item->product_img)}}">
						<div class="thumb-image"> <img src="{{asset('lib/storage/app/avatar/'.$item->product_img)}}" data-imagezoom="true" class="img-responsive"> </div>
					</li>
					<li data-thumb="{{asset('lib/storage/app/avatar/'.$item->product_img1)}}">
						<div class="thumb-image"> <img src="{{asset('lib/storage/app/avatar/'.$item->product_img1)}}" data-imagezoom="true" class="img-responsive"> </div>
					</li>
					<li data-thumb="{{asset('lib/storage/app/avatar/'.$item->product_img2)}}">
						<div class="thumb-image"> <img src="{{asset('lib/storage/app/avatar/'.$item->product_img2)}}" data-imagezoom="true" class="img-responsive"> </div>
					</li> 
				</ul>
			</div>
		</div>	
		<div class="col-md-7 single-top-in">
			<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3 style="font-family: bookman;">{{$item->product_name}}</h3>
				<p class="in-para" style="font-family: bookman;">Xuất xứ: MWhite</p>
				<div class="price_single" style="font-family: bookman;">
					@if($item->product_giakhuyenmai != 0)
					<span class="reducedfrom item_price" style="font-family: bookman;">{{number_format($item->product_giakhuyenmai,0,',','.')}} VNĐ</span>
					@else
					<span class="reducedfrom item_price" style="font-family: bookman;">{{number_format($item->product_gia,0,',','.')}} VNĐ</span>
					@endif
					<div class="clearfix"></div>
				</div>
				<h4 class="quick" style="font-family: bookman;">Thành Phần</h4>
				<p class="quick_desc" style="font-family: bookman;">{!!$item->product_thanhphan!!}</p>
				<div class="quantity"> 
					<div class="quantity-select">                           
						<div class="entry value-minus">&nbsp;</div>
						<div class="entry value"><span>1</span></div>
						<div class="entry value-plus active">&nbsp;</div>
					</div>
				</div>
				<script>
					$('.value-plus').on('click', function(){
						var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
						divUpd.text(newVal);
					});
					$('.value-minus').on('click', function(){
						var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
						if(newVal>=1) divUpd.text(newVal);
					});
				</script>
				<a href="{{asset('card/add/'.$item->prod_id)}}" class="add-to item_add hvr-skew-backward" style="font-family: bookman;">Thêm vào giỏ hàng</a>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="tab-head">
			<nav class="nav-sidebar">
				<ul class="nav tabs">
					<li class="active"><a href="#tab1" data-toggle="tab" style="font-family: bookman;">Bảo hành</a></li>
					<li class=""><a href="#tab2" data-toggle="tab" style="font-family: bookman;">Công dụng</a></li> 
					<li class=""><a href="#tab3" data-toggle="tab" style="font-family: bookman;">Hướng dẫn sử dụng</a></li>  
				</ul>
			</nav>
			<div class="tab-content one">
				<div class="tab-pane active text-style" id="tab1">
					<div class="facts">
						<p style="font-family: bookman;">{!!$item->product_baohanh!!}</p>
					</div>

				</div>
				<div class="tab-pane text-style" id="tab2">
					
					<div class="facts">									
						<p style="font-family: bookman;">{!!$item->product_congdung!!}</p>
					</div>	

				</div>
				<div class="tab-pane text-style" id="tab3">
					<div class="facts">
						<p style="font-family: bookman;">{!!$item->product_hdsd!!}</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>	
		<div class="well" style="margin-top: 10px">
			<form method="post" style="margin-top: 10px">
				@include('errors.note')
				<div class="form-group">
					<label style="font-family: bookman">Nhập tên</label>
					<input required class="form-control" type="text" name="name" placeholder="Nhập tên...........">
					<label style="font-family: bookman">Viết bình luận...<span class="glyphicon glyphicon-pencil"></span></label>
					<textarea required class="form-control" name="content" cols="30" rows="10"></textarea>
					<input type="hidden" value="0" name="kiemduyet">
				</div>
				<button type="submit" class="btn btn-primary">Gửi</button>
				{{csrf_field()}}
			</form>
			@foreach($comments as $com)
			@if($com->com_kiemduyet == 1)
			<div class="media" style="border: 1px solid #F67777; border-radius: 5px; font-family: italic">
				<div class="media-body">
					<h5 class="mt-0" style="margin-left: 15px; font-size: 20px">{{$com->com_name}}</h5>
					<p class="mt-0" style="margin-left: 20px; font-size: 12px">Ngày đăng {{$com->created_at}}</p> 
					<p style="margin-left: 25px; font-size: 20px;">{{$com->com_content}}</p>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<script src="js/imagezoom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});
</script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
@stop