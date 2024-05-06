<!DOCTYPE html>
<html>
<head>
	<title>Admin Register</title>
	<style type="text/css">
		body
		{
			background-color: red;
		}
		div
		{
			background-color: white;
			margin-left: 500px;
			margin-right: 500px;
			height: 600px;
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

	</style>
</head>
<body>
	<center>
			<div>
				<form method="post" action="{{'/admin_insert_register'}}">
					{{csrf_field()}}
					<h2>Admin Registration</h2><br>
					<label id="name">Your Name:</label><br>
					<input type="text" name="name" ><br><br>

					<label id="">Your Email:</label><br>
					<input type="email" name="email" ><br><br>

					<label id="">Your Phone:</label><br>
					<input type="phone" name="phone" ><br><br>

					<label id="">Your Address:</label><br>
					<input type="text" name="address" ><br><br>

					<label id="pass">Your Password:</label><br>
					<input type="password" name="pass" ><br><br>

					<label id="pass">Confrim Password:</label><br>
					<input type="password" name="confirm_pass" ><br><br>

					<button type="submit">Register</button><br><br>
					<a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/index')}}">Home</a>

				</form>
			</div>

	</center>

</body>
</html>