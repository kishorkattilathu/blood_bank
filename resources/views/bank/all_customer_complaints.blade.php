@include ('bank/layout/header');


<!DOCTYPE html>
<html>
<head>
	<title>All Complaints</title>
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

			<h2>All Complaints</h2>
			<thead>
				<th>Sr No:</th>
				<th>Customer Name</th>
				<th>Customer Email</th>
				<th>Customer Message</th>
				<th>Your Message</th>
				
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