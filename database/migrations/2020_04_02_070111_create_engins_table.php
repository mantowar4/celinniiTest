<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engins', function (Blueprint $table) {
            $table->bigIncrements('engin_id');
            $table->string('engin_author');
            $table->string('engin_title');
            $table->string('engin_short_title');
            $table->string('engin_img')->nullable();
            $table->string('engin_img2')->nullable();
            $table->text('engin_description');
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
        Schema::dropIfExists('engins');
    }
}
