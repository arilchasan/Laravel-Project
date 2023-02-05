<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Gerbong;
use App\Models\GerbongController;
use App\Models\PenumpangModels;
use App\Models\Tujuan;
use Database\Factories\GerbongFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //   PenumpangModels::factory(5)->create();

         PenumpangModels::factory(10)->create();
         Gerbong::factory(10)->create();

        Tujuan::create([
            'kode' => '1',
            'kereta'=> 'KA Bengawan',
            'tujuan'=> 'Pasar Senen - Purwosari'
        ]);
        Tujuan::create([
            'kode' => '2',
            'kereta'=> 'KA Argo Sindoro',
            'tujuan'=> 'Gambir - Semarang Tawang'
        ]);
        Tujuan::create([
            'kode' => '3',
            'kereta'=> 'KA Jatiluhur',
            'tujuan'=> 'Cikampek - Cikarang'
        ]);
        Tujuan::create([
            'kode' => '4',
            'kereta'=> 'KA Jayakarta ',
            'tujuan'=> 'Surabaya Gubeng - Pasar Senen'
        ]);
        Tujuan::create([
            'kode' => '5',
            'kereta'=> 'KA Gajayana',
            'tujuan'=> 'Malang - Gambir'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
