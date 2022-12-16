<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'company',
            'description' => 'Lorem Ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Jl. raya sukabumi',
            'emali' => 'company@gmail.com',
            'telepon' => '088220361123',
            'maps_embed' => 'maps.com'
        ]);
    }
}
