<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();  // Primary key 'id'
            $table->string('name');  // Nama penulis
            $table->string('email')->unique();  // Email unik
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
