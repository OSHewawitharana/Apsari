<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_technicians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('technician_id');
            $table->integer('no_of_raters');
            $table->integer('rating')->default(0);
            $table->unsignedInteger('rater_id');
            $table->boolean('rated_or_not')->nullable();
            
            $table->timestamps();

            $table->foreign('technician_id','rater_id')
            ->references('id')->on('users')
            ->onDelete(`cascade`);

            // $table->foreign('rater_id')
            // ->reference('id')->on('users')
            // ->onDelete(`cascade`);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_technicians');
    }
}
