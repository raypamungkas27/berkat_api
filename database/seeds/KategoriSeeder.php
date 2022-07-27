<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_kategori')->insert(
            [
                'nama_kategori' => 'popular',
            ],
            [
                'nama_kategori' => 'now playing',
            ],
            [
                'nama_kategori' => 'top rated',
            ],
            [
                'nama_kategori' => 'up coming',
            ],
        );
    }
}
