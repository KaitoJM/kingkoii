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
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->biginteger('audience_category_id')->unsigned();
            $table->biginteger('admin_author_id')->unsigned();
            $table->timestamps();

            $table->foreign('admin_author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('audience_category_id')->references('id')->on('audience_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
};
