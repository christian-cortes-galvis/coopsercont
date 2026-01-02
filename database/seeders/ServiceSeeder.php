<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::truncate();

        Service::insert([
            [
                'nombre' => 'Acueducto',
                'descripcion' => 'Garantizamos el suministro permanente de agua potable, cumpliendo con los estándares de calidad establecidos en la normatividad, desde la captación, tratamiento y distribución del recurso hídrico. Nuestro objetivo es asegurar que cada hogar reciba agua segura, promoviendo además el uso responsable y la protección de las fuentes hídricas del municipio.',
                'icono' => 'water'
            ],
            [
                'nombre' => 'Alcantarillado',
                'descripcion' => 'Operamos y mantenemos el sistema de alcantarillado, asegurando la correcta recolección, transporte y disposición de las aguas residuales. De esta manera contribuimos a la protección de la salud pública, la prevención de riesgos ambientales y el mejoramiento de las condiciones sanitarias de la comunidad.',
                'icono' => 'pipe'
            ],
            [
                'nombre' => 'Aseo',
                'descripcion' => 'Brindamos el servicio de barrido, recolección, transporte y disposición final de los residuos sólidos, fomentando prácticas responsables de separación en la fuente y cuidado del medio ambiente. Nuestro compromiso es mantener un municipio limpio, ordenado y saludable para su comunidad.',
                'icono' => 'trash'
            ],
        ]);
    }
}
