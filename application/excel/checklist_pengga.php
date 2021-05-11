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
foreach (range('A', 'Y') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}
$xl->getActiveSheet()->getColumnDimension('AB')
    ->setAutoSize(true);

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:AB1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Log Check List');

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
$xl->getActiveSheet()->setCellValue('C7', 'Jam');

$xl->getActiveSheet()->mergeCells('D7:H7');
$xl->getActiveSheet()->setCellValue('D7', 'PV Modul (DC)');
$xl->getActiveSheet()->setCellValue('D8', 'Volt');
$xl->getActiveSheet()->setCellValue('E8', 'CURR.');
$xl->getActiveSheet()->setCellValue('F8', 'POWER');
$xl->getActiveSheet()->setCellValue('G8', 'TODAY');
$xl->getActiveSheet()->setCellValue('H8', 'ACC.');
$xl->getActiveSheet()->setCellValue('D9', '(V)');
$xl->getActiveSheet()->setCellValue('E9', '(A)');
$xl->getActiveSheet()->setCellValue('F9', '(kW)');
$xl->getActiveSheet()->setCellValue('G9', '(kWh)');
$xl->getActiveSheet()->setCellValue('H9', '(kWh)');

$xl->getActiveSheet()->mergeCells('I7:I8');
$xl->getActiveSheet()->setCellValue('I7', 'IRRADIANS');
$xl->getActiveSheet()->setCellValue('I9', '(W/m)');

$xl->getActiveSheet()->mergeCells('J7:J8');
$xl->getActiveSheet()->setCellValue('J7', 'IRRADIATIONS');
$xl->getActiveSheet()->setCellValue('J9', '(kWh/m2)');

$xl->getActiveSheet()->mergeCells('K7:T7');
$xl->getActiveSheet()->setCellValue('K7', 'GRID (AC)');
$xl->getActiveSheet()->mergeCells('K8:M8');
$xl->getActiveSheet()->setCellValue('K8', 'Volt (V)');
$xl->getActiveSheet()->setCellValue('K9', 'R');
$xl->getActiveSheet()->setCellValue('L9', 'S');
$xl->getActiveSheet()->setCellValue('M9', 'T');
$xl->getActiveSheet()->mergeCells('N8:P8');
$xl->getActiveSheet()->setCellValue('N8', 'Current (A)');
$xl->getActiveSheet()->setCellValue('N9', 'R');
$xl->getActiveSheet()->setCellValue('O9', 'S');
$xl->getActiveSheet()->setCellValue('P9', 'T');
$xl->getActiveSheet()->mergeCells('Q8:S8');
$xl->getActiveSheet()->setCellValue('Q8', 'Power (kW)');
$xl->getActiveSheet()->setCellValue('Q9', 'R');
$xl->getActiveSheet()->setCellValue('R9', 'S');
$xl->getActiveSheet()->setCellValue('S9', 'T');
$xl->getActiveSheet()->setCellValue('T8', 'Freq');
$xl->getActiveSheet()->setCellValue('T9', 'Hz');

$xl->getActiveSheet()->mergeCells('U7:U9');
$xl->getActiveSheet()->setCellValue('U7', 'Gen Power (kW)');

$xl->getActiveSheet()->mergeCells('V7:X7');
$xl->getActiveSheet()->setCellValue('V7', 'Energy');
$xl->getActiveSheet()->setCellValue('V8', 'TODAY');
$xl->getActiveSheet()->setCellValue('W8', 'ACC.');
$xl->getActiveSheet()->setCellValue('X8', 'EB');
$xl->getActiveSheet()->setCellValue('V9', '(kWh)');
$xl->getActiveSheet()->setCellValue('W9', '(kWh)');
$xl->getActiveSheet()->setCellValue('X9', '(kWh)');

$xl->getActiveSheet()->mergeCells('Y7:Z7');
$xl->getActiveSheet()->setCellValue('Y7', 'Temp');
$xl->getActiveSheet()->mergeCells('Y8:Y9');
$xl->getActiveSheet()->setCellValue('Y8', 'PV');
$xl->getActiveSheet()->mergeCells('Z8:Z9');
$xl->getActiveSheet()->setCellValue('Z8', 'AMBIEN');

$xl->getActiveSheet()->mergeCells('AA7:AA9');
$xl->getActiveSheet()->setCellValue('AA7', 'KWH PS');

$xl->getActiveSheet()->mergeCells('AB7:AB9');
$xl->getActiveSheet()->setCellValue('AB7', 'KWH EKS. TOT');


// Loop data
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['pv_modul_volt']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['pv_modul_curr']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['pv_modul_power']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['pv_modul_today']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['pv_modul_acc']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['irradians']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['irradiations']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['grid_volt_r']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['grid_volt_s']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['grid_volt_t']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['grid_current_r']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['grid_current_s']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['grid_current_t']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['grid_power_r']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['grid_power_s']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['grid_power_t']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['grid_freq']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['gen_power']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['energy_today']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['energy_acc']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['energy_eb']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['temp_pv']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['temp_ambien']);
    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['kwh_ps']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['kwh_eks_tot']);

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
$xl->getActiveSheet()->getStyle('A1:AB1')->applyFromArray($styleArray);
unset($styleArray);

// Styling Header
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
$xl->getActiveSheet()->getStyle('A7:AB9')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A9:AB' . $line)->applyFromArray($styleArray);
unset($styleArray);
