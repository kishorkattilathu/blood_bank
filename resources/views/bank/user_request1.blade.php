<!-- @include ('bank/layout/header');


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
				<th>Phone</th>
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
					@foreach ($data as $dat)

				<tr>
					<td>1</td>
					<td>{{$dat->cust_name}}</td>
					<td>{{$dat->cust_email}}</td>
					<td>{{$dat->cust_phone}}</td>
					<td>{{$dat->cust_address}}</td>
					<td>{{$dat->cust_blood}}</td>
					<td>{{$dat->customer_type}}</td>
					<td><img style="height: 70px;width:70px;" src="{{'customer/fitness_doc/'.$dat->fitness_doc}}"></td>
					<td><img style="height: 70px;width:70px;" src="{{'customer/id_proof/'.$dat->id_proof}}"></td>
					<td>{{$dat->status}}</td>
					<td><a href="{{'/approve_customer/'.$dat->customer_id}}"><img style="height: 70px;width:70px;" src="{{'Admin/approve.png'}}"></a></td>
					<td><a href="{{'/reject_customer/'.$dat->customer_id}}"><img style="height: 30px;width:30px;" src="{{'Admin/reject.jpg'}}"></a></td>
				</tr>
					@endforeach	
			</tbody>
		</table>
	</center>


</body>
</html>
<br>
<br>


@include('bank/layout/footer'); -->