@extends('admin')
@section('content')
	<a href="{{route('admin.year.create')}}" class="btn btn-primary">Create</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@forelse($year as $data)
			<tr>
				<td>{{$data->name}}</td>
			</tr>
			@empty

			@endforelse
		</tbody>
	</table>
@endsection;
