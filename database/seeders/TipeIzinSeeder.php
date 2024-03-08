<?php

namespace Database\Seeders;

use App\Models\TipeIzin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $tipeIzin = [
        ['tipe' => 'Izin'],
        ['tipe' => 'Dispensasi'],
       ];

       foreach($tipeIzin as $data){
        DB::table('tipe_izin')->insert($data);
       }
    }
}
