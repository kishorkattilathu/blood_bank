@include ('bank/layout/header');


<!DOCTYPE html>
<html>
<head>
	<title>Pending Complaints</title>
	<style type="text/css">
	table
		{
			border-style: solid;
			width: 1000px;
		}
		th,td
		{
			border-style: solid;
			text-align: center;
		}
		
	</style>
		
</head>
<body>
	<center>

		<table>

			<h2>Pending Complaints</h2>
			<thead>
				<th>Sr No:</th>
				<th>Customer Name</th>
				<th>Customer Email</th>
				<th>Customer Message</th>
				<th>Your Message</th>
				<th>Reply</th>
				
			</thead>
			<tbody>
				@php
				$i=1;
				@endphp
				@foreach ($data as $dat)
				<tr>
					<td>{{$i}}</td>
					<td>{{$dat->customer_complaint_name}}</td>
					<td>{{$dat->customer_complaint_email}}</td>
					<td>{{$dat->customer_message}}</td>
					<td>{{$dat->bank_message_reply}}</td>
					@php
						if($dat->bank_message_reply=='Pending')
						{
					@endphp
					<td><a href="{{'/reply_complaints_to_customer/'.$dat->customer_complaint_id}}"><img style="height: 50px;margin-top: 8px;margin-bottom: 8px; width: 70px;" src="{{'Admin/reply.png'}}"></a></td>
					
					@php
						}
					@endphp

				</tr>
				@php
				$i++;
				@endphp
				@endforeach
			</tbody>
		</table>
	</center>


</body>
</html>
<br>
<br>


@include ('bank/layout/footer');