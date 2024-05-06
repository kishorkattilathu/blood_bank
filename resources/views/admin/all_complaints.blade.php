@include('admin/layout/header');

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
				<th>Name</th>
				<th>Email</th>
				<th>Type</th>
				<th>Message</th>
				<th>Your Reply</th>
				
			</thead>
			<tbody>
				<?php
					$i=1;	
				?>
				@foreach ($comp as $dat)
						<tr>
							<td>{{$i;}}</td>
							<td>{{$dat->complaint_name}}</td>
							<td>{{$dat->complaint_email}}</td>
							<td>{{$dat->complaint_type}}</td>
							<td>{{$dat->message}}</td>
							<td>{{$dat->message_reply}}</td>
							
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