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
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					@include('errors.note');
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="price" class="form-control" value="0">
								</div>
								<div class="form-group" >
									<label>Giá khuyến mãi</label>
									<input required type="number" name="price_km" class="form-control" value="0">
								</div>
								<div class="form-group" >
									<label>Ảnh đại diện sản phẩm</label>
									<input required id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
								</div>
								<div class="form-group" >
									<label>Ảnh chi tiết sản phẩm</label>
									<input required id="img" type="file" name="img1" class="form-control" onchange="changeImg(this)">
								</div>
								<div class="form-group" >
									<label>Ảnh chi tiết sản phẩm</label>
									<input required id="img" type="file" name="img2" class="form-control" onchange="changeImg(this)">
								</div>
								<div class="form-group">
									<label>Thành phần</label>
									<textarea class="ckeditor" required name="thanhphan"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('thanhphan',{
											language:'vi',
											filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Bảo hành</label>
									<textarea class="ckeditor" required name="baohanh"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('baohanh',{
											language:'vi',
											filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Công Dụng</label>
									<textarea class="ckeditor" required name="congdung"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('congdung',{
											language:'vi',
											filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Hướng dẫn sử dụng</label>
									<textarea class="ckeditor" required name="huongdansudung"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('huongdansudung',{
											language:'vi',
											filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										@foreach($catelist as $cate)
										<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1">Còn hàng</option>
										<option value="0">Hết hàng</option>
									</select>
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{asset('admin/product')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop