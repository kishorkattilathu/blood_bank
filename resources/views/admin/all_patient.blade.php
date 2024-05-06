@include('admin/layout/header');

<!DOCTYPE html>
<html>
<head>
	<title>All Patient</title>
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

			<h2>All Patient</h2>
			<thead>
				<th>Sr No:</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Blood</th>
				<th>Fitness</th>
				<th>Id Proof</th>
			</thead>
			<tbody>
				@php
					$i=1;
				@endphp
				@foreach ($patient as $dat)
						<tr>
							<td>{{$i;}}</td>
							<td>{{$dat->cust_name}}</td>
							<td>{{$dat->cust_email}}</td>
							<td>{{$dat->cust_phone}}</td>
							<td>{{$dat->cust_address}}</td>
							<td>{{$dat->cust_blood}}</td>

							<td><img style="height: 100px;width: 100px;" src="{{'customer/fitness_doc/'.$dat->fitness_doc}}"></td>

							<td><img style="height: 100px;width: 100px;" src="{{'customer/id_proof/'.$dat->id_proof}}"></td>							



							
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