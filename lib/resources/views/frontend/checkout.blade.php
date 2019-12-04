@extends('frontend.master')
@section('title','Sản Phẩm')
@section('main')

<div class="check-out">
	<div class="container">
		@if(Cart::getTotalQuantity() >= 1)
		<div class="col-sm-7">
			<div class="bs-example4" data-example-id="simple-responsive-table">
				<div class="col-6" style="background: #F67777; padding: 15px; font-family: Times New Roman; border-radius: 10px 10px 0 0; font-size: 25px"  >Thông Tin giỏ hàng</div>
				
				<table class="table">
					<thead>
						<tr>
							<th style="border: 1px solid #F67777; font-family: italic" scope="col" width="">Sản Phẩm</th>
							<th style="border: 1px solid #F67777; font-family: italic" scope="col" width="15%">Giá</th>
							<th style="border: 1px solid #F67777; font-family: italic" scope="col" width="20%">Số lượng</th>
							<th style="border: 1px solid #F67777; font-family: italic" scope="col" width="20%">Thành tiền</th>
							<th style="border: 1px solid #F67777; font-family: italic" scope="col" width="5%">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($items as $item)
						<tr>
							<th style="border: 1px solid #F67777; font-family: italic">
								<img width="100%" src="{{asset('lib/storage/app/avatar/'.$item->attributes->img)}}">{{$item->name}}
							</th>
							<td style="border: 1px solid #F67777; font-family: italic">
								@if($item->product_giakhuyenmai != 0 )
								{{number_format($item->pricekhuyenmai,0,',','.')}} VNĐ 
								@else 
								{{number_format($item->price,0,',','.')}} VNĐ 
								@endif
							</td>
							<td style="border: 1px solid #F67777; font-family: italic"><div class="form-group">
							<input class="form-control" type="number" value="{{$item->quantity}}">
						</div></td>
							<td style="border: 1px solid #F67777; font-family: italic">@if($item->product_giakhuyenmai != 0) 
								{{number_format($item->pricekhuyenmai*$item->quantity,0,',','.')}} VNĐ
								@else 
								{{number_format($item->price*$item->quantity,0,',','.')}} VNĐ 
							@endif</td>
							<td style="border: 1px solid #F67777; font-family: italic"><a href="{{asset('cart/delete/'.$item->id)}}"><span class="glyphicon glyphicon-remove"></span></a></td>
						</tr>
						@endforeach
						<tr>
							<td style="border: 1px solid #F67777; font-family: italic" colspan="3">
								Tổng thanh toán
							</td>
							<td style="border: 1px solid #F67777; font-family: italic" colspan="2">
								{{number_format($total,0,',','.')}} VNĐ
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="produced" style="margin-top: 30px">
				<a href="{{asset('product')}}" class="hvr-skew-backward">Thêm sản phẩm</a>
				<a href="{{asset('cart/delete/all')}}" class="hvr-skew-backward">Xóa giỏ hàng</a>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="thongtin" style="background: #F67777; padding: 20px; font-family: Times New Roman; border-radius: 10px 10px 0 0; font-size: 25px"  >Thông Tin giao hàng</div>
			<form class="form-horizontal" method="post">
				<div style="border: 1px solid #F67777">
					<div class="form-group" style="margin-top: 10px">
						<label class="control-label col-sm-3">Email</label>
						<div class="col-sm-9">
							<input type="email" required name="email" class="form-control" placeholder="Nhập Email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Họ và tên</label>
						<div class="col-sm-9"> 
							<input type="text" required name="name" class="form-control" placeholder="Họ và tên">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Số điện thoại</label>
						<div class="col-sm-9"> 
							<input type="text" required name="phone" class="form-control" placeholder="Số điện thoại">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Địa chỉ</label>
						<div class="col-sm-9"> 
							<textarea name="diachi" required type="text" cols="42" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group text-right" style="margin-right: 10px"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="hvr-skew-backward">Thực hiện đơn hàng</button>
						</div>
					</div>
					{{csrf_field()}}
				</div>
				
			</form>
		</div>
		@else
		<div class="col-sm-7">
			<div class="bs-example4" data-example-id="simple-responsive-table">
				<div class="col-6" style="background: #F67777; padding: 15px; font-family: Times New Roman; border-radius: 10px 10px 0 0; font-size: 25px"  >Thông Tin giỏ hàng</div>
				<div style="border: 1px solid #F67777; font-family: Times New Roman; text-align: center;padding: 15px;">
					<h2>Giỏ hàng rổng</h2>
				</div>
			</div>
		</div>
		@endif
	</div>
</div>
@stop
