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

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:Y1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Log Narmada Tengah Jaman');

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

$xl->getActiveSheet()->mergeCells('D7:D9');
$xl->getActiveSheet()->setCellValue('D7', 'Tekanan Penstok');

$xl->getActiveSheet()->mergeCells('E7:E9');
$xl->getActiveSheet()->setCellValue('E7', 'Gen Speed');

$xl->getActiveSheet()->mergeCells('F7:X7');
$xl->getActiveSheet()->setCellValue('F7', 'Panel Generator');
$xl->getActiveSheet()->mergeCells('F8:H8');
$xl->getActiveSheet()->setCellValue('F8', 'Voltage Generator');
$xl->getActiveSheet()->setCellValue('F9', 'RS');
$xl->getActiveSheet()->setCellValue('G9', 'ST');
$xl->getActiveSheet()->setCellValue('H9', 'RT');
$xl->getActiveSheet()->mergeCells('I8:K8');
$xl->getActiveSheet()->setCellValue('I8', 'Arus Generator');
$xl->getActiveSheet()->setCellValue('I9', 'R');
$xl->getActiveSheet()->setCellValue('J9', 'S');
$xl->getActiveSheet()->setCellValue('K9', 'T');
$xl->getActiveSheet()->mergeCells('L8:L9');
$xl->getActiveSheet()->setCellValue('L8', 'Beban');
$xl->getActiveSheet()->mergeCells('M8:M9');
$xl->getActiveSheet()->setCellValue('M8', 'Cos Phi');
$xl->getActiveSheet()->mergeCells('N8:N9');
$xl->getActiveSheet()->setCellValue('N8', 'Freq');
$xl->getActiveSheet()->mergeCells('O8:P8');
$xl->getActiveSheet()->setCellValue('O8', 'Excitation');
$xl->getActiveSheet()->setCellValue('O9', 'Volt');
$xl->getActiveSheet()->setCellValue('P9', 'Arus');
$xl->getActiveSheet()->mergeCells('Q8:R8');
$xl->getActiveSheet()->setCellValue('Q8', 'KWh Produksi');
$xl->getActiveSheet()->setCellValue('Q9', 'Exp. Analog');
$xl->getActiveSheet()->setCellValue('R9', 'Exp. EDMI');
$xl->getActiveSheet()->mergeCells('S8:T8');
$xl->getActiveSheet()->setCellValue('S8', 'KWh PS');
$xl->getActiveSheet()->setCellValue('S9', 'Export');
$xl->getActiveSheet()->setCellValue('T9', 'Import');
$xl->getActiveSheet()->mergeCells('U8:X8');
$xl->getActiveSheet()->setCellValue('U8', 'Temperature');
$xl->getActiveSheet()->setCellValue('U9', 'Bearing 1');
$xl->getActiveSheet()->setCellValue('V9', 'Bearing 2');
$xl->getActiveSheet()->setCellValue('W9', 'Bearing 3');
$xl->getActiveSheet()->setCellValue('X9', 'Bearing 4');

$xl->getActiveSheet()->mergeCells('Y7:Y9');
$xl->getActiveSheet()->setCellValue('Y7', 'Level Air');


// Loop data
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['tekanan_penstok']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['gen_speed']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['voltage_generator_rs']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['voltage_generator_st']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['voltage_generator_rt']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['arus_generator_r']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['arus_generator_s']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['arus_generator_t']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['beban']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['cos_phi']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['freq']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['excitation_volt']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['excitation_arus']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['exp_analog']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['exp_edmi']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['export']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['import']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['temperature_bearing_1']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['temperature_bearing_2']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['temperature_bearing_3']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['temperature_bearing_4']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['level_air']);

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
$xl->getActiveSheet()->getStyle('A1:Y1')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A7:Y9')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A9:Y' . $line)->applyFromArray($styleArray);
unset($styleArray);
