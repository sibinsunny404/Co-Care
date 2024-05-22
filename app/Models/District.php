<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
	protected $fillable = ['state_id', 'district', 'status'];
	/*
	public function loadstatemodal()
	{
		return DB::table('states')->('status','Active')->get();
	}
	*/
}
