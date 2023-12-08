<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantFormationTable extends Migration
{
    public function up()
    {
        Schema::create('apprenant_formation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenant_id');
            $table->unsignedBigInteger('formation_id');
            $table->timestamps();

            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('apprenant_formation');
    }
}

