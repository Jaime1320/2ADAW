<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bebidas')->insert([
            [
                'nombre'=> 'CocaCola',
                'precio'=>1.5,
                'tipo'=>'Refresco'
            ],
            [
                'nombre'=> 'Fanta de Naranja',
                'precio'=>1.5,
                'tipo'=>'Refresco'
            ],
            [
                'nombre'=> 'Ron Cola',
                'precio'=>4.5,
                'tipo'=>'Alcohol'
            ]
            ]);
    }
}
