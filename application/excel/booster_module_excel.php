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
$xl->getActiveSheet()->mergeCells('A1:Y1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong Booster Module');

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
$xl->getActiveSheet()->setCellValue('D7', 'Beban');

$xl->getActiveSheet()->mergeCells('E7:F7');
$xl->getActiveSheet()->setCellValue('E7', 'Flow Meter');
$xl->getActiveSheet()->setCellValue('E8', 'HSD');
$xl->getActiveSheet()->setCellValue('F8', 'MFO');

$xl->getActiveSheet()->mergeCells('G7:H7');
$xl->getActiveSheet()->setCellValue('G7', 'KWH Produksi');
$xl->getActiveSheet()->setCellValue('G8', 'HSD');
$xl->getActiveSheet()->setCellValue('H8', 'MFO');

$xl->getActiveSheet()->mergeCells('I7:O7');
$xl->getActiveSheet()->setCellValue('I7', 'Pressure (Bar)');
$xl->getActiveSheet()->setCellValue('I8', 'Inlet Module');
$xl->getActiveSheet()->setCellValue('J8', 'Discharge BP');
$xl->getActiveSheet()->setCellValue('K8', 'Suction BP');
$xl->getActiveSheet()->setCellValue('L8', 'Mixing Tank');
$xl->getActiveSheet()->setCellValue('M8', 'F.O Outlet');
$xl->getActiveSheet()->setCellValue('N8', 'In to Engine');
$xl->getActiveSheet()->setCellValue('O8', 'Air Control');

$xl->getActiveSheet()->mergeCells('P7:W7');
$xl->getActiveSheet()->setCellValue('P7', 'Temperature');
$xl->getActiveSheet()->setCellValue('P8', 'Inlet Flow 1');
$xl->getActiveSheet()->setCellValue('Q8', 'Inlet Flow 2');
$xl->getActiveSheet()->setCellValue('R8', 'Mixing Tank');
$xl->getActiveSheet()->setCellValue('S8', 'Inlet Heater');
$xl->getActiveSheet()->setCellValue('T8', 'Outlet Heater');
$xl->getActiveSheet()->setCellValue('U8', 'Vixcosensor');
$xl->getActiveSheet()->setCellValue('V8', 'Return Line');
$xl->getActiveSheet()->setCellValue('W8', 'Fuel Oil');

$xl->getActiveSheet()->mergeCells('X7:X8');
$xl->getActiveSheet()->setCellValue('X7', 'Viscositas');


// Loop data
$line = 9;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['tanggal_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['beban']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['flow_meter_hsd']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['flow_meter_mfo']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['kwh_produksi_hsd']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['kwh_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['inlet_module']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['discharge_bp']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['suction_bp']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['mixing_tank12']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['fo_outlet']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['in_to_engine']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['air_control']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['inlet_flow1']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['inlet_flow2']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['mixing_tank9']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['inlet_heater']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['outlet_heater']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['viscosensor']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['return_line']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['fuel_oil']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['viscositas']);

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
$xl->getActiveSheet()->getStyle('A1:X1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:X8')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A9:X' . $line)->applyFromArray($styleArray);
unset($styleArray);
