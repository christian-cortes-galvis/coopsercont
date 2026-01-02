<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
	public function run()
	{
		$data = [

			[
				'titulo' => 'COOPSERCONT informa sobre el inicio del periodo de facturación',
				'resumen' => 'Se informa a la comunidad el inicio del nuevo periodo de facturación de los servicios públicos.',
				'contenido' => '
					<p>COOPSERCONT informa a todos los usuarios del municipio de El Contadero
					que ha iniciado el nuevo periodo de facturación de los servicios de
					acueducto, alcantarillado y aseo.</p>

					<p>Se invita a la ciudadanía a revisar oportunamente su factura y a realizar
					el pago dentro de las fechas establecidas para evitar recargos.</p>

					<p>Para mayor información, los usuarios pueden acercarse a la oficina
					principal o comunicarse a través de los canales oficiales.</p>
				',
				'fecha_publicacion' => Carbon::parse('2025-01-10'),
				'activo' => true,
			],

			[
				'titulo' => 'Campaña institucional de ahorro y uso eficiente del agua',
				'resumen' => 'COOPSERCONT promueve prácticas responsables para el ahorro del agua potable.',
				'contenido' => '
					<p>Con el objetivo de proteger las fuentes hídricas y garantizar la
					disponibilidad del recurso para las futuras generaciones, COOPSERCONT
					adelanta una campaña institucional de ahorro y uso eficiente del agua.</p>

					<p>Se invita a la comunidad a:</p>
					<ul>
						<li>Reparar fugas internas en viviendas</li>
						<li>Evitar el desperdicio de agua potable</li>
						<li>Hacer uso responsable del servicio</li>
					</ul>

					<p>El compromiso de todos es fundamental para la sostenibilidad del servicio.</p>
				',
				'fecha_publicacion' => Carbon::parse('2025-01-18'),
				'activo' => true,
			],

			[
				'titulo' => 'Recordatorio sobre horarios de recolección de residuos sólidos',
				'resumen' => 'Se recuerda a la comunidad respetar los días y horarios establecidos para la recolección.',
				'contenido' => '
					<p>COOPSERCONT recuerda a los usuarios del servicio de aseo la importancia
					de respetar los días y horarios establecidos para la recolección de residuos
					sólidos en el municipio.</p>

					<p>El cumplimiento de estos horarios contribuye a mantener un entorno limpio,
					ordenado y saludable para todos.</p>

					<p>Así mismo, se reitera la importancia de separar correctamente los residuos
					reciclables y entregarlos en condiciones adecuadas.</p>
				',
				'fecha_publicacion' => Carbon::parse('2025-02-05'),
				'activo' => true,
			],

			[
				'titulo' => 'Mantenimiento preventivo del sistema de alcantarillado',
				'resumen' => 'COOPSERCONT adelanta labores de mantenimiento preventivo en la red de alcantarillado.',
				'contenido' => '
					<p>COOPSERCONT informa a la comunidad que se vienen realizando actividades
					de mantenimiento preventivo en la red de alcantarillado del municipio de
					El Contadero.</p>

					<p>Estas labores incluyen limpieza, inspección y reparación de puntos
					críticos, con el fin de prevenir obstrucciones y reboses.</p>

					<p>Se agradece la comprensión de la ciudadanía ante posibles molestias
					temporales durante la ejecución de estas actividades.</p>
				',
				'fecha_publicacion' => Carbon::parse('2025-02-20'),
				'activo' => true,
			],

			[
				'titulo' => 'Compromiso institucional con la transparencia y la atención al ciudadano',
				'resumen' => 'COOPSERCONT reafirma su compromiso con la transparencia y la atención a la ciudadanía.',
				'contenido' => '
					<p>COOPSERCONT reafirma su compromiso con los principios de transparencia,
					acceso a la información pública y atención oportuna a la ciudadanía.</p>

					<p>La cooperativa pone a disposición de la comunidad sus canales oficiales
					para la atención de peticiones, quejas, reclamos, sugerencias y denuncias
					(PQRDS).</p>

					<p>Invitamos a la ciudadanía a consultar la sección de Transparencia del
					sitio web para conocer la información institucional, normativa y
					presupuestal.</p>
				',
				'fecha_publicacion' => Carbon::parse('2025-03-01'),
				'activo' => true,
			],

		];

		foreach ($data as $item) {
			News::create($item);
		}
	}
}
