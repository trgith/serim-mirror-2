<?php

namespace App\Http\Controllers;

use App\Models\Dependency;
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
        //Se obtienen las areas en general que pertenezcan a esa dependencia
        $areas = Dependency::where('id', 2)->with('annexeds.areas')->get();

        //Se crean arrays vacios para contener los objetos
        $areasArrenged = [];
        $temp1;
        $temp2;

        //Se iteran las areas para obtener un concentrado sin repetir de todas las que corresponden a la dependencia
        for ($i = 0; $i < sizeof($areas[0]['annexeds']); $i++) {
            for ($j = 0; $j < sizeof($areas[0]['annexeds'][$i]['areas']); $j++) {
                $temp1['nombre'] = $areas[0]['annexeds'][$i]['areas'][$j]->area;
                $temp1['id'] = $areas[0]['annexeds'][$i]['areas'][$j]->id;
                $temp2[$areas[0]['annexeds'][$i]['areas'][$j]->id] = $temp1;
            }
        }
        return view('annexes.main', compact('temp2'));
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
