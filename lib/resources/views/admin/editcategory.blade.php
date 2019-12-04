@extends('admin.master')
@section('title', 'Sửa Danh Mục')
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
						Sửa danh mục
					</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->cate_name}}">
							</div>
							<div class="form-group" style="margin-top: 10px;">
								<label>Ảnh đại diện</label>
								<input required id="img" type="file" name="img" class="form-control" onchange="changeImg(this)" value="{{$cate->cate_img}}">
							</div>
							<div class="form-group">
								<input required type="submit" name="submit" class="form-control btn btn-primary" value="Cập nhật">
							</div>
							<div class="form-group">
								<a href="{{asset('admin/category')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop