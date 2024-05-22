@extends('admin.layouts.form')
@section('title', 'Add Vaccine Type')
@section('formpage')
<form action="{{ route('vaccinetype.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-lg-12">
		<div class="form-group">
			Vaccine Name:
			<input type="text" name="vname" id="vname" class="form-control" >
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group">
        Description:
			<textarea type="text" class="form-control" name="description"></textarea>
		</div>
	</div>
    <div class="col-lg-12">
		<div class="form-group">
			Period:
			<input type="number" name="period" id="period" class="form-control" min="0" >
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
			<center><input type="submit" name="submit" id="submit" class="btn btn-info" ></center>
		</div>
	</div>
</div>
</form>
@endsection