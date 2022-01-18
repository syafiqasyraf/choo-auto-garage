<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('jenisitem');
            $table->string('jenamakereta')->nullable();
            $table->string('jeniskereta')->nullable();
            $table->integer('kuantiti');
            $table->decimal('hargabeli');
            $table->decimal('hargajual')->nullable();
            $table->string('kedai');
            $table->string('lokasibarang')->nullable();
            $table->text('nota')->nullable();
            $table->dateTime('tarikhbeli');
            $table->dateTime('tarikhjual')->nullable();
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
        Schema::dropIfExists('stoks');
    }
}
