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

foreach (range('AA', 'AZ') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

foreach (range('BA', 'BI') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:BI1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Ampenan Pielstick Engine');

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

$xl->getActiveSheet()->mergeCells('D7:AT7');
$xl->getActiveSheet()->setCellValue('D7', 'Suhu');

$xl->getActiveSheet()->mergeCells('D8:E9');
$xl->getActiveSheet()->setCellValue('D8', 'Udara Masuk');
$xl->getActiveSheet()->setCellValue('D10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('E10', 'Sisi B');

$xl->getActiveSheet()->mergeCells('F8:G9');
$xl->getActiveSheet()->setCellValue('F8', 'Minyak Pelumas');
$xl->getActiveSheet()->setCellValue('F10', 'Masuk');
$xl->getActiveSheet()->setCellValue('G10', 'Keluar');

$xl->getActiveSheet()->mergeCells('H8:AA8');
$xl->getActiveSheet()->setCellValue('H8', 'Air Pendingin');
$xl->getActiveSheet()->mergeCells('H9:H10');
$xl->getActiveSheet()->setCellValue('H9', 'Masuk Mesin');
$xl->getActiveSheet()->mergeCells('I9:I10');
$xl->getActiveSheet()->setCellValue('I9', 'Keluar Mesin');
$xl->getActiveSheet()->mergeCells('J9:K9');
$xl->getActiveSheet()->setCellValue('J9', 'Masuk Cooler');
$xl->getActiveSheet()->setCellValue('J10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('K10', 'Sisi B');
$xl->getActiveSheet()->mergeCells('L9:M9');
$xl->getActiveSheet()->setCellValue('L9', 'Keluar Cooler');
$xl->getActiveSheet()->setCellValue('L10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('M10', 'Sisi B');
$xl->getActiveSheet()->mergeCells('N9:O9');
$xl->getActiveSheet()->setCellValue('N9', 'Injector');
$xl->getActiveSheet()->setCellValue('N10', 'Masuk');
$xl->getActiveSheet()->setCellValue('O10', 'Keluar');
$xl->getActiveSheet()->mergeCells('P9:U9');
$xl->getActiveSheet()->setCellValue('P9', 'Keluar Silinder A');
$xl->getActiveSheet()->setCellValue('P10', '1');
$xl->getActiveSheet()->setCellValue('Q10', '2');
$xl->getActiveSheet()->setCellValue('R10', '3');
$xl->getActiveSheet()->setCellValue('S10', '4');
$xl->getActiveSheet()->setCellValue('T10', '5');
$xl->getActiveSheet()->setCellValue('U10', '6');
$xl->getActiveSheet()->mergeCells('V9:AA9');
$xl->getActiveSheet()->setCellValue('V9', 'Keluar Silinder B');
$xl->getActiveSheet()->setCellValue('V10', '1');
$xl->getActiveSheet()->setCellValue('W10', '2');
$xl->getActiveSheet()->setCellValue('X10', '3');
$xl->getActiveSheet()->setCellValue('Y10', '4');
$xl->getActiveSheet()->setCellValue('Z10', '5');
$xl->getActiveSheet()->setCellValue('AA10', '6');

$xl->getActiveSheet()->mergeCells('AB8:AM8');
$xl->getActiveSheet()->setCellValue('AB8', 'Gas Buang');
$xl->getActiveSheet()->mergeCells('AB9:AG9');
$xl->getActiveSheet()->setCellValue('AB9', 'Keluar Silinder A');
$xl->getActiveSheet()->setCellValue('AB10', '1');
$xl->getActiveSheet()->setCellValue('AC10', '2');
$xl->getActiveSheet()->setCellValue('AD10', '3');
$xl->getActiveSheet()->setCellValue('AE10', '4');
$xl->getActiveSheet()->setCellValue('AF10', '5');
$xl->getActiveSheet()->setCellValue('AG10', '6');
$xl->getActiveSheet()->mergeCells('AH9:AM9');
$xl->getActiveSheet()->setCellValue('AH9', 'Keluar Silinder B');
$xl->getActiveSheet()->setCellValue('AH10', '1');
$xl->getActiveSheet()->setCellValue('AI10', '2');
$xl->getActiveSheet()->setCellValue('AJ10', '3');
$xl->getActiveSheet()->setCellValue('AK10', '4');
$xl->getActiveSheet()->setCellValue('AL10', '5');
$xl->getActiveSheet()->setCellValue('AM10', '6');

$xl->getActiveSheet()->mergeCells('AN8:AT9');
$xl->getActiveSheet()->setCellValue('AN8', 'Main Bearing');
$xl->getActiveSheet()->setCellValue('AN10', '1');
$xl->getActiveSheet()->setCellValue('AO10', '2');
$xl->getActiveSheet()->setCellValue('AP10', '3');
$xl->getActiveSheet()->setCellValue('AQ10', '4');
$xl->getActiveSheet()->setCellValue('AR10', '5');
$xl->getActiveSheet()->setCellValue('AS10', '6');
$xl->getActiveSheet()->setCellValue('AT10', '7');

$xl->getActiveSheet()->mergeCells('AU7:AU10');
$xl->getActiveSheet()->setCellValue('AU7', 'Suhu Ruangan (°C)');
$xl->getActiveSheet()->mergeCells('AV7:AV10');
$xl->getActiveSheet()->setCellValue('AV7', 'Rack Bahan Bakar');
$xl->getActiveSheet()->mergeCells('AW7:AW10');
$xl->getActiveSheet()->setCellValue('AW7', 'Governor Load Limit');

$xl->getActiveSheet()->mergeCells('AX7:BG7');
$xl->getActiveSheet()->setCellValue('AX7', 'Tekanan (Kg / Cm2 )');
$xl->getActiveSheet()->mergeCells('AX8:AY9');
$xl->getActiveSheet()->setCellValue('AX8', 'Minyak Pelumas');
$xl->getActiveSheet()->setCellValue('AX10', 'Masuk');
$xl->getActiveSheet()->setCellValue('AY10', 'Keluar');
$xl->getActiveSheet()->mergeCells('AZ8:BA9');
$xl->getActiveSheet()->setCellValue('AZ8', 'Udara Masuk Disalurkan');
$xl->getActiveSheet()->setCellValue('AZ10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('BA10', 'Sisi B');

$xl->getActiveSheet()->mergeCells('BB8:BB10');
$xl->getActiveSheet()->setCellValue('BB8', 'Pelumas Rocker Arm');
$xl->getActiveSheet()->mergeCells('BC8:BD9');
$xl->getActiveSheet()->setCellValue('BC8', 'Bahan Bakar');
$xl->getActiveSheet()->setCellValue('BC10', 'I');
$xl->getActiveSheet()->setCellValue('BD10', 'II');
$xl->getActiveSheet()->mergeCells('BE8:BG9');
$xl->getActiveSheet()->setCellValue('BE8', 'Air Pendingin');
$xl->getActiveSheet()->setCellValue('BE10', 'CW');
$xl->getActiveSheet()->setCellValue('BF10', 'JW');
$xl->getActiveSheet()->setCellValue('BG10', 'RW');

$xl->getActiveSheet()->mergeCells('BH7:BI8');
$xl->getActiveSheet()->setCellValue('BH7', 'Putaran Turbo');
$xl->getActiveSheet()->mergeCells('BH9:BH10');
$xl->getActiveSheet()->setCellValue('BH9', 'Sisi A');
$xl->getActiveSheet()->mergeCells('BI9:BI10');
$xl->getActiveSheet()->setCellValue('BI9', 'Sisi B');


// Loop data
$line = 11;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['udara_masuk_sisi_a']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['udara_masuk_sisi_b']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['minyak_pelumas_masuk']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['minyak_pelumas_keluar']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['air_pendingin_masuk_mesin']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['air_pendingin_keluar_mesin']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['masuk_cooler_sisi_a']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['masuk_cooler_sisi_b']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['keluar_cooler_sisi_a']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['keluar_cooler_sisi_b']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['injector_masuk']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['injector_keluar']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['air_pendingin_keluar_silinder_sisi_a1']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['air_pendingin_keluar_silinder_sisi_a2']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['air_pendingin_keluar_silinder_sisi_a3']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['air_pendingin_keluar_silinder_sisi_a4']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['air_pendingin_keluar_silinder_sisi_a5']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['air_pendingin_keluar_silinder_sisi_a6']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['air_pendingin_keluar_silinder_sisi_b1']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['air_pendingin_keluar_silinder_sisi_b2']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['air_pendingin_keluar_silinder_sisi_b3']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['air_pendingin_keluar_silinder_sisi_b4']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['air_pendingin_keluar_silinder_sisi_b5']);

    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['air_pendingin_keluar_silinder_sisi_b6']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['gas_buang_keluar_silinder_sisi_a_1']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['gas_buang_keluar_silinder_sisi_a_2']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['gas_buang_keluar_silinder_sisi_a_3']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['gas_buang_keluar_silinder_sisi_a_4']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['gas_buang_keluar_silinder_sisi_a_5']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['gas_buang_keluar_silinder_sisi_a_6']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['gas_buang_keluar_silinder_sisi_b_1']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['gas_buang_keluar_silinder_sisi_b_2']);
    $xl->getActiveSheet()->setCellValue('AJ' . $line, $row['gas_buang_keluar_silinder_sisi_b_3']);
    $xl->getActiveSheet()->setCellValue('AK' . $line, $row['gas_buang_keluar_silinder_sisi_b_4']);
    $xl->getActiveSheet()->setCellValue('AL' . $line, $row['gas_buang_keluar_silinder_sisi_b_5']);
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['gas_buang_keluar_silinder_sisi_b_6']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['main_bearing1']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['main_bearing2']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['main_bearing3']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['main_bearing4']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['main_bearing5']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['main_bearing6']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['main_bearing7']);
    $xl->getActiveSheet()->setCellValue('AU' . $line, $row['suhu_ruangan']);
    $xl->getActiveSheet()->setCellValue('AV' . $line, $row['rack_bahan_bakar']);
    $xl->getActiveSheet()->setCellValue('AW' . $line, $row['governor_load_limit']);
    $xl->getActiveSheet()->setCellValue('AX' . $line, $row['tekanan_minyak_pelumas_masuk']);
    $xl->getActiveSheet()->setCellValue('AY' . $line, $row['tekanan_minyak_pelumas_keluar']);
    $xl->getActiveSheet()->setCellValue('AZ' . $line, $row['udara_masuk_disalurkan_sisi_a']);

    $xl->getActiveSheet()->setCellValue('BA' . $line, $row['udara_masuk_disalurkan_sisi_b']);
    $xl->getActiveSheet()->setCellValue('BB' . $line, $row['pelumas_rocker_arm']);
    $xl->getActiveSheet()->setCellValue('BC' . $line, $row['bahan_bakar1']);
    $xl->getActiveSheet()->setCellValue('BD' . $line, $row['bahan_bakar2']);
    $xl->getActiveSheet()->setCellValue('BE' . $line, $row['air_pendingin_cw']);
    $xl->getActiveSheet()->setCellValue('BF' . $line, $row['air_pendingin_jw']);
    $xl->getActiveSheet()->setCellValue('BG' . $line, $row['air_pendingin_rw']);
    $xl->getActiveSheet()->setCellValue('BH' . $line, $row['putaran_turbo_sisi_a']);
    $xl->getActiveSheet()->setCellValue('BI' . $line, $row['putaran_turbo_sisi_b']);


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
$xl->getActiveSheet()->getStyle('A1:BI1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:BI10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A11:BI' . $line)->applyFromArray($styleArray);
unset($styleArray);
