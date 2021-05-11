<?php
// Styling 
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);

// Auto Fit 
foreach (range('A', 'X') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

foreach (range('AA', 'AG') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:AG1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Ampenan Penyulang Ampenan');

// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header
$xl->getActiveSheet()->mergeCells('A7:A9');
$xl->getActiveSheet()->setCellValue('A7', 'No');

$xl->getActiveSheet()->mergeCells('B7:B9');
$xl->getActiveSheet()->setCellValue('B7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C7:C9');
$xl->getActiveSheet()->setCellValue('C7', 'Waktu');

$xl->getActiveSheet()->mergeCells('D7:E7');
$xl->getActiveSheet()->setCellValue('D7', 'LCC');
$xl->getActiveSheet()->mergeCells('D8:D9');
$xl->getActiveSheet()->setCellValue('D8', 'Analog');
$xl->getActiveSheet()->mergeCells('E8:E9');
$xl->getActiveSheet()->setCellValue('E8', 'Digital');

$xl->getActiveSheet()->mergeCells('F7:G7');
$xl->getActiveSheet()->setCellValue('F7', 'PS 9');
$xl->getActiveSheet()->mergeCells('F8:F9');
$xl->getActiveSheet()->setCellValue('F8', 'Analog');
$xl->getActiveSheet()->mergeCells('G8:G9');
$xl->getActiveSheet()->setCellValue('G8', 'Digital');

$xl->getActiveSheet()->mergeCells('H7:I7');
$xl->getActiveSheet()->setCellValue('H7', 'Praya');
$xl->getActiveSheet()->mergeCells('H8:H9');
$xl->getActiveSheet()->setCellValue('H8', 'Analog');
$xl->getActiveSheet()->mergeCells('I8:I9');
$xl->getActiveSheet()->setCellValue('I8', 'Digital');

$xl->getActiveSheet()->mergeCells('J7:K7');
$xl->getActiveSheet()->setCellValue('J7', 'Senggigi');
$xl->getActiveSheet()->mergeCells('J8:J9');
$xl->getActiveSheet()->setCellValue('J8', 'Analog');
$xl->getActiveSheet()->mergeCells('K8:K9');
$xl->getActiveSheet()->setCellValue('K8', 'Digital');

$xl->getActiveSheet()->mergeCells('L7:M7');
$xl->getActiveSheet()->setCellValue('L7', 'Kopang');
$xl->getActiveSheet()->mergeCells('L8:L9');
$xl->getActiveSheet()->setCellValue('L8', 'Analog');
$xl->getActiveSheet()->mergeCells('M8:M9');
$xl->getActiveSheet()->setCellValue('M8', 'Digital');

$xl->getActiveSheet()->mergeCells('N7:O7');
$xl->getActiveSheet()->setCellValue('N7', 'Gomong');
$xl->getActiveSheet()->mergeCells('N8:N9');
$xl->getActiveSheet()->setCellValue('N8', 'Analog');
$xl->getActiveSheet()->mergeCells('O8:O9');
$xl->getActiveSheet()->setCellValue('O8', 'Digital');

$xl->getActiveSheet()->mergeCells('P7:Q7');
$xl->getActiveSheet()->setCellValue('P7', 'Kediri');
$xl->getActiveSheet()->mergeCells('P8:P9');
$xl->getActiveSheet()->setCellValue('P8', 'Analog');
$xl->getActiveSheet()->mergeCells('Q8:Q9');
$xl->getActiveSheet()->setCellValue('Q8', 'Digital');

$xl->getActiveSheet()->mergeCells('R7:U7');
$xl->getActiveSheet()->setCellValue('R7', 'Kopel Taman A');
$xl->getActiveSheet()->mergeCells('R8:S8');
$xl->getActiveSheet()->setCellValue('R8', 'Analog');
$xl->getActiveSheet()->setCellValue('R9', 'Import');
$xl->getActiveSheet()->setCellValue('S9', 'Export');
$xl->getActiveSheet()->mergeCells('T8:U8');
$xl->getActiveSheet()->setCellValue('T8', 'Digital');
$xl->getActiveSheet()->setCellValue('T9', 'Import');
$xl->getActiveSheet()->setCellValue('U9', 'Export');

$xl->getActiveSheet()->mergeCells('V7:Y7');
$xl->getActiveSheet()->setCellValue('V7', 'Kopel Taman A');
$xl->getActiveSheet()->mergeCells('V8:Y8');
$xl->getActiveSheet()->setCellValue('V8', 'Analog');
$xl->getActiveSheet()->setCellValue('V9', 'Import');
$xl->getActiveSheet()->setCellValue('W9', 'Export');
$xl->getActiveSheet()->mergeCells('X8:Y8');
$xl->getActiveSheet()->setCellValue('X8', 'Digital');
$xl->getActiveSheet()->setCellValue('X9', 'Import');
$xl->getActiveSheet()->setCellValue('Y9', 'Export');

$xl->getActiveSheet()->mergeCells('Z7:AA7');
$xl->getActiveSheet()->setCellValue('Z7', 'Sewatama 1');
$xl->getActiveSheet()->mergeCells('Z8:Z9');
$xl->getActiveSheet()->setCellValue('Z8', 'Import');
$xl->getActiveSheet()->mergeCells('AA8:AA9');
$xl->getActiveSheet()->setCellValue('AA8', 'Export');

$xl->getActiveSheet()->mergeCells('AB7:AC7');
$xl->getActiveSheet()->setCellValue('AB7', 'Sewatama 2');
$xl->getActiveSheet()->mergeCells('AB8:AB9');
$xl->getActiveSheet()->setCellValue('AB8', 'Import');
$xl->getActiveSheet()->mergeCells('AC8:AC9');
$xl->getActiveSheet()->setCellValue('AC8', 'Export');

$xl->getActiveSheet()->mergeCells('AD7:AE7');
$xl->getActiveSheet()->setCellValue('AD7', 'Kopel GI 1');
$xl->getActiveSheet()->mergeCells('AD8:AD9');
$xl->getActiveSheet()->setCellValue('AD8', 'Import');
$xl->getActiveSheet()->mergeCells('AE8:AE9');
$xl->getActiveSheet()->setCellValue('AE8', 'Export');

$xl->getActiveSheet()->mergeCells('AF7:AG7');
$xl->getActiveSheet()->setCellValue('AF7', 'Kopel GI 2');
$xl->getActiveSheet()->mergeCells('AF8:AF9');
$xl->getActiveSheet()->setCellValue('AF8', 'Import');
$xl->getActiveSheet()->mergeCells('AG8:AG9');
$xl->getActiveSheet()->setCellValue('AG8', 'Export');


// Loop data
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['lcc_analog']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['lcc_digital']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['ps9_analog']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['ps9_digital']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['praya_analog']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['praya_digital']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['senggigi_analog']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['senggigi_digital']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['kopang_analog']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['kopang_digital']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['gomong_analog']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['gomong_digital']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['kediri_analog']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['kediri_digital']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['kopel_taman_a_analog_import']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['kopel_taman_a_analog_export']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['kopel_taman_a_digital_import']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['kopel_taman_a_digital_export']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['kopel_ampenan_biau_analog_import']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['kopel_ampenan_biau_analog_export']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['kopel_ampenan_biau_digital_import']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['kopel_ampenan_biau_digital_export']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['sewatama1_import']);

    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['sewatama1_export']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['sewatama2_import']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['sewatama2_export']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['kopel_gi1_import']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['kopel_gi2_export']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['kopel_gi2_import']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['kopel_gi2_export']);


    $line++;
}

// Styling Title
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THICK
        )
    ),
    'font'  => array(
        'bold'  => true,
        'size'  => 14,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
);
$xl->getActiveSheet()->getStyle('A1:AG1')->applyFromArray($styleArray);
unset($styleArray);

// // Styling Header
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    ),
    'font'  => array(
        'bold'  => true,
        'size'  => 11,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => '00bfff')
    )
);

$xl->getActiveSheet()->getStyle('A7:AG9')->applyFromArray($styleArray);
unset($styleArray);

// Style Row Value
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    ),
);
$line -= 1;
$xl->getActiveSheet()->getStyle('A10:AG' . $line)->applyFromArray($styleArray);
unset($styleArray);
