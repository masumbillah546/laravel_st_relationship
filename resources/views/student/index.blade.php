@extends('master')
@section('content')

<h2>Student List</h2>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Batch ID</th>
		<th>Phone</th>
		<th>District ID</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	@foreach($students as $student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->name}}</td>
		<td>{{$student->batch_id}}</td>
		<td>{{$student->phone}}</td>
		<td>{{$student->district_id}}</td>
		<td>{{$student->address}}</td>
		<td>Edit|Delete</td>
		
	</tr>
	@endforeach

</table>

@endsection