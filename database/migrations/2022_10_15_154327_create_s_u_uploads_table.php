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
        Schema::create('s_u_uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uploads_id');
            $table->foreign('uploads_id')->references('id')->on('uploads');
            $table->string('confirmation')->default('No');
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
        Schema::dropIfExists('s_u_uploads');
    }
};
