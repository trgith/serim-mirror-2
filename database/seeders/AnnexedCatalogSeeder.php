<?php

namespace Database\Seeders;

use App\Models\AnnexedCatalog;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AnnexedCatalogSeeder extends Seeder
{
    /**
     * Data to be inserted in the table
     *
     *
    */
    private $insertListAnnexesCatalog = array(
        array('name'=>'Plan de Desarrollo Municipal', 'number' => '1', 'status' => 1),
        array('name'=>'Estructura Orgánica', 'number' => '2', 'status' => 1),
        array('name'=>'Presupuesto de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación', 'number' => '3', 'status' => 1),
        array('name'=>'Documentación Presentada a la Auditoria Superior del Estado', 'number' => '4', 'status' => 1),
        array('name'=>'Documentación Justificativa y Comprobatoria', 'number' => '5', 'status' => 1),
        array('name'=>'Entrega de Información en Sistemas', 'number' => '6', 'status' => 1),
        array('name'=>'Entrega de Cuentas Públicas', 'number' => '7', 'status' => 1),
        array('name'=>'Entrega de Informes Parciales y Dictamen del Auditor Externo', 'number' => '8', 'status' => 1),
        array('name'=>'Expediente Tributario', 'number' => '9', 'status' => 1),
        array('name'=>'Arqueo de Caja', 'number' => '10', 'status' => 1),
        array('name'=>'Conciliación Bancaria', 'number' => '11', 'status' => 1),
        array('name'=>'Relación del Último Cheque Expedido por Cada una de las Cuentas Bancarias', 'number' => '12', 'status' => 1),
        array('name'=>'Relación de Cheques Expedidos por Entregar o Transferencias por Realizar a Beneficiarios', 'number' => '13', 'status' => 1),
        array('name'=>'Relación de Cancelación de Cuentas Bancarias', 'number' => '14', 'status' => 1),
        array('name'=>'Relación de Padrones Actualizados de Usuarios y Contribuyentes', 'number' => '15', 'status' => 1),
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnexedCatalog::insert($this->insertListAnnexesCatalog);
    }
}
