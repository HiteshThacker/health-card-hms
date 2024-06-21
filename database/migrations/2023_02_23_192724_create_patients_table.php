<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            Schema::dropIfExists('patients');
            $table->id('health_id');
            $table->string('name',30);
            $table->string('m_name',20);
            $table->string('l_name',20);
            $table->string('email',40);
            $table->string('password',50);
            // $table->binary('img_url')->nullable();
            $table->string('photo',100);
            $table->string('address',70);
            $table->string('city',30);
            $table->string('number',15);
            $table->string('gender',6);
            $table->date('dob');
            $table->string('age',5);
            $table->string('bg',5)->nullable();
            $table->string('long_disease',20)->nullable();
            $table->timestamps();
            //report table column
            //$table->unique('health_id');//foreign key
            // $table->unique('hospital_id')->nullable();
            // $table->string('hospital_name',40)->nullable();
            // $table->string('doctor',40)->nullable();
            // $table->date('check_date')->nullable();
            // $table->string('reg_time',20)->nullable();
            // $table->string('notes',200)->nullable();
            // $table->string('notes_img',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
