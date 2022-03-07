<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\Role;
use Carbon\Carbon;
use App\Classes\GenerateCredential;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminGenerator = new GenerateCredential();

        $guru = new Guru();

        $guru->nama = 'Admin';
        $guru->nuptk = '1903044';
        $guru->email = 'admin@gmail.com';
        $guru->jenis_kelamin = 'P';
        $guru->tempat_lahir = 'Cirebon';
        $guru->tanggal_lahir = Carbon::now();
        $guru-> telp = '085939564066';

        if($guru->save()) $adminGenerator->generateAdmin($guru, true,'admin123');
        

        // Create guru

        $guru = new Guru();

        $guru->nama = 'Hendri Passah';
        $guru->nuptk = '1060752653200013';
        $guru->email = 'hendripassah@gmail.com';
        $guru->jenis_kelamin = 'L';
        $guru->tempat_lahir = 'Cirebon';
        $guru->tanggal_lahir = Carbon::now();
        $guru->telp = '083892093928';

        if($guru->save()) $adminGenerator->generateAdmin($guru, false,'admin123');
    }
}
