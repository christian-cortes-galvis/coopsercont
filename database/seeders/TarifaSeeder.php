<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarifa;
use App\Models\TarifaDetalle;

class TarifaSeeder extends Seeder
{
	public function run()
	{
		/*
		|--------------------------------------------------------------------------
		| ACUEDUCTO
		|--------------------------------------------------------------------------
		*/

		// Comercial
		$t = Tarifa::create([
			'servicio' => 'Acueducto',
			'uso'      => 'Comercial',
			'estrato'  => null,
		]);

		TarifaDetalle::create([
			'tarifa_id'   => $t->id,
			'componente'  => 'Plena',
			'cargo_fijo'  => 8826.70,
			'consumo'     => 8826.70,
			'vertimiento' => 778.48,
		]);

		// Industrial
		$t = Tarifa::create([
			'servicio' => 'Acueducto',
			'uso'      => 'Industrial',
			'estrato'  => null,
		]);

		TarifaDetalle::create([
			'tarifa_id'   => $t->id,
			'componente'  => 'Plena',
			'cargo_fijo'  => 11343.82,
			'consumo'     => 11343.82,
			'vertimiento' => 1000.48,
		]);

		// Residencial estratos 1–4
		$residencial = [
			1 => [2648.01, 233.54],
			2 => [5296.02, 467.09],
			3 => [7502.70, 661.71],
			4 => [8826.70, 778.48],
		];

		foreach ($residencial as $estrato => [$consumo, $vertimiento]) {
			$t = Tarifa::create([
				'servicio' => 'Acueducto',
				'uso'      => 'Residencial',
				'estrato'  => $estrato,
			]);

			TarifaDetalle::create([
				'tarifa_id'   => $t->id,
				'componente'  => 'Plena',
				'cargo_fijo'  => 8826.70,
				'consumo'     => $consumo,
				'vertimiento' => $vertimiento,
			]);
		}

		/*
		|--------------------------------------------------------------------------
		| ALCANTARILLADO
		|--------------------------------------------------------------------------
		*/

		$alcantarillado = [
			1 => [1462.62, 91.52],
			2 => [2925.23, 184.10],
		];

		foreach ($alcantarillado as $estrato => [$consumo, $vertimiento]) {
			$t = Tarifa::create([
				'servicio' => 'Alcantarillado',
				'uso'      => 'Residencial',
				'estrato'  => $estrato,
			]);

			TarifaDetalle::create([
				'tarifa_id'   => $t->id,
				'componente'  => 'Plena',
				'cargo_fijo'  => 4875.39,
				'consumo'     => $consumo,
				'vertimiento' => $vertimiento,
			]);
		}

		/*
		|--------------------------------------------------------------------------
		| ASEO
		|--------------------------------------------------------------------------
		*/

		$t = Tarifa::create([
			'servicio' => 'Aseo',
			'uso'      => 'Residencial',
			'estrato'  => 1,
		]);

		TarifaDetalle::create([
			'tarifa_id'   => $t->id,
			'componente'  => 'Plena',
			'cargo_fijo'  => 6667.00,
			'consumo'     => 2000.00,
			'vertimiento' => 0.00,
		]);
	}
}
