<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependencies')->insert([
            ['municipality_id' => 1, 'name_dependency' => 'Dependencia A', 'created_at' => Carbon::now()],
            ['municipality_id' => 1, 'name_dependency' => 'Dependencia B', 'created_at' => Carbon::now()],
            ['municipality_id' => 1, 'name_dependency' => 'Dependencia C', 'created_at' => Carbon::now()],
            ['municipality_id' => 1, 'name_dependency' => 'Dependencia D', 'created_at' => Carbon::now()],
            ['municipality_id' => 1, 'name_dependency' => 'Dependencia E', 'created_at' => Carbon::now()],
        ]);
    }
}
