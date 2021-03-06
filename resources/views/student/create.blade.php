@extends('master')
@section('content')


 <h2>Create Student</h2>

 @if($errors->any())
 @foreach($errors->all() as $error)
 <p style="color: red">{{$error}}</p>
 @endforeach
 @endif
<form class="form-horizontal" action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">

	@csrf
	<input class=" form-control" type="text" name="name" id="" placeholder="Full Name">
	<input class="form-control" type="text" name="batch" id="" placeholder="Batch">
	<input class="form-control" type="text" name="phone" id="" placeholder="Phone Number">
	<input class="form-control" type="text" name="address" id="" placeholder="address">
	<select class="form-control" name="district_id" id="">
		<option>Select District</option>
		<option value="1">Dhaka</option>
		<option value="2">Cumilla</option>
		<option value="3">Feni</option>
	</select>
	<input class="form-control" type="file" name="photo">
	<button type="submit" class="form-control btn btn-success">Submit</button>
</form>
@endsection