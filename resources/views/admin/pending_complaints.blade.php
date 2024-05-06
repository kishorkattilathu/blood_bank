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

			<h2>Pending Complaints</h2>
			<thead>
				<th>Sr No:</th>
				<th>Name</th>
				<th>Email</th>
				<th>Type</th>
				<th>Message</th>
				<th>Your Reply</th>
				<th>Reply</th>
				
			</thead>
			<tbody>
				@php
					$i=1;
				@endphp
				@foreach ($data as $dat)
						<tr>
							<td>{{$i}}</td>
							<td>{{$dat->complaint_name}}</td>
							<td>{{$dat->complaint_email}}</td>
							<td>{{$dat->complaint_type}}</td>
							<td>{{$dat->message}}</td>
							<td>{{$dat->message_reply}}</td>
							<td><a href="{{'/complaint_reply/'.$dat->complaint_id}}"><img style="height: 50px;width: 100px; margin-top: 10px;margin-bottom: 10px;" src="{{url('Admin/reply.png')}}"></a></td>

							
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



@include('admin/layout/footer');