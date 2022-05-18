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
            $table->string('name',50);
            $table->integer('age');
            $table->string('address',100);
            $table->text('description');
            $table->integer('price');
            $table->string('foto',100);
            $table->string('company',100);
            $table->string('address_company',150);
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
