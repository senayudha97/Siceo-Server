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
foreach (range('A', 'P') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:P1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong Separator MFO');

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

$xl->getActiveSheet()->mergeCells('D7:G7');
$xl->getActiveSheet()->setCellValue('D7', 'Separator 1');
$xl->getActiveSheet()->mergeCells('D8:D9');
$xl->getActiveSheet()->setCellValue('D8', 'Pressure Produksi MFO (Bar)');
$xl->getActiveSheet()->mergeCells('E8:E9');
$xl->getActiveSheet()->setCellValue('E8', 'Flow Rate Produksi MFO (kL/h)');
$xl->getActiveSheet()->mergeCells('F8:G8');
$xl->getActiveSheet()->setCellValue('F8', 'Temperature');
$xl->getActiveSheet()->setCellValue('F9', 'Produksi MFO');
$xl->getActiveSheet()->setCellValue('G9', 'Inlet Thermal Oil');

$xl->getActiveSheet()->mergeCells('H7:K7');
$xl->getActiveSheet()->setCellValue('H7', 'Separator 2');
$xl->getActiveSheet()->mergeCells('H8:H9');
$xl->getActiveSheet()->setCellValue('H8', 'Pressure Produksi MFO (Bar)');
$xl->getActiveSheet()->mergeCells('I8:I9');
$xl->getActiveSheet()->setCellValue('I8', 'Flow Rate Produksi MFO (kL/h)');
$xl->getActiveSheet()->mergeCells('J8:K8');
$xl->getActiveSheet()->setCellValue('J8', 'Temperature');
$xl->getActiveSheet()->setCellValue('J9', 'Produksi MFO');
$xl->getActiveSheet()->setCellValue('K9', 'Inlet Thermal Oil');

$xl->getActiveSheet()->mergeCells('L7:M7');
$xl->getActiveSheet()->setCellValue('L7', 'Tangki 250 kL');
$xl->getActiveSheet()->mergeCells('L8:L9');
$xl->getActiveSheet()->setCellValue('L8', 'Level (kL)');
$xl->getActiveSheet()->mergeCells('M8:M9');
$xl->getActiveSheet()->setCellValue('M8', 'Temp');

$xl->getActiveSheet()->mergeCells('N7:O7');
$xl->getActiveSheet()->setCellValue('N7', 'Tangki 60 kL');
$xl->getActiveSheet()->mergeCells('N8:N9');
$xl->getActiveSheet()->setCellValue('N8', 'Level (kL)');
$xl->getActiveSheet()->mergeCells('O8:O9');
$xl->getActiveSheet()->setCellValue('O8', 'Temp');

$xl->getActiveSheet()->mergeCells('P7:P9');
$xl->getActiveSheet()->setCellValue('P7', 'Pressure Water Supply (Bar)');


// Loop data
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['tanggal_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['separator1_pressure_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['separator1_flow_rate_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['separator1_temperature_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['separator1_temperature_inlet_thermal_oil']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['separator2_pressure_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['separator2_flow_rate_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['separator2_temperature_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['separator2_temperature_inlet_thermal_oil']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['tangki250_level']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['tangki250_temp']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['tangki60_level']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['tangki60_temp']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['pressure_water_supply']);



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
$xl->getActiveSheet()->getStyle('A1:P1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:P9')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:P' . $line)->applyFromArray($styleArray);
unset($styleArray);
