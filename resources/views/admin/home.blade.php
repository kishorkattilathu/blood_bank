@include('admin/layout/header');


<head>
	<title>My Profile</title>
	<style type="text/css">
		body
		{
			background-color: red;
		}
		
		h2
		{
			color: white;
			margin-top: 30px;
			padding-top: 10px;
		}
		label,a
		{
			color: white;
		}
		
		button
		{
			background-color: lightgreen;
			width: 80px;
		}
		input
		{
			padding-left: 10px;
			height: 30px;
		}

	</style>
</head>

	<center>
			<div style="border-style: solid;margin-left: 500px;
			margin-right: 500px;
			height: 620px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:20px;
			margin-bottom: 10px">
				<form method="post" action="{{url('/admin_profile_update')}}">
					{{csrf_field()}}
					<h2>My Profile</h2><br>
					<label id="name">Your Name:</label><br>
					<input type="text" name="name" value="{{$data->admin_name}}" ><br><br>

					<label id="">Your Email:</label><br>
					<input type="email" readonly="" name="email" value="{{$data->admin_email}}" ><br><br>

					<label id="">Your Phone:</label><br>
					<input type="phone" name="phone" value="{{$data->admin_phone}}" ><br><br>

					<label id="">Your Address:</label><br>
					<input type="text" name="address" value="{{$data->admin_address}}" ><br><br>

					<label id="pass">Your Password:</label><br>
					<input type="text" name="pass" value="{{$data->admin_password}}" ><br><br>

					
					<button type="submit">Update</button><br><br>
					<!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/blood_bank')}}">Home</a> -->

				</form>
			</div>

	</center>




@include('admin/layout/footer');