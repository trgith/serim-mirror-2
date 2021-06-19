<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $insertListStates = array(
        array('region'=>'Xicotepec'),
		array('region'=>'Huauchinango'),
        array('region'=>'Zacatlán'),
        array('region'=>'Huehuetla'),
        array('region'=>'Zacapoaxtla'),
        array('region'=>'Teziutlán'),
        array('region'=>'Chignahuapan'),
        array('region'=>'Libres'),
        array('region'=>'Quimixtlán'),
        array('region'=>'Acatzingo'),
        array('region'=>'Ciudad Serdán'),
        array('region'=>'Tecamachalco'),
        array('region'=>'Tehuacán'),
        array('region'=>'Sierra Negra'),
        array('region'=>'Izúcar de Matamoros'),
        array('region'=>'Chiautla'),
        array('region'=>'Acatlán'),
        array('region'=>'Tepexi de Rodríguez'),
        array('region'=>'Atlixco'),
        array('region'=>'San Martín Texmelucan'),
        array('region'=>'Área Metropolitana de la Ciudad de Puebla'),
        array('region'=>'Tepeaca'),

    );

    public function run()
    {
        Region::insert($this->insertListStates);
    }
}
