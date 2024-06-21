<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            Schema::dropIfExists('doctors');
            $table->id('doctor_id');
            // $table->string('field',6);
            $table->string('photo',100)->nullable();
            $table->string('name',50);
            $table->string('email',50);
            $table->string('address',50);
            $table->string('number',13);
            $table->string('hospital_id',10);
            $table->string('password',50);
            $table->string('department',50);
            $table->string('education',60);
            $table->string('since',5);
            $table->string('gender',6)->nullable();
            $table->date('dob')->nullable();
            $table->date('about',500)->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
