@include ('bank/layout/header');



<head>
	<title>All Donor</title>
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

			<h2>All Donors</h2>
			<thead>
				<th>Sr No:</th>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>Bank</th>
				<th>Location</th>
				<th>Blood</th>
				<th>Documents</th>
				<th>Status</th>
				<th>Available</th>
				<th>Unavailable</th>

			</thead>
			<tbody>
				@php
					$i=1;
				@endphp
				@foreach ($data as $dat)
				<tr>
					<td>{{$i}}</td>
					<td>{{$dat->donor_name}}</td>
					<td>{{$dat->donor_email}}</td>
					<td>{{$dat->gender}}</td>
					<td>{{$dat->phone}}</td>
					<td>{{$dat->bank}}</td>
					<td>{{$dat->location}}</td>
					<td>{{$dat->blood}}</td>
					<td><img style="height: 100px;width:100px;" src="{{'/Bank/donor/'.$dat->documents}}"></td>
					{{-- <td><a href="{{'/edit_donor_bank/'.$dat->donor_id}}"><img style="height:50px;width:50px;" src="{{'/Admin/edit.png'}}"></a></td> --}}
                    <td>{{$dat->donation_status}}</td>
					{{-- <td><a href="{{'/delete_donor_bank/'.$dat->donor_id}}"><img style="height:50px;width:50px;" src="{{'/Admin/delete.png'}}"></a></td> --}}
                    <td><a href="{{'/available/'.$dat->donor_id}}" class="btn btn-info">Available</a></td>
                    <td><a href="{{'/unavailable/'.$dat->donor_id}}" class="btn btn-danger">Unavailable</a></td>
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


@include('bank/layout/footer');