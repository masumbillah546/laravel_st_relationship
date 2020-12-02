@extends('master')
@section('content')

<?php
//echo "<pre>";
 //print_r($results);
 $i=0; ?>
 <h2>Result List</h2>
<table class="table table-bordered">
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
		<td>{{$result->student_id}}</td>
		<td>{{$results[$i++]['student']['name']}}</td>
		<td>{{$result->student->batch_id}}</td>
		<td>{{$result->exammonth}}</td>
		<td>{{$result->address}}</td>
		<td>Edit|Delete</td>		
	</tr>
	@endforeach

</table>
@endsection