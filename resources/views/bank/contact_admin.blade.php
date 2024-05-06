@include ('bank/layout/header');


<head>
	<title>Contact Admin</title>
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
		
		.btn
		{
			background-color: lightgreen;
			width: 80px;
		}
		input
		{
			padding-left: 10px;
			height: 30px;
		}

		#msg
		{
			height: 150px;
			padding: 0px;
		}

	</style>
</head>

	<center>
			<div style="border-style: solid;margin-left: 500px;
			margin-right: 500px;
			height: 550px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:10px;
			margin-bottom: 10px">

				<form method="post" action="{{'/bank_complaint'}}">
					{{csrf_field()}}
					<h2>Contact Admin</h2><br>
					<label id="name">Your Name:</label><br>
					<input type="text" readonly="" value="{{$data->bank_name}}" name="name" ><br><br>

					<label id="">Your Email:</label><br>
					<input type="email" readonly="" value="{{$data->bank_email}}" name="email"  ><br><br>

					

					<label >Your Message</label><br>
					<input id="msg" type="text" name="msg"  ><br><br>


					
					<button class="btn" type="submit">Send</button><br><br>
					<!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/blood_bank')}}">Home</a> -->

				</form>
			</div>

	</center>




@include('bank/layout/footer')