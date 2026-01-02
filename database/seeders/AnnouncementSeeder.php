<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // AVISOS
            [
                'titulo' => 'Emisiones informativas a la comunidad',
                'descripcion' => 'COOPSERCONT informa a la comunidad que, a través de la emisora local y del carro compactador, se estarán realizando anuncios oficiales relacionados con la prestación de los servicios públicos, horarios, campañas y comunicados de interés general.',
                'tipo' => 'aviso',
                'activo' => true,
            ], [
                'titulo' => 'Incentivo por pronto pago',
                'descripcion' => 'Se invita a los usuarios que presentan mora en los servicios públicos a realizar su pago oportuno y ponerse al día, contribuyendo a la sostenibilidad del sistema.',
                'tipo' => 'aviso',
                'activo' => true,
            ], [
                'titulo' => 'Horarios de recolección de residuos',
                'descripcion' => 'COOPSERCONT recuerda a la comunidad respetar los horarios establecidos para la recolección de residuos sólidos, con el fin de mantener el municipio limpio y ordenado.',
                'tipo' => 'aviso',
                'activo' => true,
            ],
            // CAMPAÑAS
            [
                'titulo' => 'Campaña de ahorro y uso responsable del agua',
                'descripcion' => 'Se promueve el uso eficiente del agua potable, incentivando prácticas responsables para la conservación de las fuentes hídricas.',
                'tipo' => 'campaña',
                'activo' => true,
            ], [
                'titulo' => 'Campaña de buen manejo de residuos sólidos',
                'descripcion' => 'COOPSERCONT adelanta campañas de sensibilización sobre el manejo adecuado de los residuos sólidos y la separación en la fuente.',
                'tipo' => 'campaña',
                'activo' => true,
            ], [
                'titulo' => 'Separación en la fuente de residuos',
                'descripcion' => 'Se fomenta la separación en la fuente como acción clave para la protección del medio ambiente y el aprovechamiento de residuos.',
                'tipo' => 'campaña',
                'activo' => true,
            ], [
                'titulo' => 'Manejo de residuos sólidos',
                'descripcion' => 'Campaña educativa sobre la correcta disposición de residuos sólidos.',
                'tipo' => 'campaña',
                'imagen' => 'campaigns/manejo-residuos.jpg',
                'activo' => true,
            ], [
                'titulo' => 'Uso eficiente y ahorro de agua',
                'descripcion' => 'Campaña institucional para promover el uso responsable del agua potable.',
                'tipo' => 'campaña',
                'imagen' => 'campaigns/ahorro-agua.jpg',
                'activo' => true,
            ]
        ];
        foreach ($data as $item) {
            Announcement::create($item);
        }
    }
}
