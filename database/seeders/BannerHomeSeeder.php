<?php

namespace Database\Seeders;

use App\Models\BannerHome;
use Illuminate\Database\Seeder;

class BannerHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BannerHome::create([
            'title' => 'PERTAMA DI INDONESIA',
            'description' => 'PESAN FISIO TERAPIS KE RUMAH ANDA TANPA PERLU MENGANTRi SEKARANG JUGA!',
            'sub_title' => 'Shoomatic offers yours very comfortable time on walking and exercise.',
            'image' => 'banner.png'
        ]);
    }
}