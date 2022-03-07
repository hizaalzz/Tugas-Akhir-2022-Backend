<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Murid;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Murid::create([
            'nama' => 'Ghita Fitri',
            'nisn' => '190030044',
            'nis' => '440030019',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Cirebon',
            'tanggal_lahir' => Carbon::now(),
            'telp' => '0212212201',
        ]); 

    }
}
