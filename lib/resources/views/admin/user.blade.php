@extends('admin.master')
@section('title', 'Banner')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Người dùng</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách người dùng</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">
									
								<thead>
									<tr class="bg-primary">
										<th width="10%">ID</th>
										<th>Tên</th>
										<th>Email</th>
										<th>Ngày đăng kí</th>
										<th>Quyền hạn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $us)
									<tr>
										<td>{{$us->id}}</td>
										<th>{{$us->name}}</th>
										<td>{{$us->email}}</td>
										<td>{{$us->created_at}}</td>
										<td>
											@if($us->level == 1)
											Admin
											@else
											Người dùng
											@endif
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