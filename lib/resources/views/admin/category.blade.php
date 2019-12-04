@extends('admin.master')
@section('title', 'Danh Mục')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm danh mục
				</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-md-5 col-lg-5">
							<div class="form-group">
								<label>Tên danh mục:</label>
								@include('errors.note')
								<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group" style="margin-top: 10px;">
								<label>Ảnh đại diện</label>
								<input required id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
							</div>
							<input type="submit" class="form-control btn btn-primary" value="Thêm danh mục" style="margin-top: 15px">
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách danh mục</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Tên danh mục</th>
									<th>Ảnh đại diện</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@foreach($catelist as $cate)
								<tr>
									<td>{{$cate->cate_name}}</td>
									<td>
										<img src="{{asset('lib/storage/app/avatar/'.$cate->cate_img)}}" style="width: 250px;">
									</td>
									<td>
										<a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{asset('admin/category/delete/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop