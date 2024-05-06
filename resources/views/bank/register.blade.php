<!DOCTYPE html>
<html>
<head>
	<title>Bank Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style type="text/css">
		body
		{
			background-color: red;
		}
		#register
		{
			background-color: white;
			margin-left: 500px;
			margin-right: 500px;
			height: 720px;
			padding-top: 30px
			margin-top:30px;
			border-style: solid;
			border-color: yellow;
		}
		h2
		{
			color: red;
			margin-top: 30px;
			padding-top: 10px;
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
			<div id="register">
				<form method="post" action="{{'/bank_insert_register'}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Bank Registration</h2><br>
					<label id="name">Bank Name:</label><br>
					<input type="text" name="name" required><br><br>

					<label id="">Bank Email:</label><br>
					<input type="email" name="email" required><br><br>

					<label id="">Bank Address:</label><br>
					<input type="text" name="address" required><br><br>

					<label id="">Bank Phone:</label><br>
					<input type="phone" name="phone" required><br><br>

					<label>Bank Image:</label><br><br>
					<input type="file" name="bank_image" required><br><br>

					<label>Bank Documents:</label><br><br>
					<input type="file" name="documents" required><br><br>

					<!-- <label id="">Type</label><br>
					<input type="text" name="type" ><br><br> -->

					<label id="pass">Password:</label><br>
					<input type="password" name="pass"  required><br><br>

					<label id="pass">Confrim Password:</label><br>
					<input type="password" name="confirm_pass" required><br><br>

					<button type="submit">Register</button><br><br>
					<a href="{{url('/bank_login')}}">Already Register..?</a><br><br>
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