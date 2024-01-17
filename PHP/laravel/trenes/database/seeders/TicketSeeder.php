<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '2023-05-23',
                'price' => '50',
                'train_id' => '1',
                'ticket_type_id' => '1'
            ],
            [
                'date' => '2019-08-15',
                'price' => '80',
                'train_id' => '2',
                'ticket_type_id' => '2'
            ],
            [
                'date' => '2015-10-12',
                'price' => '70',
                'train_id' => '3',
                'ticket_type_id' => '3'
            ]
        ]);
    }
}
