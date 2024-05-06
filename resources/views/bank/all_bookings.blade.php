@include ('bank/layout/header');


<!DOCTYPE html>
<html>
<head>
	<title>All Bookings</title>
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

			<h2>All Bookings</h2>
			<thead>
				<th>Sr No:</th>
				<th>Booking No:</th>
				<th>Email Email</th>
				<th>Customer Blood Group:</th>
				<th>Donor Name</th>
				<th>Donor Email</th>
				<th>Donor Blood Group:</th>
				<th>Booking Status</th>
				<th>Payment Status</th>
				<th>Approve</th>
				<th>Reject</th>
			</thead>
			<tbody>
				<?php
					$i=1;	
				?>
				@foreach ($data as $dat)
				<tr>
					<td>{{$i;}}</td>
					<td>{{$dat->booking_id}}</td>
					<td>{{$dat->booking_customer_email}}</td>
					<td>{{$dat->booking_customer_blood}}</td>
					<td>{{$dat->booking_donor_name}}</td>
					<td>{{$dat->booking_donor_email}}</td>
					<td>{{$dat->booking_donor_blood}}</td>
					<td>{{$dat->booking_status}}</td>
					<td>{{$dat->payment_status}}</td>

					<td><a href="{{'approve_bookings/'.$dat->booking_id}}/{{$dat->booking_donor_id}}"><img style="height: 150px;width: 250px;" src="{{'admin/approve.png'}}"></a></td>
					
					<td><a href="{{'reject_bookings/'.$dat->booking_id}}"><img  src="{{'admin/reject.jpg'}}"></a></td>
					
				</tr>
				<?php
					$i++;
				?>
				@endforeach
			</tbody>
		</table>
	</center>


</body>
</html>
<br>
<br>


@include ('bank/layout/footer');