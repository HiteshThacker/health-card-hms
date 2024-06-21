<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('health_id',12);
            $table->string('hospital_id',10);
            $table->string('hospital_name',40);
            $table->string('doctor',40);
            $table->date('check_date');
            $table->string('chk_time',20)->nullable();
            $table->string('notes',500);
            $table->string('notes_img',100);
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
        Schema::dropIfExists('reports');
    }
}
