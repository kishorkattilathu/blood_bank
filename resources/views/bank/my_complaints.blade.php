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
				<th>Complaint No:</th>
				<th>Your Message</th>
				<th>Admin Reply</th>
				
			</thead>
			<tbody>
				@php
				$i=1;
				@endphp
				@foreach ($complaints as $comp)
				<tr>
					<td>{{$i}}</td>
                    <td>{{$comp->complaint_id}}</td>
                    <td>{{$comp->message}}</td>
                    <td>{{$comp->message_reply}}</td>
					

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