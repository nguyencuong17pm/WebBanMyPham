<title>Đăng nhập</title>

	<!-- <base href="{{asset('public/layout/frontend')}}/"> -->
	<link rel="stylesheet" href="css/styleregister.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Đăng nhập</h4>
	<p class="text-center">Get started with your free account</p>
	<form method="post" action="dangnhap">
        @include('errors.note')
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input required name="taikhoan" class="form-control" placeholder="Nhập tài khoản" type="text">
    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input required name="matkhau" class="form-control" placeholder="Nhập mật khẩu" type="password">
    </div>
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
    </div>
    <p class="text-center">Bản chưa có tài khoản? <a href="{{asset('dangki')}}">Đăng kí tại đây</a></p>  {{csrf_field()}}                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


