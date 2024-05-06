@include ('bank/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>Reply Customer</title>
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
            background-color: rgb(226, 243, 226);
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
            height: 520px;
            background-color: red;
            padding-top: 10px;
            border-color: yellow;
            margin-top:10px;
            margin-bottom: 10px"
			>
				<form method="post" action="{{'/reply_to_customer/'.$data->customer_complaint_id}}">
					{{csrf_field()}}
					<h2>Reply Customer</h2><br>

					<label>Customer Name:</label><br>
					<input type="text" readonly="" name="name" value="{{$data->customer_complaint_name}}"><br><br>

					<label>Customer Email:</label><br>
					<input type="text" readonly="" name="email" value="{{$data->customer_complaint_email}}"><br><br>

					<label>Customer Message:</label><br>
					<input type="text" readonly="" name="msg" value="{{$data->customer_message}}"><br><br>

					<label>Your Reply:</label><br>
					<input type="text" name="reply"><br><br>

				
					
					<button type="submit">Reply</button><br><br>
					

				</form>
			</div>

	</center>

</body>
</html>

@include ('bank/layout/footer');