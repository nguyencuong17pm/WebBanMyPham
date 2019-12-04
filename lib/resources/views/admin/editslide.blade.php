@extends('admin.master')
@section('title', 'Banner')
@section('main')	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Banner</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Sửa banner</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								@include('errors.note')
								<div class="form-group" >
									<label>Tiêu Đề chính</label>
									<input required type="text" name="name" class="form-control" value="{{$slide->s_name}}">
								</div>
								<div class="form-group" >
									<label>Tiêu Đề phụ</label>
									<input required type="text" name="name2" class="form-control" value="{{$slide->s_name2}}">
								</div>
								<div class="form-group" >
									<label>Ảnh banner</label>
									<input required id="img" type="file" value="{{$slide->s_img}}" name="img" class="form-control" onchange="changeImg(this)">
								</div>
								<div class="form-group" >
									<label>Liên kết</label>
									<input required type="text" name="lienket" class="form-control" value="{{$slide->s_link}}">
								</div>
								<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
								<a href="{{asset('admin/slide')}}" class="btn btn-danger">Hủy bỏ</a>
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