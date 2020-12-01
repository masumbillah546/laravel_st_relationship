Result
<br>
index.blade.php

<h2>Result List</h2>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Batch ID</th>
		<th>Exam Month</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	@foreach($results as $result)
	<tr>
		<td>{{$result->st_id}}</td>
		<td>{{$result->student->name}}</td>
		<td>{{$result->student->batch_id}}</td>
		<td>{{$result->exammonth}}</td>
		<td>{{$result->address}}</td>
		<td>Edit|Delete</td>
		
	</tr>
	@endforeach

</table>