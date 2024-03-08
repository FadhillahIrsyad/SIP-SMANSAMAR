<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roleAkun = [
            ['role'=>'SuperAdmin'], 
            ['role'=>'Admin'], 
            ['role'=>'Satpam'], 
            ['role'=>'Siswa'], 
        ];

        foreach($roleAkun as $data){
            DB::table('role_akun')->insert($data);
        }
    }
}
