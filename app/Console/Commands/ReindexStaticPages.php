<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\{DB, Artisan};

class ReindexStaticPages extends Command
{
	protected $signature = 'search:reindex-static';
	protected $description = 'Reindexa páginas Blade estáticas';

	public function handle()
	{
		$this->info('Reiniciando índice de búsqueda...');

		// 1️⃣ Vaciar tabla (más rápido y seguro que delete)
		DB::table('search_index')->truncate();

		$this->info('Tabla search_index limpiada.');

		// 2️⃣ Ejecutar seeder principal
		Artisan::call('db:seed', [
			'--class' => 'IndexSearchSeeder',
			'--force' => true,
		]);

		$this->info('Seeder IndexSearchSeeder ejecutado correctamente.');
		$this->info('Índice de búsqueda reconstruido con éxito.');

		return Command::SUCCESS;
	}
}
