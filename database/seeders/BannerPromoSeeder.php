<?php

namespace Database\Seeders;

use App\Models\BannerPromo;
use Illuminate\Database\Seeder;

class BannerPromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BannerPromo::create([
            
            'title' => 'Punya Keluhan Pegal?',
            'description' => 'KAMI PUNYA SOLUSINYA DISCOUNT UP TO 20%',
            'image' => 'bannerpromo.jpg'

        ]);
    }
}
