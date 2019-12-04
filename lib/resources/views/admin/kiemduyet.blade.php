@extends('admin.master')
@section('title', 'Kiểm duyệt bình luận')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Kiểm duyệt bình luận</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Kiểm duyệt bình luận</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th>Tên</th>
										<th>Tên sản phẩm</th>
										<th>Nội dung bình luận</th>
										<th>ngày đăng</th>
									</tr>
								</thead>
								<tbody>
								
									<tr>
										<td>{{$comment->com_name}}</td>
										<td>{{$prod->product_name}}</td>
										<td>{{$comment->com_content}}</td>
										<td>{{$comment->created_at}}</td>
									</tr>
									
								</tbody>
							</table>
							<label>Trạng thái</label>
							<form method="post">
								<select required name="status" class="form-control" style="width: 30%">
									<option value="0">Không cho phép bình luận</option>
									<option value="1">Cho phép bình luận</option>
			                    </select>
			                    <input type="submit" class="btn btn-primary" value="Xử lý" style="margin-top: 15px">
			                    {{csrf_field()}}
		                	</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop