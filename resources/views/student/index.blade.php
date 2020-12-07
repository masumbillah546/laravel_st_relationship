@extends('master')
@section('content')

<h2>Student List</h2><a class="btn btn-primary" href="{{route('student.create')}}">Create New Student</a><br><br>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Batch ID</th>
		<th>Phone</th>
		<th>District ID</th>
		<th>Address</th>
		<th>Photo</th>
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
		<td><img height="50" src="{{ url('storage/'.$student->photo )}}" alt="image"></td>
		<td><a href="student/{{$student->id}}/edit">Edit</a><a href="">Delete</a></td>
		
	</tr>
	@endforeach

</table>

@endsection