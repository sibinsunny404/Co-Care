<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVprocessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vprocesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiaries_id')->constrained('beneficiaries');
			$table->foreignId('supervisor_id')->constrained('users');
			$table->foreignId('vaccinator_id')->constrained('users');
            $table->boolean('vaccinatorstatus');
            $table->boolean('supervisorstatus');
            $table->date('vaccinedate');
            $table->foreignId('vaccinecenter_id')->constrained('vaccinecenters');
            $table->float('amount', 8, 2);
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
        Schema::dropIfExists('vprocesses');
    }
}
