<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\IReader;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class AnnexedController extends Controller
{
    /**
     *
     * @param request Json construido que contiene las variables a inserta r dentro del excel
     *
     */
    public function index(Request $request)
    {
        /**
        * TODO Se recuperan los métodos a ciclar y el contenido del JSON
        **/
        $jsonComplete0 = $request->all();

        $jsonComplete = $jsonComplete0['jsonComplete'];
        //$jsonComplete = $jsonComplete0;

        $methods = $jsonComplete['methods'];
        $content = $jsonComplete['content'];

        /**
        * TODO Variables auxiliares
        **/
        $annexedFile = null;
        $rowFinal = null;


        /**
        * TODO Se ciclan los metodos relacionados con la construcción de ese anexo
        **/

        for($i = 0; $i < sizeof($methods); $i++){

            $methodActual = $methods[$i];
            switch ($methodActual) {
                case 'addFormat':
                    $annexed = $jsonComplete['file'];
                    $annexedFile = $this->$methodActual($annexed);
                    break;
                case 'addTable':
                    $data = $content['addTable_Contents'];
                    $beginRow = $content['beginRow'];
                    $columns = $content['addTable_Columns'];
                    $sheet = $annexedFile->getActiveSheet();
                    $insertNewRows = $content['insertNewRows'];
                    $mergeCells = null;
                    if($content['mergeCells']){
                        $mergeCells = $content['mergeCells'];
                    }
                    $rowFinal = $this->$methodActual($data, $beginRow, $columns, $sheet, $mergeCells, $insertNewRows);
                    break;
                case 'addTablesInPages':
                    $sheetsToProcess = $content['sheetsToProcess'];
                    $data = $content['addTable_Contents'];
                    $beginRow = $content['beginRow'];
                    $columns = $content['addTable_Columns'];
                    $insertNewRows = $content['insertNewRows'];
                    $mergeCells = null;
                    if($content['mergeCells']){
                        $mergeCells = $content['mergeCells'];
                    }
                    $rowFinal = $this->$methodActual($data, $beginRow, $columns, $annexedFile, $mergeCells, $insertNewRows, $sheetsToProcess);
                    break;
                case 'addNewTable':
                    $data = $content['addNewTable_Content'];
                    $beginRow = $rowFinal;
                    $columns = $content['addNewTable_Columns'];
                    $headers = $content['addNewTable_Headers'];
                    $titleTable =  null;
                    $sheet = $annexedFile->getActiveSheet();
                    if($content['addNewTable_Title']){
                        $titleTable = $content['addNewTable_Title'];
                    }
                    $rowFinal = $this->$methodActual($data, $beginRow, $columns, $sheet, $headers, $titleTable);
                    break;
                case 'addDrawing':
                    $sheet = $annexedFile->getActiveSheet();
                    $image = $jsonComplete['image'];
                    $name = $image["name"];
                    $path = $image["path"];
                    $height = $image["height"];
                    $this->$methodActual($sheet, $name, $path, $height);
                    break;
                case 'addSigns':
                    $sheet2 = $annexedFile->getActiveSheet();
                    $this->$methodActual($rowFinal, $sheet2);
                    break;
                case 'addFormatToRows':
                    $sheet = $annexedFile->getActiveSheet();
                    $rowsRange = $content['rowsRange'];
                    $this->$methodActual($rowsRange, $sheet);
                    break;
                case 'saveFile':
                    $nameFile = $jsonComplete['nameFile'];
                    $this->$methodActual($annexedFile, $nameFile);
                    break;
                default:
                    //$this->$methodActual();
                    echo "algo salio massssssssssssssssssssl xd";
                    break;
            }
        }
    }



    /**
    * ! Esta función manda el nombre del anexo y retorna el archivo xlsx,
    * @param annexed Es el nombre del anexo que se va a crear.
    * @return  annexedFile Es el anexo como tal.
    **/
    public function addFormat($annexed){
        $fileFormat = IOFactory::createReader('Xlsx');
        $annexedName = public_path($annexed);
        $annexedFile = $fileFormat->load($annexedName);
        return $annexedFile;
    }

    /**
    * ! Esta función aplica el
    * @param rowsRange Es el rango de filas que se les dará estilo
    **/
    public function addFormatToRows($rowsRange, $sheet){

        $headerStyle = [
            'font' => [
                'bold' => true,
                'size' => 8
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrapText' => true
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'BFBFBF',
                ],
                'endColor' => [
                    'argb' => 'BFBFBF',
                ],
            ],
        ];

        for($i = 0; $i < sizeof($rowsRange); $i++){
            $sheet->getStyle($rowsRange[$i])->applyFromArray($headerStyle);
        }
    }



    /**
    * ! Esta función agrega el área de firmas
    * @param beginRow Es la fila desde donde comenzará a iterar la tabla
    **/
    public function addSigns($beginRow, $sheet){
        $sheet->setCellValue('A23', 'Nombre y Firma');
    }

    /**
    * ! Esta función guarda el documento, configura cabezeros y demas opciones
    * @param annexed Es el nombre del anexo que se va a crear.
    * @return  annexedFile Es el anexo como tal.
    **/
    public function saveFile($annexedFile, $nameFile){
        // Crea la instancia de Write para descargar el archivo
        $writer = new Xlsx($annexedFile);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($nameFile).'"');
        $writer->save('php://output');

        //Se guarda en BD
    }


    /**
    * ! Esta función construye una tabla en el documento, toma como referencia una fila
    * @param data Son los datos Iterar dentro de la tabla
    * @param beginRow Es laf fila desde donde comenzará a iterar la tabla
    * @param columns Son las columnas involucradas en la iteración de la tabla
    * @param sheet Es el anexo como tal.
    * @return rowFinal Es la ultima fila donde se insertó
    **/
    public function addTable($data, $beginRow, $columns, $sheet, $mergeCells, $insertNewRows){
        /**
        * TODO Estilos
        **/
        $contentStyle = [
            'font' => [
                'bold' => false,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrapText' => true
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
            'fill' => [
                'Color' => [
                    'argb' => 'FFA0A0A0',
                ]
            ],
        ];

        /**
        * TODO Ciclo global que itera todos los cuerpos de tabla que se envían
        **/
        for($con = 0; $con < sizeof($data); $con++){
            /**
            * TODO Se añaden las filas necesarias si se trata de una tabla infinita, de lo contrario se salta este paso
            **/
            if($insertNewRows){
                $sheet->insertNewRowBefore(($beginRow + 1), sizeof($data));
            }

            /**
            * TODO Ciclo que inserta las filas necesarias
            **/
            $beginRowOriginal = $beginRow;
            $rowFinal = 0;
            for($countColumns = 0; $countColumns < sizeof($columns); $countColumns++){
                for($i = 0; $i < sizeof($data['addTable_Content_'.($con + 1)]); $i++){
                    if($data['addTable_Content_'.($con + 1)]['Fila_'.($i + 1)][$countColumns]){
                        $sheet->setCellValue($columns[$countColumns].$beginRow, $data['addTable_Content_'.($con + 1)]['Fila_'.($i + 1)][$countColumns]);
                        $sheet->getStyle($columns[$countColumns].$beginRow)->applyFromArray($contentStyle);
                    }
                    $beginRow++;
                }
                $rowFinal = $beginRow;
                $beginRow = $beginRowOriginal;
            }
        }

        return ($rowFinal + 1);
    }



    /**
    * ! Esta función construye una tabla en el documento, toma como referencia una fila
    * @param data Son los datos Iterar dentro de la tabla
    * @param beginRow Es laf fila desde donde comenzará a iterar la tabla
    * @param columns Son las columnas involucradas en la iteración de la tabla
    * @param sheet Es el anexo como tal.
    * @param sheetsToProcess Es un array de las paginas a iterar
    * @return rowFinal Es la ultima fila donde se insertó
    **/
    public function addTablesInPages($data, $beginRow, $columns, $annexedFileMethod, $mergeCells, $insertNewRows, $sheetsToProcess){
        for($numSheet = 0; $numSheet < sizeof($sheetsToProcess); $numSheet++){
            $sheet = $annexedFileMethod->getSheet($numSheet);
            /**
            * TODO Estilos
            **/
            $contentStyle = [
                'font' => [
                    'bold' => false,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    'wrapText' => true
                ],
                'borders' => [
                    'top' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                    'bottom' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                    'left' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                    'right' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ]
                ],
                'fill' => [
                    'Color' => [
                        'argb' => 'FFA0A0A0',
                    ]
                ],
            ];

            /**
            * TODO Ciclo global que itera todos los cuerpos de tabla que se envían
            **/
            for($con = 0; $con < sizeof($data); $con++){
                /**
                * TODO Ciclo que inserta las filas necesarias
                **/
                $beginRowOriginal = $beginRow;
                $rowFinal = 0;
                for($countColumns = 0; $countColumns < sizeof($columns); $countColumns++){
                    for($i = 0; $i < sizeof($data['addTable_Content_'.($con + 1)]); $i++){
                        if($data['addTable_Content_'.($i + 1)]['Fila_'.($i + 1)][$countColumns]){
                            //$sheet->setCellValue($columns[$countColumns].$beginRow, $data['addTable_Content_'.($con + 1)]['Fila_'.($i + 1)][$countColumns]);
                            $sheet->setCellValue($columns[$countColumns].$beginRow, "Test");
                            $sheet->getStyle($columns[$countColumns].$beginRow)->applyFromArray($contentStyle);
                        }
                        $beginRow++;
                    }
                    $rowFinal = $beginRow;
                    $beginRow = $beginRowOriginal;
                }
            }
        }
    }



    /**
    * ! Esta función construye una tabla en el documento, toma como referencia una fila
    * @param data Son los datos Iterar dentro de la tabla
    * @param beginRow Es laf fila desde donde comenzará a iterar la tabla
    * @param columns Son las columnas involucradas en la iteración de la tabla
    * @param sheet Es el anexo como tal.
    * @param headers El texto que tendrán los cabezeros.
    **/
    public function addNewTable($data, $beginRow, $columns, $sheet, $headers, $titleTable){
        /**
        * TODO Se añaden las filas necesarias
        **/
        $sheet->insertNewRowBefore($beginRow, (sizeof($data) + 1));

        /**
        * TODO Estilos
        **/
        $headerStyle = [
            'font' => [
                'bold' => true,
                'size' => 8
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrapText' => true
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'BFBFBF',
                ],
                'endColor' => [
                    'argb' => 'BFBFBF',
                ],
            ],
        ];

        $contentStyle = [
            'font' => [
                'bold' => false,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
            'fill' => [
                'Color' => [
                    'argb' => 'FFA0A0A0',
                ]
            ],
        ];

        $titleTableStyle = [
            'font' => [
                'bold' => true,
                'size' => 12
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            ],
        ];

        /**
        * TODO Se añade el titulo de la tabla
        */
        $sheet->insertNewRowBefore($beginRow, 1);
        $sheet->setCellValue($columns[0].($beginRow), $titleTable["title"]);
        $sheet->getStyle($columns[0].($beginRow))->applyFromArray($titleTableStyle);


        /**
        * TODO Se añaden los cabezeros
        **/
        $firstCell = null;
        $lastCell = null;
        $beginRowOriginal = $beginRow;
        $rowFinal = 0;
        $firstCell = $columns[0].$beginRow;
        for($countColumns = 0; $countColumns < sizeof($columns); $countColumns++){
            $sheet->setCellValue($columns[$countColumns].($beginRow + 1), $headers[$countColumns]);
            $sheet->getStyle($columns[$countColumns].($beginRow + 1))->applyFromArray($headerStyle);
            $sheet->getDefaultRowDimension()->setRowHeight(15);
            $rowFinal = $beginRow;
            $beginRow = $beginRowOriginal;
        }
        $lastCell = $columns[($countColumns - 1)].$beginRow;


        /**
        * TODO Ciclo que inserta las filas necesarias
        **/
        $beginRow++;
        $beginRowOriginal = $beginRow;
        $rowFinal = 0;
        $lastRow = 0;
        for($countColumns = 0; $countColumns < sizeof($columns); $countColumns++){
            for($i = 0; $i < sizeof($data); $i++){
                $sheet->setCellValue($columns[$countColumns].($beginRow + 1), $data['Fila_'.($i + 1)][$countColumns]);
                $sheet->getStyle($columns[$countColumns].($beginRow + 1))->applyFromArray($contentStyle);
                $beginRow++;
            }
            $lastRow = $beginRow;
            $beginRow = $beginRowOriginal;
        }

        return ($lastRow + 1);

    }



    /**
    * ! Esta función inserta una imagen en la hoja de cálculo
    * @param sheet Es el anexo como tal.
    * @param name Nombre que llevará el anexo
    * @param path Ruta de la imagen a insertar, incluido nombre y extensión
    * @param height Altura de la imagen
    **/
    public function addDrawing($sheet, $name, $path, $height){
        $drawing = new Drawing();
        $drawing->setPath(public_path($path));
        $drawing->setHeight(100);
        $drawing->setCoordinates('B1');
        //$drawing->setWorksheet($sheet);
    }
}
