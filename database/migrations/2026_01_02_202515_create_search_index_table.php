<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('search_index', function (Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('titulo');
			$table->longText('contenido');
			$table->string('url');
			$table->string('tipo'); // servicio, transparencia, institucional, aviso, noticia
			$table->boolean('activo')->default(true);
			$table->fullText(['titulo', 'contenido']);
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('search_index');
	}
};
