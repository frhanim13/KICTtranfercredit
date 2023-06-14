<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrevUnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prev_unis', function (Blueprint $table) {
            $table->id();
            $table->string ('matric_id');
            $table->string ('user_id');
            $table->string ('nameUni');
            $table->string ('dipName');
            $table->string ('reason');
            $table->string ('yearStudy');
            $table->string ('transcript');
            $table->string ('cgpa');
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
        Schema::dropIfExists('prev_unis');
    }
}
