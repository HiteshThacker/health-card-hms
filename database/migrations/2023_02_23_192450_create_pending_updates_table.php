<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_updates', function (Blueprint $table) {
            Schema::dropIfExists('pending_updates');
            $table->id('pu_id');
            $table->string('health_id',12);
            $table->string('field',6);
            // $table->binary('proof');
            $table->string('proof',100);
            $table->string('name',30)->nullable();
            $table->string('mname',20)->nullable();
            $table->string('lname',20)->nullable();
            $table->string('photo',100);
            $table->date('dob')->nullable();
            $table->integer('up_name')->default(2);
            $table->integer('up_dob')->default(2);
            $table->timestamps();
            // heaith_id,field,proof    fname,mname,lname(or)photo(or)dob
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pending_updates');
    }
}
