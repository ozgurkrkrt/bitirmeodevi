<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uyes', function (Blueprint $table) {
            $table->increments('UyeID');
            $table->string('UyeAdi',50);
            $table->string('UyeSoyadi',50);
            $table->string('UyeTelefon',10);
            $table->string('UyeEmail',50);
            $table->string('UyeSifre',50);
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
        Schema::dropIfExists('uyes');
    }
};
