@include ('bank/layout/header');


<!DOCTYPE html>
<html>
<head>
	<title>User Request</title>
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

			<h2>User Request</h2>
			<thead>
				<th>Sr No:</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Blood Type</th>
				<th>Register Type</th>
				<th>Fitness Certificate</th>
				<th>Id Proof</th>
				<th>Status</th>
				<th>Approve</th>
				<th>Reject</th>
			</thead>
			<tbody>
					@php
						$i=1;
					@endphp
					@foreach ($data as $dat)

				<tr>
					<td>1</td>
					<td>{{$dat->cust_name}}</td>
					<td>{{$dat->cust_email}}</td>
					<td>{{$dat->cust_phone}}</td>
					<td>{{$dat->cust_address}}</td>
					<td>{{$dat->cust_blood}}</td>
					<td>{{$dat->cust_type}}</td>
					<td><img src="{{'customer/fitness_doc/'.$dat->fitness_doc}}"></td>
					<td><img src="{{'customer/id_proof/'.$dat->id_proof}}"></td>
					<td>{{$dat->status}}</td>
					<td>Approve</td>
					<td>Reject</td>
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


@include('bank/layout/footer');