@extends('admin')
@section('content')

	<form action="{{route('admin.year.store')}}" method="POST" enctype="multipart/form-data">
		<legend>Form title</legend>

		<div class="form-group">
			<label for="">label</label>
			<input type="file" name="file" class="form-control" id="" placeholder="Input field">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection;
