@include('admin/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>Reply Complaints</title>
	<style type="text/css">
		body
		{
			background-color: red;
		}
		
		h2
		{
			color: white;
			margin-top: 10px;
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
		input,select
		{
			padding-left: 10px;
			height: 30px;
		}
		select
		{
			width:210px;
		}

	</style>
</head>
<body>
	<center>
			<div style="border-style: solid;margin-left: 500px;
			margin-right: 500px;
			height: 600px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:10px;
			margin-bottom: 10px">
				<form method="post" action="{{'/complaint_reply_insert/'.$data->complaint_id}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Reply Complaint</h2><br>
					<label id="name">Complaint Name:</label><br>
					<input type="text" name="name" value="{{$data->complaint_name}}" readonly="" ><br><br>

					<label id="">Complaint Email:</label><br>
					<input type="email"  name="email" value="{{$data->complaint_email}}" readonly="" ><br><br>

					<label id="">Complaint Type:</label><br>
					<input type="text" name="type" value="{{$data->complaint_type}}" readonly=""><br><br>

					<label id="">Customer Message:</label><br>
					<input type="text" name="msg" value="{{$data->message}}" readonly=""><br><br>

					<label id="">Your Message:</label><br>
					<input type="text" name="reply"><br><br>

					
					<button type="submit">Send</button><br><br>
					<!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/blood_bank')}}">Home</a> -->

				</form>
			</div>

	</center>

</body>
</html>


@include('admin/layout/footer');