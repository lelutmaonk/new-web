<?php

namespace Database\Seeders;

use App\Models\PelayananModel;
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
        // \App\Models\User::factory(10)->create();

        PelayananModel::create([
            'tanggal_permohonan' => '2020-01-01',
            'nomor_agenda' => '123',
            'capel_nama' => '123',
            'alamat' => '123',
            'daya_permohonan' => '123',
            'telepon' => '123',
            'tarif' => '123',
            'file_berkas_permohonan' => '123',
            'keterangan' => '123',
        ]);

    }
}
