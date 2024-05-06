@include ('customer/layout/header');



	<title>My Bookings</title>
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
		

	<center>

		<table>

			<h2>My Bookings</h2>
			<thead>
				<th>Sr No:</th>
				<th>Booking No:</th>
				<th>Your Email</th>
				<th>Your Blood Group:</th>
				<th>Donor Name</th>
				<th>Donor Email</th>
				<th>Donor Blood Group:</th>
				<th>Booking Status</th>
				<th>Payment Status</th>
				<th>Cancel</th>
				<th>Payment</th>
			</thead>
			<tbody>
				@php
				$i=1;
				@endphp
				@foreach ($data as $dat)
				<tr>
					<td>{{$i}}</td>
					<td>{{$dat->booking_id}}</td>
					<td>{{$dat->booking_customer_email}}</td>
					<td>{{$dat->booking_customer_blood}}</td>
					<td>{{$dat->booking_donor_name}}</td>
					<td>{{$dat->booking_donor_email}}</td>
					<td>{{$dat->booking_donor_blood}}</td>
					<td>{{$dat->booking_status}}</td>
					<td>{{$dat->payment_status}}</td>

					@php
						if($dat->payment_status!='Paid')
						{
					@endphp

					<td><a href="{{'cancel_bookings/'.$dat->booking_id}}"><img src="{{'admin/cancel.jpg'}}"></a></td>
					@php
						}
						@endphp
					@php
						if($dat->booking_status=='Approved' and $dat->payment_status!='Paid')
						{
						
					@endphp
					<td><a href="{{'pay_bookings/'.$dat->booking_id}}"><img src="{{'admin/pay.jpg'}}"></a></td>
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



<br>
<br>


@include('customer/layout/footer');