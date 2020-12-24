<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        //
        Schema::enableForeignKeyConstraints();
    }

    private static $arrayEspecialidades = ['Informática', 'Sistemas y Aplicaciones Informáticas'];

    private static $arrayCiclos = [
        array("grado" =>'FPB', "nombre" =>"Informática de Oficina"),
        array("grado" =>'FPB', "nombre" =>"Informática y Comunicaciones"),
        array("grado" =>'GM', "nombre" =>"Sistemas Microinformáticos y Redes"),
        array("grado" =>'GS', "nombre" =>"Administración de Sistemas Informáticos en Red"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Multiplataforma"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Web")
    ];

    private static $arrayModulos = [
        array("nombre" =>"Ofimática y archivo de documentos", "especialidad" =>"2", "ciclo" =>"1"),
        array("nombre" =>"Montaje y mantenimiento de sistemas y componentes informáticos", "especialidad" =>"2", "ciclo" =>"1"),
        array("nombre" =>"Instalación y mantenimiento de redes para transmisión de datos", "especialidad" =>"2", "ciclo" =>"1"),
        array("nombre" =>"Operaciones auxiliares para la configuración y la explotación", "especialidad" =>"2", "ciclo" =>"1"),

        array("nombre" =>"Equipos eléctricos y electrónicos", "especialidad" =>"2", "ciclo" =>"2"),
        array("nombre" =>"Montaje y mantenimiento de sistemas y componentes informáticos", "especialidad" =>"2", "ciclo" =>"2"),
        array("nombre" =>"Instalación y mantenimiento de redes para transmisión de datos", "especialidad" =>"2", "ciclo" =>"2"),
        array("nombre" =>"Operaciones auxiliares para la configuración y la explotación", "especialidad" =>"2", "ciclo" =>"2"),

        array("nombre" =>"Montaje y mantenimiento de equipo", "especialidad" =>"2", "ciclo" =>"3"),
        array("nombre" =>"Sistemas operativos monopuesto", "especialidad" =>"2", "ciclo" =>"3"),
        array("nombre" =>"Aplicaciones ofimáticas", "especialidad" =>"2", "ciclo" =>"3"),
        array("nombre" =>"Redes locales", "especialidad" =>"1", "ciclo" =>"3"),
        array("nombre" =>"Sistemas operativos en red", "especialidad" =>"2", "ciclo" =>"3"),
        array("nombre" =>"Seguridad informática", "especialidad" =>"1", "ciclo" =>"3"),
        array("nombre" =>"Servicios en red", "especialidad" =>"1", "ciclo" =>"3"),
        array("nombre" =>"Aplicaciones web", "especialidad" =>"1", "ciclo" =>"3"),

        array("nombre" =>"Implantación de sistemas operativos", "especialidad" =>"2", "ciclo" =>"4"),
        array("nombre" =>"Planificación y administración de redes", "especialidad" =>"1", "ciclo" =>"4"),
        array("nombre" =>"Fundamentos de hardware", "especialidad" =>"2", "ciclo" =>"4"),
        array("nombre" =>"Gestión de bases de datos", "especialidad" =>"1", "ciclo" =>"4"),
        array("nombre" =>"Lenguajes de marca y sistemas de gestión de información", "especialidad" =>"1", "ciclo" =>"4"),
        array("nombre" =>"Administración de sistemas operativos", "especialidad" =>"2", "ciclo" =>"4"),
        array("nombre" =>"Servicios de red e Internet", "especialidad" =>"1", "ciclo" =>"4"),
        array("nombre" =>"Implantación de aplicaciones web", "especialidad" =>"1", "ciclo" =>"4"),
        array("nombre" =>"Administración de sistemas gestores de bases de datos", "especialidad" =>"1", "ciclo" =>"4"),
        array("nombre" =>"Seguridad y alta disponibilidad", "especialidad" =>"1", "ciclo" =>"4"),

        array("nombre" =>"Sistemas informáticos", "especialidad" =>"2", "ciclo" =>"5"),
        array("nombre" =>"Bases de Datos", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Programación", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Entornos de desarrollo", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Lenguajes de marcas y sistemas de gestión de información", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Acceso a datos", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Desarrollo de interfaces", "especialidad" =>"2", "ciclo" =>"5"),
        array("nombre" =>"Programación multimedia y dispositivos móviles", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Programación de servicios y procesos", "especialidad" =>"1", "ciclo" =>"5"),
        array("nombre" =>"Sistemas de gestión empresarial", "especialidad" =>"2", "ciclo" =>"5"),

        array("nombre" =>"Sistemas informáticos", "especialidad" =>"2", "ciclo" =>"6"),
        array("nombre" =>"Bases de Datos", "especialidad" =>"1", "ciclo" =>"6"),
        array("nombre" =>"Programación", "especialidad" =>"1", "ciclo" =>"6"),
        array("nombre" =>"Entornos de desarrollo", "especialidad" =>"1", "ciclo" =>"6"),
        array("nombre" =>"Lenguajes de marcas y sistemas de gestión de información", "especialidad" =>"1", "ciclo" =>"6"),
        array("nombre" =>"Desarrollo web en entorno cliente", "especialidad" =>"2", "ciclo" =>"6"),
        array("nombre" =>"Desarrollo web en entorno servidor", "especialidad" =>"1", "ciclo" =>"6"),
        array("nombre" =>"Despliegue de aplicaciones web", "especialidad" =>"1", "ciclo" =>"6"),
        array("nombre" =>"Diseño de interfaces web", "especialidad" =>"2", "ciclo" =>"6")
    ];


}
