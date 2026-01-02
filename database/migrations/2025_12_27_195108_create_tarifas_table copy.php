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
		Schema::create('tarifas', function (Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('servicio');   // Acueducto | Alcantarillado | Aseo
			$table->string('uso');        // Residencial | Comercial | Industrial
			$table->unsignedTinyInteger('estrato')->nullable();
			$table->boolean('activo')->default(true);
		});
	}

	/**
	* Reverse the migrations.
	*/
	public function down(): void
	{
		Schema::dropIfExists('tarifas');
	}
};
