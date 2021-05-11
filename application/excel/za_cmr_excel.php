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

foreach (range('AA', 'AX') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:AX1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Ampenan ZA CMR');

// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header
$xl->getActiveSheet()->mergeCells('A7:A10');
$xl->getActiveSheet()->setCellValue('A7', 'No');

$xl->getActiveSheet()->mergeCells('B7:B10');
$xl->getActiveSheet()->setCellValue('B7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C7:C10');
$xl->getActiveSheet()->setCellValue('C7', 'Waktu');

$xl->getActiveSheet()->mergeCells('D7:J7');
$xl->getActiveSheet()->setCellValue('D7', 'Tekanan');
$xl->getActiveSheet()->mergeCells('D8:D10');
$xl->getActiveSheet()->setCellValue('D8', 'Udara Start');
$xl->getActiveSheet()->mergeCells('E8:E10');
$xl->getActiveSheet()->setCellValue('E8', 'Air Pendingin Mesin');
$xl->getActiveSheet()->mergeCells('F8:F10');
$xl->getActiveSheet()->setCellValue('F8', 'Air Pendingin Injector');
$xl->getActiveSheet()->mergeCells('G8:G10');
$xl->getActiveSheet()->setCellValue('G8', 'Raw Water');
$xl->getActiveSheet()->mergeCells('H8:H10');
$xl->getActiveSheet()->setCellValue('H8', 'Minyak Pelumas');
$xl->getActiveSheet()->mergeCells('I8:I10');
$xl->getActiveSheet()->setCellValue('I8', 'Bahan Bakar');
$xl->getActiveSheet()->mergeCells('J8:J10');
$xl->getActiveSheet()->setCellValue('J8', 'Udara Masuk');

$xl->getActiveSheet()->mergeCells('K7:Z7');
$xl->getActiveSheet()->setCellValue('K7', 'Temperatur ( ⁰C )');
$xl->getActiveSheet()->mergeCells('K8:Z8');
$xl->getActiveSheet()->setCellValue('K8', 'Gas Buang');

$xl->getActiveSheet()->mergeCells('K9:P9');
$xl->getActiveSheet()->setCellValue('K9', 'Keluar Silinder Sisi A');
$xl->getActiveSheet()->setCellValue('K10', '1');
$xl->getActiveSheet()->setCellValue('L10', '2');
$xl->getActiveSheet()->setCellValue('M10', '3');
$xl->getActiveSheet()->setCellValue('N10', '4');
$xl->getActiveSheet()->setCellValue('O10', '5');
$xl->getActiveSheet()->setCellValue('P10', '6');

$xl->getActiveSheet()->mergeCells('Q9:V9');
$xl->getActiveSheet()->setCellValue('Q9', 'Keluar Silinder Sisi B');
$xl->getActiveSheet()->setCellValue('Q10', '1');
$xl->getActiveSheet()->setCellValue('R10', '2');
$xl->getActiveSheet()->setCellValue('S10', '3');
$xl->getActiveSheet()->setCellValue('T10', '4');
$xl->getActiveSheet()->setCellValue('U10', '5');
$xl->getActiveSheet()->setCellValue('V10', '6');

$xl->getActiveSheet()->mergeCells('W9:X9');
$xl->getActiveSheet()->setCellValue('W9', 'Turbo A');
$xl->getActiveSheet()->setCellValue('W10', 'Masuk');
$xl->getActiveSheet()->setCellValue('X10', 'Keluar');

$xl->getActiveSheet()->mergeCells('Y9:Z9');
$xl->getActiveSheet()->setCellValue('Y9', 'Turbo B');
$xl->getActiveSheet()->setCellValue('Y10', 'Masuk');
$xl->getActiveSheet()->setCellValue('Z10', 'Keluar');

$xl->getActiveSheet()->mergeCells('AA7:AV7');
$xl->getActiveSheet()->setCellValue('AA7', 'Temperatur ( ⁰C )');
$xl->getActiveSheet()->mergeCells('AA8:AA10');
$xl->getActiveSheet()->setCellValue('AA8', 'Air Pendingin Mesin');
$xl->getActiveSheet()->mergeCells('AB8:AB10');
$xl->getActiveSheet()->setCellValue('AB8', 'Air Pendingin Injector');
$xl->getActiveSheet()->mergeCells('AC8:AC10');
$xl->getActiveSheet()->setCellValue('AC8', 'Minyak Pelumas');
$xl->getActiveSheet()->mergeCells('AD8:AD10');
$xl->getActiveSheet()->setCellValue('AD8', 'Bahan Bakar');
$xl->getActiveSheet()->mergeCells('AE8:AE10');
$xl->getActiveSheet()->setCellValue('AE8', 'Raw Water');
$xl->getActiveSheet()->mergeCells('AF8:AF10');
$xl->getActiveSheet()->setCellValue('AF8', 'Udara Masuk');
$xl->getActiveSheet()->mergeCells('AG8:AH8');
$xl->getActiveSheet()->setCellValue('AG8', 'Bearing Generator');
$xl->getActiveSheet()->mergeCells('AG9:AG10');
$xl->getActiveSheet()->setCellValue('AG9', '1');
$xl->getActiveSheet()->mergeCells('AH9:AH10');
$xl->getActiveSheet()->setCellValue('AH9', '2');
$xl->getActiveSheet()->mergeCells('AI8:AI10');
$xl->getActiveSheet()->setCellValue('AI8', 'Thrust Bearing');

$xl->getActiveSheet()->mergeCells('AJ8:AP8');
$xl->getActiveSheet()->setCellValue('AJ8', 'Main Bearing');
$xl->getActiveSheet()->mergeCells('AJ9:AJ10');
$xl->getActiveSheet()->setCellValue('AJ9', '1');
$xl->getActiveSheet()->mergeCells('AK9:AK10');
$xl->getActiveSheet()->setCellValue('AK9', '2');
$xl->getActiveSheet()->mergeCells('AL9:AL10');
$xl->getActiveSheet()->setCellValue('AL9', '3');
$xl->getActiveSheet()->mergeCells('AM9:AM10');
$xl->getActiveSheet()->setCellValue('AM9', '4');
$xl->getActiveSheet()->mergeCells('AN9:AN10');
$xl->getActiveSheet()->setCellValue('AN9', '5');
$xl->getActiveSheet()->mergeCells('AO9:AO10');
$xl->getActiveSheet()->setCellValue('AO9', '6');
$xl->getActiveSheet()->mergeCells('AP9:AP10');
$xl->getActiveSheet()->setCellValue('AP9', '7');

$xl->getActiveSheet()->mergeCells('AQ8:AV8');
$xl->getActiveSheet()->setCellValue('AQ8', 'Stator');
$xl->getActiveSheet()->mergeCells('AQ9:AQ10');
$xl->getActiveSheet()->setCellValue('AQ9', '1');
$xl->getActiveSheet()->mergeCells('AR9:AR10');
$xl->getActiveSheet()->setCellValue('AR9', '2');
$xl->getActiveSheet()->mergeCells('AS9:AS10');
$xl->getActiveSheet()->setCellValue('AS9', '3');
$xl->getActiveSheet()->mergeCells('AT9:AT10');
$xl->getActiveSheet()->setCellValue('AT9', '4');
$xl->getActiveSheet()->mergeCells('AU9:AU10');
$xl->getActiveSheet()->setCellValue('AU9', '5');
$xl->getActiveSheet()->mergeCells('AV9:AV10');
$xl->getActiveSheet()->setCellValue('AV9', '6');

$xl->getActiveSheet()->mergeCells('AW7:AX8');
$xl->getActiveSheet()->setCellValue('AW7', 'Putaran Turbo (RPM) x 100');
$xl->getActiveSheet()->mergeCells('AW9:AW10');
$xl->getActiveSheet()->setCellValue('AW9', 'A');
$xl->getActiveSheet()->mergeCells('AX9:AX10');
$xl->getActiveSheet()->setCellValue('AX9', 'B');


// Loop data
$line = 11;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['udara_start']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['air_pendingin_mesin']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['air_pendingin_injector']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['raw_water']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['minyak_pelumas']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['bahan_bakar']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['udara_masuk']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['gas_buang_keluar_silinder_sisi_a_1']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['gas_buang_keluar_silinder_sisi_a_2']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['gas_buang_keluar_silinder_sisi_a_3']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['gas_buang_keluar_silinder_sisi_a_4']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['gas_buang_keluar_silinder_sisi_a_5']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['gas_buang_keluar_silinder_sisi_a_6']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['gas_buang_keluar_silinder_sisi_b_1']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['gas_buang_keluar_silinder_sisi_b_2']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['gas_buang_keluar_silinder_sisi_b_3']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['gas_buang_keluar_silinder_sisi_b_4']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['gas_buang_keluar_silinder_sisi_b_5']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['gas_buang_keluar_silinder_sisi_b_6']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['turbo_a_masuk']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['turbo_a_keluar']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['turbo_b_masuk']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['turbo_b_keluar']);

    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['temperatur_air_pendingin_mesin']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['temperatur_air_pendingin_injector']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['temperatur_minyak_pelumas']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['temperatur_bahan_bakar']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['temperatur_raw_water']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['temperatur_udara_masuk']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['bearing_generator1']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['bearing_generator2']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['thrust_bearing']);
    $xl->getActiveSheet()->setCellValue('AJ' . $line, $row['main_bearing1']);
    $xl->getActiveSheet()->setCellValue('AK' . $line, $row['main_bearing2']);
    $xl->getActiveSheet()->setCellValue('AL' . $line, $row['main_bearing3']);
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['main_bearing4']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['main_bearing5']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['main_bearing6']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['main_bearing7']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['stator1']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['stator2']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['stator3']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['stator4']);
    $xl->getActiveSheet()->setCellValue('AU' . $line, $row['stator5']);
    $xl->getActiveSheet()->setCellValue('AV' . $line, $row['stator6']);
    $xl->getActiveSheet()->setCellValue('AW' . $line, $row['putaran_turbo_a']);
    $xl->getActiveSheet()->setCellValue('AX' . $line, $row['putaran_turbo_b']);


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
$xl->getActiveSheet()->getStyle('A1:AX1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:AX10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A11:AX' . $line)->applyFromArray($styleArray);
unset($styleArray);
