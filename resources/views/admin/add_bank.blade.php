@include('admin/layout/header');


	<title>Register Bank</title>
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

	<center>
			<div style="border-style: solid;margin-left: 500px;
			margin-right: 500px;
			height: 925px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:10px;
			margin-bottom: 10px">
				<form method="post" action="{{url('/admin_register_bank')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<h2>Register Bank</h2><br>
					<label id="name">Bank Name:</label><br>
					<input type="text" name="name" ><br><br>

					<label id="">Bank Email:</label><br>
					<input type="email"  name="email"><br><br>

					<label id="">Bank Address:</label><br>
					<input type="text" name="address"><br><br>

					<label id="">Bank Phone:</label><br>
					<input type="phone" name="phone"><br><br>

					<label>Bank Documents</label><br>
					<input type="file" name="documents"><br><br>

					<label>Bank Image</label><br>
					<input type="file" name="bank_image"><br><br>


					<label id="">Bank Password:</label><br>
					<input type="password" name="pass" ><br><br>

					<label id="">Confirm Password:</label><br>
					<input type="password" name="confirm_pass" ><br><br>
					


					
					
					<button type="submit">Add</button><br><br>
					
				</form>
			</div>

	</center>




@include('admin/layout/footer');