<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ( !Schema::hasTable('organizations') )
        {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('org_id');
            $table->string('org_title');
            $table->string('org_leader_name');
            $table->string('org_leader_desc');
            $table->string('org_img');
            $table->text('org_description_title');
            $table->text('org_description');
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
