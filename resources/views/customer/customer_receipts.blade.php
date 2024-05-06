@include ('customer/layout/header');



		<title>Total Receipts</title>
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

			<h2>Total Receipts</h2>
			<thead>
				<th>Sr No:</th>
				<th>Your Name</th>
				<th>Bank Name</th>
				<th>Bank Address</th>
				<th>Bank Phone No:</th>
				<th>Donor Name</th>
				<th>Donor Phone No:</th>
				<th>Payment Status</th>

			</thead>
			<tbody>
				@php
				$i=1;
				@endphp
				@foreach ($data as $dat)
				
				<tr>
					<td>{{$i;}}</td>
					<td>{{$dat->cust_name}}</td>
					<td>{{$dat->bank_name}}</td>
					<td>{{$dat->bank_address}}</td>
					<td>{{$dat->bank_phone}}</td>
					<td>{{$dat->booking_donor_name}}</td>
					<td>{{$dat->phone}}</td>
					<td>{{$dat->payment_status}}</td>
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


@include ('customer/layout/footer');