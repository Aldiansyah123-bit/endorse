<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorses', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('umur',20);
            $table->string('alamat',100);
            $table->text('instagram');
            $table->string('number',50);
            $table->string('tinggi',50);
            $table->string('berat',50);
            $table->string('foto',100);
            $table->string('minat',100);
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
        Schema::dropIfExists('endorses');
    }
}
