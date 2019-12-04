@extends('admin.master')
@section('title', 'Bình Luận')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Bình Luận</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách bình luận chưa kiểm duyệt</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th width="15%">Tên khách hàng</th>
										<th width="15%">Tên sản phẩm</th>
										<th width="35%">Nội dung</th>
										<th width="15%">Trạng thái</th>
										<th width="20%">Kiểm duyệt</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach($commentprod as $com)
									@if($com->com_kiemduyet == 0)
									<tr>
										<td>{{$com->com_name}}</td>
										<td>{{$com->product_name}}</td>
										<td>{{$com->com_content}}</td>
										<td>
											@if($com->com_kiemduyet == 0)Chưa duyệt
											@endif
										</td>
										<td>
											<a href="{{asset('admin/comment/kiemduyet/'.$com->com_id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Kiểm duyệt</a>
											<a href="{{asset('admin/comment/delete/'.$com->com_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endif
									@endforeach
								</tbody>
								
							</table>							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách bình luận đã kiểm duyệt</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th width="15%">Tên khách hàng</th>
										<th width="15%">Tên sản phẩm</th>
										<th width="30%">Nội dung</th>
										<th width="15%">Trạng thái</th>
										<th width="15%">Ngày đăng</th>
										<th width="10%">Xóa bình luận</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach($commentprod as $com)
									@if($com->com_kiemduyet == 1)
									<tr>
										<td>{{$com->com_name}}</td>
										<td>{{$com->product_name}}</td>
										<td>{{$com->com_content}}</td>
										<td>@if($com->com_kiemduyet == 1)Đã duyệt
											@endif</td>
											<td>{{$com->created_at}}</td>
										<td>
											<a href="{{asset('admin/comment/delete/'.$com->com_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endif
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