@include('customer/layout/header');


	<title>Payment</title>
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

	<center>
			<div style="border-style: solid;margin-left: 500px;
			margin-right: 500px;
			height: 700px;
			background-color: red;
			padding-top: 10px;
			border-color: yellow;
			margin-top:10px;
			margin-bottom: 10px">

				<form method="post" action="{{'/pay_insert/'.$payment->booking_id}}">
					{{csrf_field()}}
					<h2>Pay Here</h2><br>

					<input type="hidden" name="user_email" value="{{$payment->booking_customer_email}}">
					<input type="hidden" name="user_id" value="{{$payment->booking_customer_id}}">


					<label id="name">Name On Card:</label><br>
					<input type="text" required="" name="name"><br><br>

					<label id="">Card Number:</label><br>
					<input type="text" required="" name="card"  ><br><br>

					<label id="">CVV No:</label><br>
					<input type="text" required="" name="cvv" ><br><br>

					<label id="month">Card Expiry Month</label><br>
					<select type="text" required="" name="month">
						<option value="jan">Jan</option>
						<option value="feb">Feb</option>
						<option value="mar">Mar</option>
						<option value="apr">Apr</option>
						<option value="may">May</option>
						<option value="jun">Jun</option>
						<option value="jul">Jul</option>
						<option value="aug">Aug</option>
						<option value="sep">Sep</option>
						<option value="oct">Oct</option>
						<option value="nov">Nov</option>
						<option value="dec">Dec</option>
					</select><br><br>


					<label id="card">Card Expiry Year</label><br>
					<input type="text" required="" name="year"  ><br><br>

					<label>Amount</label><br>
					<input type="text" name="amount" readonly="" value="500"><br><br>
					
					<button type="submit">Pay</button><br><br>
					<!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
					<a href="{{url('/blood_bank')}}">Home</a> -->

				</form>
			</div>

	</center>



@include('customer/layout/footer');

