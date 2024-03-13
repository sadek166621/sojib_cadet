<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultpdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultpdfs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date');
            $table->string('file');
            $table->unsignedTinyInteger('status')->default(1)->comment('1=> Active, 0=>Inactive');
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
        Schema::dropIfExists('resultpdfs');
    }
}
