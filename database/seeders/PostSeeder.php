<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            [
            'Menu' => 'Fusce dictum finibus',
            'Category' => 'Pizza',
            'Price' => '$45 / $55',
            'draft' => 0
            ],
            [
                'Menu' => 'Aliquam sagittis',
                'Category' => 'Pizza',
                'Price' => '$65 / $70',
                'draft' => 0
            ],
            [
                'Menu' => 'Sed varius turpis',
                'Category' => 'Pizza',
                'Price' => '$30.50',
                'draft' => 0
            ],
            [
                'Menu' => 'Maecenas eget justo',
                'Category' => 'Pizza',
                'Price' => '$80.25',
                'draft' => 0
            ],
            [
                'Menu' => 'Quisque et felis eros',
                'Category' => 'Pizza',
                'Price' => '$20 / $40 / $60',
                'draft' => 0
            ],
            [
                'Menu' => 'Donec porta consequat',
                'Category' => 'Pizza',
                'Price' => '$15',
                'draft' => 0
            ],
            [
                'Menu' => 'Sed ultricies dui',
                'Category' => 'Pizza',
                'Price' => '$94',
                'draft' => 0
                ]
        ]);
    }
}
