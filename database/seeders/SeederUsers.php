<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Farrel',
            'nip_nisn' => '162020001',
            'password' => bcrypt('test'),
            'role' => 'Super Admin'
        ]);
    }
}
