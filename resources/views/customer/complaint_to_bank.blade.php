@include ('customer/layout/header');



	<title>Complaints to Bank</title>
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

			<h2>Complaints to Bank</h2>
			<thead>
				<th>Sr No:</th>
				<th>Your Name</th>
				<th>Your Email</th>
				<th>Bank Name</th>
				<th>Your Message</th>
				<th>Message Reply</th>
				<th>Delete</th>
				
			</thead>
			<tbody>
				@php
				$i=1;
				@endphp
				@foreach ($data as $dat)
				<tr>
					<td>{{$i}}</td>
					<td>{{$dat->customer_complaint_name}}</td>
					<td>{{$dat->customer_complaint_email}}</td>
					<td>{{$dat->customer_bank_name}}</td>
					<td>{{$dat->customer_message}}</td>
					<td>{{$dat->bank_message_reply}}</td>
					@php
						if($dat->bank_message_reply=='Pending')
						{
					@endphp
					<td><a href="{{'/delete_complaints_to_abnk/'.$dat->customer_complaint_id}}"><img style="height: 70px;width: 70px;" src="{{'Admin/delete.png'}}"></a></td>
					
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


@include ('customer/layout/footer');