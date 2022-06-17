<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice',50);
            $table->unsignedBigInteger('endorse_id');
            $table->string('nama',50);
            $table->string('email');
            $table->string('alamat',150);
            $table->string('harga',150);
            $table->text('catatan');
            $table->string('foto',100);
            $table->timestamps();

            $table->foreign('endorse_id')->references('id')->on('endorses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
