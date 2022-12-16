<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Tentang Fisioyuk',
            'description' => 'Lorem Ipsum',
            'image' => 'about.png'
        ]);
    }
}
