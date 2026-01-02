<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
			NewsSeeder::class,
			//Indexes
			IndexSearchSeeder::class
		]);
	}
}
