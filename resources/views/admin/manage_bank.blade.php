@include('admin/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>All Bank</title>
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

			<h2>All Banks</h2>
			<thead>
				<th>Sr No:</th>
				<th>Bank Name</th>
				<th>Bank Email</th>
				<th>Bank Address</th>
				<th>Bank Phone:</th>
				<th>Bank Type:</th>
				<th>Image</th>
				<th>Documents</th>
				<th>Status</th>
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
					<td>{{$dat->bank_name}}</td>
					<td>{{$dat->bank_email}}</td>
					<td>{{$dat->bank_address}}</td>
					<td>{{$dat->bank_phone}}</td>
					<td>{{$dat->bank_type}}</td>
					<td><img style="height: 70px;width:70px;" src="{{'/Admin/bank_image/'.$dat->bank_image}}"></td>
					<td><img style="height: 70px;width:70px;" src="{{'/Admin/documents/'.$dat->documents}}"></td>
					<td>{{$dat->bank_status}}</td>
					<td><a href="{{'approve_bank/'.$dat->bank_id}}"><img style="height: 120px;width:70px;" src="{{'Admin/approve.png'}}"></a></td>
					<td><a href="{{'reject_bank/'.$dat->bank_id}}"><img style="height: 30px;width:70px;" src="{{'Admin/reject.jpg'}}"></a></td>
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



@include('admin/layout/footer');