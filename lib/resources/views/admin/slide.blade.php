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
				<div class="panel-heading">Danh sách banner</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{asset('admin/slide/add')}}" class="btn btn-primary">Thêm banner</a>
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th width="10%">ID</th>
										<th>Ảnh</th>
										<th>Tiêu đề chính</th>
										<th>Tiêu đề phụ</th>
										<th>Ngày thêm</th>
										
										<th width="15%">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($slide as $s)
									<tr>
										<td>{{$s->s_id}}</td>
										<th>
											<img src="{{asset('lib/storage/app/avatar/'.$s->s_img)}}"/ style="width: 250px;">
										</th>
										<td>{{$s->s_name}}</td>
										<td>{{$s->s_name2}}</td>
										<td>{{$s->created_at}}</td>
										<td>
											<a href="{{asset('admin/slide/editslide/'.$s->s_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
											<a href="{{asset('admin/slide/delete/'.$s->s_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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