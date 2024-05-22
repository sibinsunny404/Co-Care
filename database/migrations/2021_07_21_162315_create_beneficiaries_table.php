<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('referenceid');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
            $table->string('id_proof');
            $table->integer('id_number');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->char('dose',5);
            $table->timestamps();
        });

    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
