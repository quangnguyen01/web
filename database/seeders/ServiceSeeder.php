<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'name' => 'Service 1',
                'image' => '',
                'description' => '',
            ],
            [
                'id' => 2,
                'name' => 'Service 2',
                'image' => '',
                'description' => '',
            ],
            [
                'id' => 3,
                'name' => 'Service 3',
                'image' => '',
                'description' => '',
            ],
            [
                'id' => 4,
                'name' => 'Service 4',
                'image' => '',
                'description' => '',
            ],
            [
                'id' => 5,
                'name' => 'Service 5',
                'image' => '',
                'description' => '',
            ],
            [
                'id' => 6,
                'name' => 'Service 6',
                'image' => '',
                'description' => '',
            ],
            [
                'id' => 7,
                'name' => 'Service 7',
                'image' => '',
                'description' => '',
            ]
        ]);
    }
}
