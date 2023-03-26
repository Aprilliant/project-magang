<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\data;
use App\Models\data_nasabah;
use App\Models\data_pegawai;
use Database\Factories\data_nasabahFactory;
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
        // data_nasabah::factory(10000)->create();
        data_pegawai::factory(100)->create();
    }
}
