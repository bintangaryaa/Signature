<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_reports', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('location');
            $table->integer('total_accounts');
            $table->integer('unclassified_data');
            $table->integer('classified_data');
            $table->integer('unapproved_data');
            $table->integer('approved_data');
            $table->integer('rejected_data');
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
        Schema::dropIfExists('data_reports');
    }
}
