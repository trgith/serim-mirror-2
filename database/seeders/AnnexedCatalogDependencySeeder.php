<?php

namespace Database\Seeders;


use DB;
use App\Models\AnnexedCatalogDependency;

use Illuminate\Database\Seeder;

class AnnexedCatalogDependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $insertListAnnexesCatalogDependencies = array(
        array('annexed_catalog_id'=> 1, 'area_id' => 1, 'dependency_id' => 1, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 1, 'area_id' => 2, 'dependency_id' => 2, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 1, 'area_id' => 4, 'dependency_id' => 3, 'user_id' => 2, 'status' => 1),

        array('annexed_catalog_id'=> 2, 'area_id' => 3, 'dependency_id' => 1, 'user_id' => 2, 'status' => 1),

        array('annexed_catalog_id'=> 3, 'area_id' => 1, 'dependency_id' => 1, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 3, 'area_id' => 2, 'dependency_id' => 2, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 3, 'area_id' => 3, 'dependency_id' => 3, 'user_id' => 2, 'status' => 1),

        array('annexed_catalog_id'=> 4, 'area_id' => 3, 'dependency_id' => 4, 'user_id' => 2, 'status' => 1),

        array('annexed_catalog_id'=> 1, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 2, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 3, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 4, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 5, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 6, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 7, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 8, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 9, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 10, 'area_id' => 1,  'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 11, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 12, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 13, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 14, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
        array('annexed_catalog_id'=> 15, 'area_id' => 1, 'dependency_id' => 5, 'user_id' => 2, 'status' => 1),
    );

    public function run()
    {
        AnnexedCatalogDependency::insert($this->insertListAnnexesCatalogDependencies);
    }
}
