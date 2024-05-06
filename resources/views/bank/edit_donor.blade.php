@include ('bank/layout/header');

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
            margin-top: 30px;
            padding-top: 10px;
        }
        label,a
        {
            color: white;
        }
        
        button
        {
            background-color: rgb(232, 245, 232);
            width: 80px;
        }
        input
        {
            padding-left: 10px;
            height: 30px;
        }

	</style>
</head>
<body>
	<center>
			<div
			style="border-style: solid;margin-left: 500px;
            margin-right: 500px;
            height: 900px;
            background-color: red;
            padding-top: 10px;
            border-color: yellow;
            margin-top:10px;
            margin-bottom: 10px"
			>
				<form method="post" action="{{'/update_bank_donor/'.$data->donor_id}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Edit Donor</h2><br>


					<label>Donor Name:</label><br>
					<input type="text" name="name" value="{{$data->donor_name}}"><br><br>

					<label>Donor Email:</label><br>
					<input type="email" readonly="" name="email" value="{{$data->donor_email}}"><br><br>

					<label>Donor Gender:</label><br>
					<select style="width:210px;height: 30px;" name="gender" value="{{$data->gender}}">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br><br>

					<label>Donor Phone:</label><br>
					<input type="text" name="phone" value="{{$data->phone}}"><br><br>

					<label>Location:</label><br>
					<input type="text" name="location" value="{{$data->location}}"><br><br>

					<label id="name">Blood Type:</label><br>
					<!-- <input type="text" name="type" ><br><br> -->
					<select style="width:210px;height: 30px;" name="blood" value="{{$data->blood}}">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select><br><br>

					<label>Old Documents:</label><br>
					<img style="height:70px;width:70px;" src="{{'/Bank/donor/'.$data->documents}}"><br><br>

					<label>New Documents:</label>
					<input type="file" name="documents"><br><br>
					
					<button type="submit">Update</button><br><br>
					

				</form>
			</div>

	</center>


</body>
</html>


@include ('bank/layout/footer');