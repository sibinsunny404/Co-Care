<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinecentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinecenters', function (Blueprint $table) {
            $table->id();
            $table->string('cvcname');
            $table->string('category');
            $table->string('address');
            $table->string('pincode');
            $table->string('lattitude');
            $table->string('longitude');
			$table->bigInteger('state_id')->unsigned();
			$table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
			$table->bigInteger('district_id')->unsigned();
			$table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->dateTime('starttime');
            $table->dateTime('endtime');
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
        Schema::dropIfExists('vaccinecenters');
    }
}
