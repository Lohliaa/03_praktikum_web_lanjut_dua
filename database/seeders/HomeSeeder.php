<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\home;

class HomeSeeder extends Seeder
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
            'Price' => '$45/$55',
            ],
            [
                'Menu' => 'Aliquam sagittis',
                'Category' => 'Pizza',
                'Price' => '$65/$70',
            ],
            [
                'Menu' => 'Sed varius turpis',
                'Category' => 'Pizza',
                'Price' => '$30.50',
            ],
            [
                'Menu' => 'Salad Menu One',
                'Category' => 'Salad',
                'Price' => '$25',
            ],
            [
                'Menu' => 'Second Title Salad',
                'Category' => 'Salad',
                'Price' => '$30',
            ],
            [
                'Menu' => 'Third Salad Item',
                'Category' => 'Salad',
                'Price' => '$45',
            ],
            [
                'Menu' => 'Maecenas eget justo',
                'Category' => 'Noodle',
                'Price' => '$35.50',
            ],[
                'Menu' => 'Quisque et felis eros',
                'Category' => 'Noodle',
                'Price' => '$40.50',
            ],
            [
                'Menu' => 'Third Soft Noodle',
                'Category' => 'Noodle',
                'Price' => '$20.50',
                ]
        ]);
    }
}
