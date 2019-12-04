@extends('admin.master')
@section('title', 'Sản Phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách sản phẩm</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Tên Sản phẩm</th>
										<th>Giá sản phẩm</th>
										<th>Giá khuyến mãi</th>
										<th>Ảnh đại diện sản phẩm</th>
										<th>Danh mục</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($prodlist as $prod)
									<tr>
										<td>{{$prod->prod_id}}</td>
										<td>{{$prod->product_name}}</td>
										<td>{{number_format($prod->product_gia)}} đ</td>
										<td>{{number_format($prod->product_giakhuyenmai)}} đ</td>
										<td>
											<img src="{{asset('lib/storage/app/avatar/'.$prod->product_img)}}" style="width: 250px;">
										</td>
										<!-- <td>{{$prod->prod_cate}}</td> -->
										
										<td>@foreach($catelist as $cate)
											@if($prod->prod_cate==$cate->cate_id)
												{{$cate->cate_name}}
											@endif
											@endforeach
										</td>
										<td>
											<a href="{{asset('admin/product/edit/'.$prod->prod_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
											<a href="{{asset('admin/product/delete/'.$prod->prod_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop