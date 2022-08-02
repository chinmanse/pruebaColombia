<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipo_productos')->insert([
            "nombre" => "Tipo 1",
            "abreviacion" => "T1"
        ]);
        \DB::table('tipo_productos')->insert([
            "nombre" => "Tipo 2",
            "abreviacion" => "T2"
        ]);
        \DB::table('tipo_productos')->insert([
            "nombre" => "Tipo 3",
            "abreviacion" => "T3"
        ]);
    }
}
