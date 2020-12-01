Student
<br>
index.blade.php

<h2>Student List</h2>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Batch ID</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	@foreach($students as $student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->name}}</td>
		<td>{{$student->batch_id}}</td>
		<td>{{$student->phone}}</td>
		<td>{{$student->address}}</td>
		<td>Edit|Delete</td>
		
	</tr>
	@endforeach

</table>