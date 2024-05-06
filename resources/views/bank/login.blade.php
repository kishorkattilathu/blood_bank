<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Bank Login</title>
	<style type="text/css">
		body
		{
			background-color: red;
		}
		#login
		{
			background-color: white;
			margin-left: 500px;
			margin-right: 500px;
			height: 325px;
			padding-top: 30px
			margin-top:30px;
			border-style: solid;
			border-color: yellow;
			margin-top: 150px;
		}
		h2
		{
			color: red;
			margin-top: 30px;
			padding-top: 10px;
		}
		#pass
		{
			padding-right: 90px;
		}
		#name
		{
			padding-right: 113px;
		}
		button
		{
			background-color: lightgreen;
		}
		input
		{
			padding-left: 20px;
			height: 20px;
		}
	</style>
</head>
<body>
	<center>
			<div id="login">
				<form method="post" action="{{url('/bank_insert_login')}}">
					{{csrf_field()}}
					<h2>Bank Login Form..!</h2><br>
					<label id="name">Your Email:</label><br>
					<input type="email" name="email" placeholder="Your Email"><br><br>
					<label id="pass">Your Password:</label><br>
					<input type="password" name="pass" placeholder="Your Password"><br><br>
					<button type="submit">Login</button><br><br>
					<a href="{{url('/bank_register')}}">Not Registered Yet..?</a><br><br>
					<a href="{{url('/index')}}">Home</a>
				</form>
			</div>
	</center>

</body>

@if(session('pass'))
<script type="text/javascript">
	Swal.fire({
		text:'{{session('pass')}}',
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