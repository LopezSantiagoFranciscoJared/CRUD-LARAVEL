<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            //
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
    public function down(): void
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            //
        });
    }
};
