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
		Schema::create('pqrs', function (Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('nombre');
			$table->string('documento');
			$table->string('direccion');
			$table->string('telefono');
			$table->string('email')->nullable();
			$table->string('tipo');
			$table->text('descripcion');
			$table->string('foto')->nullable();
			$table->string('estado')->default('pendiente');
			$table->boolean('activo')->default(true);
		});
	}

	/**
	* Reverse the migrations.
	*/
	public function down(): void
	{
		Schema::dropIfExists('pqrs');
	}
};
