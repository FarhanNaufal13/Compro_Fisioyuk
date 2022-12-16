<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Brilian Nasrulloh Azmi S.Tr.Kes',
            'description' => 'Ttl : Cianjur,30 Desember 1999 Jabatan : Fisioterapist Agama : Islam Instagram : @briliannasaz Moto hidup : berjuang di jalan allah & tetap bermanfaat untuk orang banyak

            Yuk Segera Appoitment Di (+)0877-7884-0699 ,Semua keluhan anda menjadi kewajiban kami untuk membuat anda kembali nyaman tanpa harus ke Rumah sakit atau Klinik, Kini Layanan Fisioterapi Bisa di lakukan di rumah anda dan anda tetap aman di rumah bersama fisioyuk.',
            'image' => 'team.png'
        ]);
    }
}
