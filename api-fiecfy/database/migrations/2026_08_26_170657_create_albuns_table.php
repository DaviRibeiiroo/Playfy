<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('albuns', function (Blueprint $table) {
            $table->id();

            $table->foreignId("artistas_id")->constrained()->cascadeOnDelete();
            $table->string("title");
            $table->integer("release_year");
            $table->string("cover_image");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('albuns');
    }
};
