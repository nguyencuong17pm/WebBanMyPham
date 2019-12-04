@extends('admin.master')
@section('title', 'Đổi mật khẩu')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thay đổi mật khẩu</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Đổi mật khẩu
					</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							@include('errors.note')
							<div class="form-group">
								<label>Mật khẩu củ:</label>
								<input required type="password" name="matkhaucu" class="form-control" value="">
							</div>
							<div class="form-group">
								<label>Nhập email:</label>
								<input required type="text" name="email" class="form-control" value="">
							</div>
							<div class="form-group">
								<label>Mật khẩu mới:</label>
								<input required type="password" name="matkhaumoi" class="form-control" value="">
							</div>
							<div class="form-group">
								<label>Xác nhận mật khẩu mới:</label>
								<input required type="password" name="xacnhanmatkhau" class="form-control" value="">
							</div>
							<div class="form-group">
								<input required type="submit" name="submit" class="form-control btn btn-primary" value="Cập nhật">
							</div>
							<div class="form-group">
								<a href="{{asset('admin/home')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop