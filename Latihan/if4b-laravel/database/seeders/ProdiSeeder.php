<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(
        [
                [
                    //'id' => Str::uuid(),
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Sistem Informasi',
                    'fakultas_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Informatika',
                    'fakultas_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    //'id' => Str::uuid(),
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Akuntansi',
                    'fakultas_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Manajemen',
                    'fakultas_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
        ]);
    }
}
