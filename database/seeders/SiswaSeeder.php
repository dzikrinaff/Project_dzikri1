<?php

namespace Database\Seeders;

//use App\Models\Siswa;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run():void
    {

        Siswa::insert([
            'nama'=> "dzikri nafil",
            'jenis_kelamin' => 0,
            'umur' => 16,
            'alamat' => "jln smk"
        ]);
        Siswa::insert([
            'nama'=> " nafil anazmi",
            'jenis_kelamin' => 0,
            'umur' => 15,
            'alamat' => "jln smk"
        ]);
        Siswa::insert([
            'nama'=> "uya",
            'jenis_kelamin' => 0,
            'umur' => 46,
            'alamat' => "jln smk"
        ]);
        Siswa::insert([
            'nama'=> "jaja",
            'jenis_kelamin' => 0,
            'umur' => 31,
            'alamat' => "jln smk"
        ]);
        Siswa::insert([
            'nama'=> "isa",
            'jenis_kelamin' => 1,
            'umur' => 19,
            'alamat' => "jln smk"
        ]);

        Siswa::insert([
            'nama'=> "uus",
            'jenis_kelamin' => 0,
            'umur' => 26,
            'alamat' => "jln smk"
        ]);

        Siswa::insert([
            'nama'=> "upi",
            'jenis_kelamin' => 0,
            'umur' => 23,
            'alamat' => "jln smk"
        ]);

        Siswa::insert([
            'nama'=> "reham",
            'jenis_kelamin' => 0,
            'umur' => 10,
            'alamat' => "jln smk"
        ]);

        Siswa::insert([
            'nama'=> "dapa",
            'jenis_kelamin' => 0,
            'umur' => 14,
            'alamat' => "jln mu"
        ]);

        Siswa::insert([
            'nama'=> "iis",
            'jenis_kelamin' => 1,
            'umur' => 12,
            'alamat' => "jln smk"
        ]);



        //

    }
}
