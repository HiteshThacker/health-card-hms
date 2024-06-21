<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_apps', function (Blueprint $table) {
            Schema::dropIfExists('book_apps');
            $table->id('app_id');
            $table->string('health_id',12);
            $table->string('name',90);
            $table->string('no',11);
            $table->string('email',30);
            $table->string('disease',20);
            $table->string('age',3);
            $table->date('app_date');
            $table->string('time',25);
            $table->string('status',10)->default("pending");
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
        Schema::dropIfExists('book_apps');
    }
}
