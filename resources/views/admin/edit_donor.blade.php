@include('admin/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>Edit Donor</title>
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
			height: 985px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:10px;
			margin-bottom: 10px">
				<form method="post" action="{{url('update_donor/'.$data->donor_id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Edit Donor</h2><br>

					<!-- <input type="hidden" name="donor_id" value="{{$data->donor_id}}"> -->

					<label id="name">Donor Name:</label><br>
					<input type="text" name="name" value="{{$data->donor_name}}" ><br><br>

					<label id="">Donor Email:</label><br>
					<input type="email" readonly="" name="email" value="{{$data->donor_email}}"><br><br>

					<label id="">Donor Gender:</label><br>
					<input type="text" name="gender" value="{{$data->gender}}"><br><br>

					<label id="">Donor Phone:</label><br>
					<input type="phone" name="phone" value="{{$data->phone}}"><br><br>

					<label id="">Donor Location:</label><br>
					<input type="text" name="location" value="{{$data->location}}" ><br><br>

					<label id="">Donor Blood:</label><br>
					<input type="text" name="blood" value="{{$data->blood}}" ><br><br>

					<label id="">Bank</label><br>
					<select name="bank">
						<option type="text" readonly="" value="{{$data->bank}}">{{$data->bank}}</option>
						@foreach ($data1 as $ban)
						<option type="text" readonly="" value="{{$ban->bank_name}}">{{$ban->bank_name}}</option>
						  
						
						@endforeach
					</select><br><br>


					<label>Old Documents</label><br>
					<img style="width: 100px;height: 100px;" src="{{'/Admin/donor/'.$data->documents}}"><br><br>

					<label>New Documents</label><br>
					<input type="file" name="documents"><br><br>

					
					<button type="submit">Update</button><br><br>
					<!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/blood_bank')}}">Home</a> -->

				</form>
			</div>

	</center>

</body>
</html>


@include('admin/layout/footer');