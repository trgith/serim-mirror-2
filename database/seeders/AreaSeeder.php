<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            ['area' => 'Presidente', 'created_at' => Carbon::now()],
            ['area' => 'Contraloria', 'created_at' => Carbon::now()],
            ['area' => 'Tesoreria/Administración', 'created_at' => Carbon::now()],
            ['area' => 'Sindicatura/S.General', 'created_at' => Carbon::now()],
            ['area' => 'Obra Publica', 'created_at' => Carbon::now()],
            ['area' => 'Demas Dependencias', 'created_at' => Carbon::now()],
        ]);
    }
}
