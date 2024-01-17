<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'El tren rojo',
                'passengers' => '500',
                'year' => '2022',
                'train_type_id' => '1'
            ],
            [
                'name' => 'El tren verde',
                'passengers' => '300',
                'year' => '2016',
                'train_type_id' => '2'
            ],
            [
                'name' => 'El tren bala',
                'passengers' => '150',
                'year' => '2020',
                'train_type_id' => '3'
            ]
        ]);
    }
}
