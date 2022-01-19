<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order')->unique();
            $table->string('kereta');
            $table->string('platkereta');
            $table->string('complain');
            $table->string('masalah')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('catatan')->nullable();
            $table->boolean('status');
            $table->dateTime('tarikhsiap')->nullable();
            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('pelanggan_id');
        
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->cascadeOnDelete();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
