<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // id_role sesuaikan dengan id dari table role_akun yang ada di dalam database local
        $akun = [
            ['name'=>'Test1', 'email'=>'test1@gmail.com','password'=>bcrypt('test'),'id_role'=>'1'],
            ['name'=>'Test2', 'email'=>'test2@gmail.com','password'=>bcrypt('test'),'id_role'=>'2'],
            ['name'=>'Test3', 'email'=>'test3@gmail.com','password'=>bcrypt('test'),'id_role'=>'3'],
            ['name'=>'Test4', 'email'=>'test4@gmail.com','password'=>bcrypt('test'),'id_role'=>'4'],
           
        ];

        foreach($akun as $data){
            DB::table('users')->insert($data);
        }
    }
}
