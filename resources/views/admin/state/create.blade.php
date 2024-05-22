@extends('admin.layouts.form')
@section('title', 'Add State')
@section('formpage')
<form action="{{ route('state.store') }}" method="POST">
@csrf
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			State:
			<input type="text" name="state" id="state" class="form-control" >
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