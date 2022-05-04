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
        Schema::create('uye_adres', function (Blueprint $table) {
            $table->increments('AdresID');
            $table->integer('UyeID');
            $table->text('AdresMetni');
            $table->string('AdresIlce',50);
            $table->string('AdresIl',50);
            $table->string('AdresPK',5);
            $table->string('AdresUlke',50);
            $table->string('AdresTuru',50);
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
        Schema::dropIfExists('uye_adres');
    }
};
