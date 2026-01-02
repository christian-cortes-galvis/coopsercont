<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{SearchIndex, Announcement, News};

class IndexSearchSeeder extends Seeder
{
	public function run()
	{
		$items = [
			// ================= AVISOS =================
			[
				'titulo' => 'Avisos y Campañas Informativas',
				'contenido' => '
					aviso.
					avisos.
					campañas.
					campañas informativas.
					avisos institucionales.
					información a la comunidad.
					manejo de residuos.
					ahorro de agua.
				',
				'url' => '/avisos',
				'tipo' => 'aviso',
			],
			// ================= SERVICIOS =================
			[
				'titulo' => 'Servicio de Acueducto',
				'contenido' => '
					Servicio público de acueducto.
					Planta de tratamiento de agua potable.
					Barrio Primero de Mayo.
					Calidad del agua.
					Infraestructura hidráulica.
				',
				'url' => '/servicios/acueducto',
				'tipo' => 'servicio',
			], [
				'titulo' => 'Servicio de Alcantarillado',
				'contenido' => '
					Servicio público de alcantarillado.
					Manejo de aguas residuales.
					Red de alcantarillado.
					Mantenimiento preventivo.
				',
				'url' => '/servicios/alcantarillado',
				'tipo' => 'servicio',
			], [
				'titulo' => 'Servicio de Aseo',
				'contenido' => '
					Recolección de residuos sólidos.
					Manejo ambiental.
					Limpieza urbana.
					Servicio de aseo.
				',
				'url' => '/servicios/aseo',
				'tipo' => 'servicio',
			],

			// ================= TRANSPARENCIA =================
			[
				'titulo' => 'Transparencia',
				'contenido' => '
					Transparencia institucional.
					Acceso a la información pública.
					Ley de transparencia.
				',
				'url' => '/transparencia',
				'tipo' => 'transparencia',
			], [
				'titulo' => 'Contratación',
				'contenido' => '
					Información contractual.
					Plan anual de adquisiciones.
					Ejecución de contratos.
				',
				'url' => '/transparencia/contratacion',
				'tipo' => 'transparencia',
			], [
				'titulo' => 'Presupuesto',
				'contenido' => '
					Presupuesto institucional.
					Estados financieros.
					Ejecución presupuestal.
				',
				'url' => '/transparencia/presupuesto',
				'tipo' => 'transparencia',
			],

			// ================= INSTITUCIONAL =================
			[
				'titulo' => 'Atención al Ciudadano',
				'contenido' => '
					Servicios de atención a la ciudadanía.
					Atención presencial.
					Atención telefónica.
					Correo electrónico.
					PQRDS.
				',
				'url' => '/contacto',
				'tipo' => 'institucional',
			],
			[
				'titulo' => 'Compromiso Ambiental',
				'contenido' => '
					Protección ambiental.
					Uso eficiente del agua.
					Manejo de residuos sólidos.
					Educación ambiental.
				',
				'url' => '/compromiso-ambiental',
				'tipo' => 'institucional',
			],
			[
				'titulo' => 'Estructura Orgánica y Talento Humano',
				'contenido' => '
					Asamblea General.
					Consejo de Administración.
					Gerencia.
					Talento humano.
				',
				'url' => '/estructura-organica',
				'tipo' => 'institucional',
			],
		];

		foreach ($items as $item) {
			SearchIndex::firstOrCreate(
				['url' => $item['url']],
				$item
			);
		}

		//Anuncios
		Announcement::where('activo', true)->each(function ($aviso) {
			SearchIndex::firstOrCreate(
				['url' => '/avisos'],
				[
					'titulo' => $aviso->titulo,
					'contenido' => $aviso->descripcion,
					'tipo' => $aviso->tipo,
				]
			);
		});

		//Noticias
		News::where('activo', true)->each(function ($news) {
			SearchIndex::firstOrCreate(
				['url' => route('noticias.show', $news)],
				[
					'titulo' => $news->titulo,
					'contenido' => strip_tags($news->contenido),
					'tipo' => 'noticia',
				]
			);
		});
	}
}
