@include('admin/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>Add Donor</title>
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
			height: 825px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:10px;
			margin-bottom: 10px">
				<form method="post" action="{{url('/add_donor')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Add Donor</h2><br>
					<label id="name">Donor Name:</label><br>
					<input type="text" name="name" ><br><br>

					<label id="">Donor Email:</label><br>
					<input type="email"  name="email"><br><br>

					<label id="">Donor Gender:</label><br>
					<input type="text" name="gender"><br><br>

					<label id="">Donor Phone:</label><br>
					<input type="phone" name="phone"><br><br>

					<label id="">Donor Location:</label><br>
					<input type="text" name="location" ><br><br>

					<label id="">Bank</label><br>
					<select name="bank">
						@foreach ($bank as $ban)
						<option type="text" readonly="" value="{{$ban->bank_name}}">{{$ban->bank_name}}</option>
						  
						
						@endforeach
					</select><br><br>

					

					<label id="pass">Donor Blood:</label><br>
					<input type="text" name="blood"><br><br>

					<label>Donor Documents</label><br>
					<input type="file" name="documents"><br><br>

					
					<button type="submit">Add</button><br><br>
					<!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/blood_bank')}}">Home</a> -->

				</form>
			</div>

	</center>

</body>
</html>


@include('admin/layout/footer');