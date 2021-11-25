<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class homeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            ['description' => 'Desarrollador web en busqueda laboral'], 
            ['description' => 'Mi interes esta enfocado en empresas en las cuales pueda seguir aprendiendo, explotando y desarrollando mis conocimientos en este rubro.']
        ];
        DB::table('table_home')->insert($datos);
    }
}
