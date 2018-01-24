<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuffDutyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('stuff_duty', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id')->unsigned()->nullable();
            $table->date('duty_date')->format('d.m.Y');
            $table->date('approximate_date')->format('d.m.Y');
            $table->integer('approved_by_client');
            $table->integer('paid')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('stuff_duty', function($table) {
            $table->foreign('contract_id')->references('id')->on('contract_details')->onDelete('cascade');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stuff_duty');
    }
}
