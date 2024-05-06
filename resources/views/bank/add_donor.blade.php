@include ('bank/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>Add Blood</title>
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
        
        #button
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
<body>
	<center>
			<div
			style="border-style: solid;margin-left: 500px;
            margin-right: 500px;
            height: 760px;
            background-color: red;
            padding-top: 10px;
            border-color: yellow;
            margin-top:10px;
            margin-bottom: 10px"
			>
				<form method="post" action="{{'/insert_donor'}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Add Donor</h2><br>

					<input type="hidden" name="bank" value="{{$data->bank_name}}">
					<input type="hidden" name="bank_email" value="{{$data->bank_email}}">
					<input type="hidden" name="bank_id" value="{{$data->bank_id}}">

					<label>Donor Name:</label><br>
					<input type="text" required name="name"><br><br>

					<label>Donor Email:</label><br>
					<input type="email" required name="email"><br><br>

					<label>Donor Gender:</label><br>
					<select required style="width:210px;height: 30px;" name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br><br>

					<label>Donor Phone:</label><br>
					<input type="text" required name="phone"><br><br>

					<label>Location:</label><br>
					<input type="text" required name="location"><br><br>

					<label id="name">Blood Type:</label><br>
					<!-- <input type="text" name="type" ><br><br> -->
					<select  required style="width:210px;height: 30px;" name="blood">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select><br><br>

					<label>Donor Documents:</label><br>
					<input required type="file" name="documents"><br><br>
					
					<button id="button" type="submit">Add</button><br><br>
					

				</form>
			</div>

	</center>

</body>
</html>

@include ('bank/layout/footer');