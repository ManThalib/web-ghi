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
        Schema::create('regis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->default('-');
            $table->string('phone')->default('0');
            $table->string('institusi')->default('');
            $table->string('accomodation')->default('-');
            $table->string('profession')->default('-');
            $table->string('PAMKI')->default('No');
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('regis');
    }
};
