@extends('admin.layouts.tables')
@section('title', 'View Vaccine Types')
@section('viewpage')
<!---<div class="table-responsive-sm">-->
	<div class="row">
		<div class="col-lg-12">
	<table id="datatable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
                <th>Period</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            @foreach($vtypes as $vtype)
			<tr>
				<td>{{$vtype->vname}}</td>
				<td>{{$vtype->description}}</td>
				<td>{{$vtype->period}}</td>
                <td>{{$vtype->status}}</td>
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