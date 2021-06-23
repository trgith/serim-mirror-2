<?php

namespace Database\Seeders;

use App\Models\AnnexedCatalogArea;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AnnexedCatalogAreaSeeder extends Seeder
{
    /**
     * Data to be inserted in the table
     *
     *
    */
    private $insertListAnnexesCatalogAreas = array(
        array('annexed_catalog_id'=> 1, 'area_id' => 1),
        array('annexed_catalog_id'=> 1, 'area_id' => 2),
        array('annexed_catalog_id'=> 1, 'area_id' => 4),

        array('annexed_catalog_id'=> 2, 'area_id' => 1),
        array('annexed_catalog_id'=> 2, 'area_id' => 2),
        array('annexed_catalog_id'=> 2, 'area_id' => 3),
        array('annexed_catalog_id'=> 2, 'area_id' => 4),
        array('annexed_catalog_id'=> 2, 'area_id' => 6),

        array('annexed_catalog_id'=> 3, 'area_id' => 1),
        array('annexed_catalog_id'=> 3, 'area_id' => 2),
        array('annexed_catalog_id'=> 3, 'area_id' => 3),
        array('annexed_catalog_id'=> 3, 'area_id' => 6),

        array('annexed_catalog_id'=> 4, 'area_id' => 1),
        array('annexed_catalog_id'=> 4, 'area_id' => 2),
        array('annexed_catalog_id'=> 4, 'area_id' => 3),

        array('annexed_catalog_id'=> 5, 'area_id' => 1),
        array('annexed_catalog_id'=> 5, 'area_id' => 2),
        array('annexed_catalog_id'=> 5, 'area_id' => 3),

        array('annexed_catalog_id'=> 6, 'area_id' => 1),
        array('annexed_catalog_id'=> 6, 'area_id' => 2),
        array('annexed_catalog_id'=> 6, 'area_id' => 3),
        array('annexed_catalog_id'=> 6, 'area_id' => 6),

        array('annexed_catalog_id'=> 7, 'area_id' => 1),
        array('annexed_catalog_id'=> 7, 'area_id' => 2),
        array('annexed_catalog_id'=> 7, 'area_id' => 4),

        array('annexed_catalog_id'=> 8, 'area_id' => 1),
        array('annexed_catalog_id'=> 8, 'area_id' => 2),
        array('annexed_catalog_id'=> 8, 'area_id' => 3),

        array('annexed_catalog_id'=> 9, 'area_id' => 1),
        array('annexed_catalog_id'=> 9, 'area_id' => 2),
        array('annexed_catalog_id'=> 9, 'area_id' => 3),

        array('annexed_catalog_id'=> 10, 'area_id' => 1),
        array('annexed_catalog_id'=> 10, 'area_id' => 2),
        array('annexed_catalog_id'=> 10, 'area_id' => 3),

        array('annexed_catalog_id'=> 11, 'area_id' => 1),
        array('annexed_catalog_id'=> 11, 'area_id' => 2),
        array('annexed_catalog_id'=> 11, 'area_id' => 3),

        array('annexed_catalog_id'=> 12, 'area_id' => 1),
        array('annexed_catalog_id'=> 12, 'area_id' => 2),
        array('annexed_catalog_id'=> 12, 'area_id' => 3),

        array('annexed_catalog_id'=> 13, 'area_id' => 1),
        array('annexed_catalog_id'=> 13, 'area_id' => 2),
        array('annexed_catalog_id'=> 13, 'area_id' => 3),

        array('annexed_catalog_id'=> 14, 'area_id' => 1),
        array('annexed_catalog_id'=> 14, 'area_id' => 2),
        array('annexed_catalog_id'=> 14, 'area_id' => 3),

        array('annexed_catalog_id'=> 15, 'area_id' => 1),
        array('annexed_catalog_id'=> 15, 'area_id' => 2),
        array('annexed_catalog_id'=> 15, 'area_id' => 3),
        array('annexed_catalog_id'=> 15, 'area_id' => 6)

    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnexedCatalogArea::insert($this->insertListAnnexesCatalogAreas);
    }
}
