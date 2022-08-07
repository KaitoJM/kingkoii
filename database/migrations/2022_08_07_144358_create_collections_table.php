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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_photo');
            $table->text('description');
            $table->bigInteger('title_id')->unsigned();
            $table->enum('status', ['PENDING', 'PUBLISHED', 'CANCELLED'])->default('PENDING');
            $table->bigInteger('created_by');
            $table->bigInteger('published_by');
            $table->bigInteger('cancelled_by');
            $table->datetime('published_at');
            $table->datetime('cancelled_at');
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
};
