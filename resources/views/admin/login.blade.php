<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="{{url('customer/assets/css/login.css')}}">
	<style type="text/css">
		
	</style>
	{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

</head>
<body>
	
			<div id="admin_login">
				<form method="post" action="{{url('/admin_insert_login')}}">
					{{csrf_field()}}
					<h2>Admin Login Form..!</h2><br>
					<label id="name">Your Email:</label><br>
					<input type="email" name="email" placeholder="Your Email"><br><br>
					<label id="pass">Your Password:</label><br>
					<input type="password" name="pass" placeholder="Your Password"><br><br>
					<button type="submit">Login</button><br><br>
					<a href="{{url('/admin_register')}}">Not Registered Yet..?</a><br><br>
					<a href="{{url('/index')}}">Home</a>
				</form>
			</div>

	

</body>
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}

@if(session('pass'))
<script type="text/javascript">
	Swal.fire({
		text:"{{session('pass')}}",
		icon:'success',
		confirmButtonText:'OK'
	});
</script>
	
@endif

@if(session('fail'))
<script type="text/javascript">
	Swal.fire({
		text:'{{session('fail')}}',
		icon:'danger',
		confirmButtonText:'OK'
	});

</script>
	
@endif


</html>



