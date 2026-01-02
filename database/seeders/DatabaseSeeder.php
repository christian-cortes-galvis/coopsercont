<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Search\{
	ServiciosSearchSeeder,
	TransparenciaSearchSeeder,
	InstitucionalSearchSeeder,
	NoticiasSearchSeeder,
	AvisosSearchSeeder
};

class DatabaseSeeder extends Seeder
{
	/**
	* Seed the application's database.
	*/
	public function run(): void
	{
		$this->call([
			TarifaSeeder::class,
			AnnouncementSeeder::class,
			NewsSeeder::class
		]);
		$this->call([
			ServiciosSearchSeeder::class,
			TransparenciaSearchSeeder::class,
			InstitucionalSearchSeeder::class,
			NoticiasSearchSeeder::class,
			AvisosSearchSeeder::class,
		]);
	}
}
