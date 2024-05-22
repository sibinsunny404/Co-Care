<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('beneficiaries_id')->unsigned();
			$table->foreign('beneficiaries_id')->references('id')->on('beneficiaries')->onDelete('cascade');
		   	$table->bigInteger('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->date('bookingdate');
			$table->bigInteger('vaccinecenter_id')->unsigned();
			$table->foreign('vaccinecenter_id')->references('id')->on('vaccinecenters')->onDelete('cascade');
			$table->bigInteger('vaccinetype_id')->unsigned();
			$table->foreign('vaccinetype_id')->references('id')->on('vaccinetypes')->onDelete('cascade');
            $table->dateTime('scheduletime');
            $table->char('secretcode',5);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
