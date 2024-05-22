@extends('admin.layouts.form')
@section('title', 'Add District')
@section('formpage')
<form action="{{ route('district.store') }}" method="POST">
@csrf
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			State:
			<select name="state_id" id="state_id" class="form-control">
				<option value="">Select State</option>
				@foreach(App\Models\State::where('status','Active')->get() as $state)
					<option value="{{$state->id}}">{{$state->state}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group">
			District:
			<input type="text" name="district" id="district" class="form-control" >
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group">
			Status:
			<select name="status" id="status" class="form-control">
				<option value="">Select Status</option>
				<?php
				$arr = array("Active","Inactive");
				foreach($arr as $val)
				{
				echo "<option value='$val'>$val</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group"><hr>
			<center><input type="submit" class="btn btn-info" ></center>
		</div>
	</div>
</div>
</form>
@endsection