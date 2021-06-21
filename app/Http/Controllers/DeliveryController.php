<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function __contructor()
    {
        //$this->middleware('auth');
        //$this->middleware('publicservermiddleware');
    }

    /*
    *
    * Método index que retorna la vista para crear anexos
    *
    */
    public function getAnnexedesMainView()
    {
        $descriptions = ["Plan de Desarrollo Municipal \n", "Estructura Orgánica", "Presupuesto de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación",
        "Documentación Presentada a la Auditoria Superior del Estado", "Documentación Justificativa y Comprobatoria de la Fuente de Financiamiento de Ingresos de Gestión", "Entrega de Información en Sistemas",
        "Entrega de Cuentas Públicas", "Entrega de Informes Parciales y Dictámen del Auditor Externo", "Expediente Tributario", "Arqueo de Caja", "Conciliación Bancaria",
        "Relación del Último Cheque Expedido por cada una de las cuentas bancarias", "Relación Cheques Expedidos por entregar o Transferencias por Realizar a beneficiarios", "Relación de Cancelación de Cuentas Bancarias",
        "Relación padrones actualizados de usuarios y contribuyentes"];
        return view('annexes.main', compact('descriptions'));
    }

    public function getCreateAnnexedView(Request $request)
    {
        $annexedNumber = $request->segment(2);

        switch ($annexedNumber) {
            case 3:
                $years = ["2018", "2019", "2020", "2021", "2022"];
                return view('annexes.build', compact('annexedNumber', 'years'));
                break;
            case 4:
                $months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre"];
                $categories = array (
                    array(
                        "nombre" => "Programa Presupuestario",
                        "id" =>  "Presupuestario"
                    ),
                    array(
                        "nombre" => "Estados Financieros",
                        "id" =>  "Financiero"
                    ),
                    array(
                        "nombre" => "Cédula de Impuesto Predial y Derechos de Suministros de Agua",
                        "id" =>  "Impuesto"
                    ),
                    array(
                        "nombre" => "Cédula de Ajustes",
                        "id" =>  "Ajustes"
                    ),
                    array(
                        "nombre" => "Informe de Gobierno / Gestión",
                        "id" =>  "Informe"
                    ),
                    array(
                        "nombre" => "Copia Certificada de la Contratación del Auditor Externo",
                        "id" =>  "Copia"
                    ),
                    array(
                        "nombre" => "Formatos Trimestrales de la Ley de Disciplina Financiera",
                        "id" =>  "Formatos"
                    ),
                    array(
                        "nombre" => "Reportes de Obras y Acciones",
                        "id" =>  "Reportes"
                    )
                );
                return view('annexes.build', compact('annexedNumber', 'months', 'categories'));
                break;
            case 5:
                $months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $anios = ["2018", "2019", "2020", "2021"];
                $areas = array (
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de la Fuente de Financiamiento de Ingresos de Gestión",
                        "id" =>  "addTable_Content_1"
                    ),
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de los recursos Federales(Participaciones)",
                        "id" =>  "addTable_Content_2"
                    ),
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de los recursos Federales(Aportaciones) - Fortalecimiento de Municipios",
                        "id" =>  "addTable_Content_3"
                    ),
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de los recursos Federales(Aportaciones) - Infraestructura Social Municipal",
                        "id" =>  "addTable_Content_4"
                    ),
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de los recursos Federales(Convenios) - Desastres Naturales",
                        "id" =>  "addTable_Content_5"
                    ),
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de los recursos Federales(Convenios) - Fondo Concursable",
                        "id" =>  "addTable_Content_6"
                    ),
                    array(
                        "nombre" => "Documentación Justificativa y Comprobatoria de los recursos Federales(Convenios) - Otros Fondos",
                        "id" =>  "addTable_Content_7"
                    )
                );
                return view('annexes.build', compact('annexedNumber', 'months', 'areas', 'anios'));
                break;
            default:
                return view('annexes.build', compact('annexedNumber'));
                break;
        }

    }
}
