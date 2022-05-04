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
        Schema::create('uruns', function (Blueprint $table) {
            $table->increments('UrunID');
            $table->integer('KategoriID');
            $table->integer('AltKategoriID');
            $table->string('UrunKodu',5);
            $table->string('UrunAdi',50);
            $table->decimal('UrunFiyati',19,4);
            $table->text('UrunAciklama');
            $table->string('image',50);
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
        Schema::dropIfExists('uruns');
    }
};
