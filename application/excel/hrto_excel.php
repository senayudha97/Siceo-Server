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
foreach (range('A', 'V') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:Y1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong HRTO');

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

$xl->getActiveSheet()->mergeCells('D7:N7');
$xl->getActiveSheet()->setCellValue('D7', 'Temperature');
$xl->getActiveSheet()->mergeCells('D8:E8');
$xl->getActiveSheet()->setCellValue('D8', 'Thermal Oil HRTO 1');
$xl->getActiveSheet()->setCellValue('D9', 'In');
$xl->getActiveSheet()->setCellValue('E9', 'Out');
$xl->getActiveSheet()->mergeCells('F8:G8');
$xl->getActiveSheet()->setCellValue('F8', 'Thermal Oil HRTO 2');
$xl->getActiveSheet()->setCellValue('F9', 'In');
$xl->getActiveSheet()->setCellValue('G9', 'Out');
$xl->getActiveSheet()->mergeCells('H8:K8');
$xl->getActiveSheet()->setCellValue('H8', 'Gas Inlet HRTO Unit');
$xl->getActiveSheet()->setCellValue('H9', '#2');
$xl->getActiveSheet()->setCellValue('I9', '#3');
$xl->getActiveSheet()->setCellValue('J9', '#4');
$xl->getActiveSheet()->setCellValue('K9', '#5');
$xl->getActiveSheet()->mergeCells('L8:M8');
$xl->getActiveSheet()->setCellValue('L8', 'Circulation Thermal Oil');
$xl->getActiveSheet()->setCellValue('L9', 'HRTO 1');
$xl->getActiveSheet()->setCellValue('M9', 'HRTO 2');
$xl->getActiveSheet()->mergeCells('N8:N9');
$xl->getActiveSheet()->setCellValue('N8', 'Outlet HE');

$xl->getActiveSheet()->mergeCells('E7:F7');
$xl->getActiveSheet()->setCellValue('E7', 'Flow Meter');
$xl->getActiveSheet()->setCellValue('E8', 'HSD');
$xl->getActiveSheet()->setCellValue('F8', 'MFO');

$xl->getActiveSheet()->mergeCells('O7:Q7');
$xl->getActiveSheet()->setCellValue('O7', 'Pressure (Bar)');
$xl->getActiveSheet()->mergeCells('O8:O9');
$xl->getActiveSheet()->setCellValue('O8', 'Outlet HE');
$xl->getActiveSheet()->mergeCells('P8:Q8');
$xl->getActiveSheet()->setCellValue('P8', 'Outlet Circulation Thermal Oil');
$xl->getActiveSheet()->setCellValue('P9', 'HRTO 1');
$xl->getActiveSheet()->setCellValue('Q9', 'HRTO 2');

$xl->getActiveSheet()->mergeCells('R7:R9');
$xl->getActiveSheet()->setCellValue('R7', 'Pompa Sirkulasi Nomor');

$xl->getActiveSheet()->mergeCells('S7:V7');
$xl->getActiveSheet()->setCellValue('S7', 'Damper (derajat)');
$xl->getActiveSheet()->mergeCells('S8:S9');
$xl->getActiveSheet()->setCellValue('S8', '#2');
$xl->getActiveSheet()->mergeCells('T8:T9');
$xl->getActiveSheet()->setCellValue('T8', '#3');
$xl->getActiveSheet()->mergeCells('U8:U9');
$xl->getActiveSheet()->setCellValue('U8', '#4');
$xl->getActiveSheet()->mergeCells('V8:V9');
$xl->getActiveSheet()->setCellValue('V8', '#5');


// Loop data
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['tanggal_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['thermal_hrto1_in']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['thermal_hrto1_out']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['thermal_hrto2_in']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['thermal_hrto2_out']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['gas_inlet_hrto2']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['gas_inlet_hrto3']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['gas_inlet_hrto4']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['gas_inlet_hrto5']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['circulation_thermal_hrto1']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['circulation_thermal_hrto2']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['temperature_outlet_he']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['pressure_outlet_he']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['outlet_circulation_hrto1']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['outlet_circulation_hrto2']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['pompa_sirkulasi_nomor']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['damper2']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['damper3']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['damper4']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['damper5']);


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
$xl->getActiveSheet()->getStyle('A1:V1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:V9')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:V' . $line)->applyFromArray($styleArray);
unset($styleArray);
