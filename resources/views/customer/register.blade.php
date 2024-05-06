<!DOCTYPE html>
<html>
<head>
	<title>Customer Register</title>
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
			height: 865px;
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
		/*#pass
		{
			padding-right: 90px;
		}
		#name
		{
			padding-right: 113px;
		}*/
		/*label
		{
			padding-right: 100px
		}*/
		button
		{
			background-color: lightgreen;
		}
		input
		{
			padding-left: 20px;
			height: 20px;
		}
		select
		{
			height: 30px;
			width: 190px;
		}

	</style>
</head>
<body>
	<center>
			<div id="register">
				<form method="post" action="{{'/customer_insert_register'}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Register Here..!</h2><br>
					<label id="name">Your Name:</label><br>
					<input type="text" name="name" ><br><br>

					<label id="">Your Email:</label><br>
					<input type="email" name="email" ><br><br>

					<label id="">Your Phone:</label><br>
					<input type="phone" name="phone" ><br><br>

					<label id="">Your Address:</label><br>
					<input type="text" name="address" ><br><br>

					<label id="">Your Blood Group:</label><br>
					<select name="blood">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select><br><br>

					

					<label id="">Your Fitness Certificate:</label><br><br>
					<input type="file" name="fitness" ><br><br>

					<label id="">Your Id Proof:</label><br><br>
					<input type="file" name="proof" ><br><br>

					<label id="pass">Your Password:</label><br>
					<input type="password" name="pass" ><br><br>

					<label id="pass">Confrim Password:</label><br>
					<input type="password" name="confirm_pass" ><br><br>

					<button type="submit">Register</button><br><br>
					<a href="{{url('/login')}}">Already Register..?</a><br><br>
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