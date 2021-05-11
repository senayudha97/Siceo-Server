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
foreach (range('A', 'Z') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:N1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong Perjaman Mesin Generator');

// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header
$xl->getActiveSheet()->mergeCells('A7:A8');
$xl->getActiveSheet()->setCellValue('A7', 'No');

$xl->getActiveSheet()->mergeCells('B7:B8');
$xl->getActiveSheet()->setCellValue('B7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C7:C8');
$xl->getActiveSheet()->setCellValue('C7', 'Waktu');

$xl->getActiveSheet()->mergeCells('D7:D8');
$xl->getActiveSheet()->setCellValue('D7', 'Volt');

$xl->getActiveSheet()->mergeCells('E7:E8');
$xl->getActiveSheet()->setCellValue('E7', 'Hz');

$xl->getActiveSheet()->mergeCells('F7:F8');
$xl->getActiveSheet()->setCellValue('F7', 'Cos');

$xl->getActiveSheet()->mergeCells('G7:G8');
$xl->getActiveSheet()->setCellValue('G7', 'MVAR');

$xl->getActiveSheet()->mergeCells('H7:H8');
$xl->getActiveSheet()->setCellValue('H7', 'Beban MW');

$xl->getActiveSheet()->mergeCells('I7:K7');
$xl->getActiveSheet()->setCellValue('I7', 'Arus(A)');

$xl->getActiveSheet()->setCellValue('I8', 'R');
$xl->getActiveSheet()->setCellValue('J8', 'S');
$xl->getActiveSheet()->setCellValue('K8', 'T');

$xl->getActiveSheet()->mergeCells('L7:M7');
$xl->getActiveSheet()->setCellValue('L7', 'Exiter');

$xl->getActiveSheet()->setCellValue('L8', 'A');
$xl->getActiveSheet()->setCellValue('M8', 'W');

$xl->getActiveSheet()->mergeCells('N7:S7');
$xl->getActiveSheet()->setCellValue('N7', 'Winding(c)');

$xl->getActiveSheet()->setCellValue('N8', '1');
$xl->getActiveSheet()->setCellValue('O8', '2');
$xl->getActiveSheet()->setCellValue('P8', '3');
$xl->getActiveSheet()->setCellValue('Q8', '4');
$xl->getActiveSheet()->setCellValue('R8', '5');
$xl->getActiveSheet()->setCellValue('S8', '6');

$xl->getActiveSheet()->mergeCells('T7:T8');
$xl->getActiveSheet()->setCellValue('T7', 'Bearing');

$xl->getActiveSheet()->mergeCells('U7:U8');
$xl->getActiveSheet()->setCellValue('U7', 'KWH Produksi');

$xl->getActiveSheet()->mergeCells('V7:V8');
$xl->getActiveSheet()->setCellValue('V7', 'KWH Alat Bantu');



// Loop data
$line = 9;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['tanggal_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['input_volt']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['input_hz']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['input_cos']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['input_mvar']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['input_bebanmw']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['input_arus_r']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['input_arus_s']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['input_arus_t']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['input_exiter_a']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['input_exiter_v']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['input_winding1']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['input_winding2']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['input_winding3']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['input_winding4']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['input_winding5']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['input_winding6']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['input_bearing']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['input_kwh_produksi']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['input_kwh_alat_bantu']);

    $line++;
}

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

$xl->getActiveSheet()->getStyle('A7:V8')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A9:V' . $line)->applyFromArray($styleArray);
unset($styleArray);
