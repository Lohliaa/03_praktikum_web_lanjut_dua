<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\about;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
            'Name' => 'Jennifer Soft',
            'Position' => 'Founder-and-CEO',
            ],
            [
                'Name' => 'Daisy Walker',
                'Position' => 'Executive-Chef',
            ],
            [
                'Name' => 'Florence Nelson',
                'Position' => 'Kitchen-Manager',
            ],
            [
                'Name' => 'Valentina Martin',
                'Position' => 'Culinary-Director',
                ]
        ]);
    }
}
