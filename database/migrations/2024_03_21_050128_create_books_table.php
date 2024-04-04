<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('photo', 100);
            $table->text('description'); // Text area (lebih besar daripada string biasa)
            $table->date('publish_date')->nullable();

            // Cara 1 - Automatis (penamaan harus inggris dan tepat, kalau tidak akan error)
            $table->foreignId('genre_id')->constrained();

            // Cara 2 - Manual (tetapi lebih rentan terhadap error)
            // $table->foreign('genre_id')->references('id')->on('genres'); 
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
        Schema::dropIfExists('books');
    }
};
