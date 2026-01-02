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
					Información oficial dirigida a la comunidad sobre avisos
					institucionales y campañas informativas relacionadas con
					los servicios públicos, el manejo adecuado de residuos
					sólidos y la promoción del uso eficiente y ahorro del agua.
				',
				'keywords' => '
					aviso avisos
					campaña campañas campañas informativas
					información comunidad
					residuos sólidos manejo de residuos
					ahorro de agua uso eficiente del agua
				',
				'url' => '/avisos',
				'tipo' => 'aviso',
			],
			// ================= SERVICIOS =================
			[
				'titulo' => 'Servicio de Acueducto',
				'contenido' => '
					Servicio público de acueducto prestado por COOPSERCONT,
					que incluye la captación, tratamiento y distribución de
					agua potable desde la planta de tratamiento ubicada en
					el barrio Primero de Mayo, garantizando la calidad del agua.
				',
				'keywords' => '
					acueducto agua potable
					planta de tratamiento
					calidad del agua
					servicio público
				',
				'url' => '/servicios/acueducto',
				'tipo' => 'servicio',
			],
			[
				'titulo' => 'Servicio de Alcantarillado',
				'contenido' => '
					Servicio público de alcantarillado para el manejo adecuado
					de las aguas residuales del municipio, mediante redes de
					recolección y mantenimiento preventivo que protegen la salud
					pública y el medio ambiente.
				',
				'keywords' => '
					alcantarillado aguas residuales
					redes de alcantarillado
					saneamiento básico
				',
				'url' => '/servicios/alcantarillado',
				'tipo' => 'servicio',
			],
			[
				'titulo' => 'Servicio de Aseo',
				'contenido' => '
					Servicio de aseo orientado a la recolección de residuos
					sólidos, la limpieza urbana y el manejo ambiental
					responsable, promoviendo un entorno limpio y ordenado.
				',
				'keywords' => '
					aseo residuos sólidos
					basura recolección
					limpieza urbana
					manejo ambiental
				',
				'url' => '/servicios/aseo',
				'tipo' => 'servicio',
			],
			// ================= TRANSPARENCIA =================
			[
				'titulo' => 'Transparencia',
				'contenido' => '
					Sección de transparencia institucional que garantiza el
					acceso a la información pública, en cumplimiento de la ley
					de transparencia y los principios de rendición de cuentas.
				',
				'keywords' => '
					transparencia información pública
					ley de transparencia
					rendición de cuentas
				',
				'url' => '/transparencia',
				'tipo' => 'transparencia',
			],
			[
				'titulo' => 'Contratación',
				'contenido' => '
					Información relacionada con los procesos de contratación,
					el plan anual de adquisiciones y la ejecución de contratos
					realizados por la entidad.
				',
				'keywords' => '
					contratación contratos
					plan anual de adquisiciones
					procesos contractuales
				',
				'url' => '/transparencia/contratacion',
				'tipo' => 'transparencia',
			],
			[
				'titulo' => 'Presupuesto',
				'contenido' => '
					Información presupuestal de la entidad, incluyendo estados
					financieros, ejecución presupuestal y uso de los recursos
					públicos.
				',
				'keywords' => '
					presupuesto estados financieros
					ejecución presupuestal
					recursos públicos
				',
				'url' => '/transparencia/presupuesto',
				'tipo' => 'transparencia',
			],

			// ================= INSTITUCIONAL =================
			[
				'titulo' => 'Atención al Ciudadano',
				'contenido' => '
					Servicios de atención a la ciudadanía que incluyen atención
					presencial, telefónica, canales digitales y el sistema de
					peticiones, quejas, reclamos, denuncias y sugerencias (PQRDS).
				',
				'keywords' => '
					atención al ciudadano
					pqrds quejas reclamos denuncias
					atención presencial telefónica
				',
				'url' => '/contacto',
				'tipo' => 'institucional',
			],
			[
				'titulo' => 'Compromiso Ambiental',
				'contenido' => '
					Compromiso institucional con la protección del medio
					ambiente, el uso eficiente del agua, el manejo adecuado de
					residuos sólidos y la educación ambiental.
				',
				'keywords' => '
					compromiso ambiental
					medio ambiente
					educación ambiental
					residuos sólidos agua
				',
				'url' => '/compromiso-ambiental',
				'tipo' => 'institucional',
			],
			[
				'titulo' => 'Estructura Orgánica y Talento Humano',
				'contenido' => '
					Información sobre la estructura orgánica de la entidad,
					conformada por la Asamblea General, el Consejo de
					Administración, la Gerencia y el talento humano.
				',
				'keywords' => '
					estructura orgánica
					talento humano
					asamblea general
					consejo de administración
				',
				'url' => '/estructura-organica',
				'tipo' => 'institucional',
			],
		];

		foreach ($items as $item) {
			SearchIndex::firstOrCreate( $item );
		}

		//Anuncios
		News::where('activo', true)->each(function ($news) {
			SearchIndex::firstOrCreate(
				['url' => route('noticias.show', $news)],
				[
					'titulo' => $news->titulo,
					'contenido' => strip_tags($news->contenido),
					'keywords' => '
						noticia noticias
						información institucional
						comunidad
					',
					'tipo' => 'noticia',
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
