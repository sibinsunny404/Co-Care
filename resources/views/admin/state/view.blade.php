@extends('admin.layouts.tables')
@section('title', 'View State')
@section('viewpage')
<!---<div class="table-responsive-sm">-->
	<div class="row">
		<div class="col-lg-12">
	<table id="datatable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>State</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            @foreach($states as $state)
			<tr>
				<td>{{$state->state}}</td>
				<td>{{$state->status}}</td>
				<td>
					<a href="" class="btn btn-info">Edit</a>  
					<a href="" class="btn btn-danger">Delete</a>
				</td>
			</tr>
            @endforeach
		</tbody>
	</table>
		</div>
	</div>
<!-- </div>->>
@endsection