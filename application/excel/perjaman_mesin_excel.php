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

foreach (range('AA', 'AZ') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

foreach (range('BA', 'BR') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:N1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong Perjaman Mesin');

// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header logsheet mesin 2
$xl->getActiveSheet()->mergeCells('A7:A9');
$xl->getActiveSheet()->setCellValue('A7', 'No');

$xl->getActiveSheet()->mergeCells('B7:B9');
$xl->getActiveSheet()->setCellValue('B7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C7:C9');
$xl->getActiveSheet()->setCellValue('C7', 'Waktu');

$xl->getActiveSheet()->mergeCells('D7:O7');
$xl->getActiveSheet()->setCellValue('D7', 'Suhu');

$xl->getActiveSheet()->mergeCells('D8:I8');
$xl->getActiveSheet()->setCellValue('D8', 'GBC');

$xl->getActiveSheet()->setCellValue('D9', '1');
$xl->getActiveSheet()->setCellValue('E9', '2');
$xl->getActiveSheet()->setCellValue('F9', '3');
$xl->getActiveSheet()->setCellValue('G9', '4');
$xl->getActiveSheet()->setCellValue('H9', '5');
$xl->getActiveSheet()->setCellValue('I9', '6');


$xl->getActiveSheet()->mergeCells('J8:M8');
$xl->getActiveSheet()->setCellValue('J8', 'TM');

$xl->getActiveSheet()->setCellValue('J9', 'Kitas');
$xl->getActiveSheet()->setCellValue('K9', 'Kibah');
$xl->getActiveSheet()->setCellValue('L9', 'Katas');
$xl->getActiveSheet()->setCellValue('M9', 'Kabah');

$xl->getActiveSheet()->mergeCells('N8:O8');
$xl->getActiveSheet()->setCellValue('N8', 'TK');

$xl->getActiveSheet()->setCellValue('N9', 'Kiri');
$xl->getActiveSheet()->setCellValue('O9', 'Kanan');

$xl->getActiveSheet()->mergeCells('P7:P9');
$xl->getActiveSheet()->setCellValue('P7', 'Rak BBM');

$xl->getActiveSheet()->mergeCells('Q7:Q9');
$xl->getActiveSheet()->setCellValue('Q7', 'Governor Load Limit');

$xl->getActiveSheet()->mergeCells('R7:Y7');
$xl->getActiveSheet()->setCellValue('R7', 'Tekanan');

$xl->getActiveSheet()->mergeCells('R8:R9');
$xl->getActiveSheet()->setCellValue('R8', 'API');

$xl->getActiveSheet()->mergeCells('S8:S9');
$xl->getActiveSheet()->setCellValue('S8', 'PM');

$xl->getActiveSheet()->mergeCells('T8:U8');
$xl->getActiveSheet()->setCellValue('T8', 'UM');

$xl->getActiveSheet()->setCellValue('T9', 'Kiri');
$xl->getActiveSheet()->setCellValue('U9', 'Kanan');

$xl->getActiveSheet()->mergeCells('V8:V9');
$xl->getActiveSheet()->setCellValue('V8', 'BBM');

$xl->getActiveSheet()->mergeCells('W8:W9');
$xl->getActiveSheet()->setCellValue('W8', 'UM');

$xl->getActiveSheet()->mergeCells('X8:X9');
$xl->getActiveSheet()->setCellValue('X8', 'US');

$xl->getActiveSheet()->mergeCells('Y8:Y9');
$xl->getActiveSheet()->setCellValue('Y8', 'UPMM');

$xl->getActiveSheet()->mergeCells('Z7:AA7');
$xl->getActiveSheet()->setCellValue('Z7', 'Putaran Turbo');

$xl->getActiveSheet()->mergeCells('Z8:Z9');
$xl->getActiveSheet()->setCellValue('Z8', 'Kiri');

$xl->getActiveSheet()->mergeCells('AA8:AA9');
$xl->getActiveSheet()->setCellValue('AA8', 'Kanan');

$xl->getActiveSheet()->mergeCells('AB7:AI7');
$xl->getActiveSheet()->setCellValue('AB7', 'Temperature Bearing');

$xl->getActiveSheet()->mergeCells('AB8:AB9');
$xl->getActiveSheet()->setCellValue('AB8', '1');

$xl->getActiveSheet()->mergeCells('AC8:AC9');
$xl->getActiveSheet()->setCellValue('AC8', '2');

$xl->getActiveSheet()->mergeCells('AD8:AD9');
$xl->getActiveSheet()->setCellValue('AD8', '3');

$xl->getActiveSheet()->mergeCells('AE8:AE9');
$xl->getActiveSheet()->setCellValue('AE8', '4');

$xl->getActiveSheet()->mergeCells('AF8:AF9');
$xl->getActiveSheet()->setCellValue('AF8', '5');

$xl->getActiveSheet()->mergeCells('AG8:AG9');
$xl->getActiveSheet()->setCellValue('AG8', '6');

$xl->getActiveSheet()->mergeCells('AH8:AH9');
$xl->getActiveSheet()->setCellValue('AH8', '7');

$xl->getActiveSheet()->mergeCells('AI8:AI9');
$xl->getActiveSheet()->setCellValue('AI8', '8');

// logsheet mesin 1
$xl->getActiveSheet()->mergeCells('AK7:AK11');
$xl->getActiveSheet()->setCellValue('AK7', 'No');

$xl->getActiveSheet()->mergeCells('AL7:AL11');
$xl->getActiveSheet()->setCellValue('AL7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('AM7:AM11');
$xl->getActiveSheet()->setCellValue('AM7', 'Waktu');

$xl->getActiveSheet()->mergeCells('AN7:BQ7');
$xl->getActiveSheet()->setCellValue('AN7', 'Mesin');

$xl->getActiveSheet()->mergeCells('AN8:BQ8');
$xl->getActiveSheet()->setCellValue('AN8', 'Suhu');

$xl->getActiveSheet()->mergeCells('AN9:AO10');
$xl->getActiveSheet()->setCellValue('AN9', 'Udara Masuk');
$xl->getActiveSheet()->setCellValue('AN11', 'L');
$xl->getActiveSheet()->setCellValue('AO11', 'R');

$xl->getActiveSheet()->mergeCells('AP9:AS9');
$xl->getActiveSheet()->setCellValue('AP9', 'Minyak Pelumas');
$xl->getActiveSheet()->mergeCells('AP10:AQ10');
$xl->getActiveSheet()->setCellValue('AP10', 'Masuk Mesin');
$xl->getActiveSheet()->setCellValue('AP11', 'L');
$xl->getActiveSheet()->setCellValue('AQ11', 'R');
$xl->getActiveSheet()->mergeCells('AR10:AS10');
$xl->getActiveSheet()->setCellValue('AR10', 'Radiator');
$xl->getActiveSheet()->setCellValue('AR11', 'Masuk');
$xl->getActiveSheet()->setCellValue('AS11', 'Keluar');

$xl->getActiveSheet()->mergeCells('AT9:BK9');
$xl->getActiveSheet()->setCellValue('AT9', 'Air Pendingin Mesin');
$xl->getActiveSheet()->mergeCells('AT10:AU10');
$xl->getActiveSheet()->setCellValue('AT10', 'Mesin Masuk');
$xl->getActiveSheet()->setCellValue('AT11', 'L');
$xl->getActiveSheet()->setCellValue('AU11', 'R');
$xl->getActiveSheet()->mergeCells('AV10:AW10');
$xl->getActiveSheet()->setCellValue('AV10', 'Radiator');
$xl->getActiveSheet()->setCellValue('AV11', 'Masuk');
$xl->getActiveSheet()->setCellValue('AW11', 'Keluar');
$xl->getActiveSheet()->mergeCells('AX10:AY10');
$xl->getActiveSheet()->setCellValue('AX10', 'Injektor');
$xl->getActiveSheet()->setCellValue('AX11', 'Masuk');
$xl->getActiveSheet()->setCellValue('AY11', 'Keluar');
$xl->getActiveSheet()->mergeCells('AZ10:BE10');
$xl->getActiveSheet()->setCellValue('AZ10', 'Keluar Cylinder L');
$xl->getActiveSheet()->setCellValue('AZ11', '1');
$xl->getActiveSheet()->setCellValue('BA11', '2');
$xl->getActiveSheet()->setCellValue('BB11', '3');
$xl->getActiveSheet()->setCellValue('BC11', '4');
$xl->getActiveSheet()->setCellValue('BD11', '5');
$xl->getActiveSheet()->setCellValue('BE11', '6');
$xl->getActiveSheet()->mergeCells('BF10:BK10');
$xl->getActiveSheet()->setCellValue('BF10', 'Keluar Cylinder R');
$xl->getActiveSheet()->setCellValue('BF11', '1');
$xl->getActiveSheet()->setCellValue('BG11', '2');
$xl->getActiveSheet()->setCellValue('BH11', '3');
$xl->getActiveSheet()->setCellValue('BI11', '4');
$xl->getActiveSheet()->setCellValue('BJ11', '5');
$xl->getActiveSheet()->setCellValue('BK11', '6');

$xl->getActiveSheet()->mergeCells('BL9:BQ10');
$xl->getActiveSheet()->setCellValue('BL9', 'Gas Buang Cylinder L');
$xl->getActiveSheet()->setCellValue('BL10', 'Gas Buang Cylinder L');
$xl->getActiveSheet()->setCellValue('BL11', '1');
$xl->getActiveSheet()->setCellValue('BM11', '2');
$xl->getActiveSheet()->setCellValue('BN11', '3');
$xl->getActiveSheet()->setCellValue('BO11', '4');
$xl->getActiveSheet()->setCellValue('BP11', '5');
$xl->getActiveSheet()->setCellValue('BQ11', '6');

$xl->getActiveSheet()->mergeCells('BR7:BR11');
$xl->getActiveSheet()->setCellValue('BR7', 'Flow Meter Bahan Bakar');

// Loop data logsheet mesin 2
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['gas1']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['gas2']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['gas3']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['gas4']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['gas5']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['gas6']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['turbo_masuk_kiri_atas']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['turbo_masuk_kiri_bawah']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['turbo_masuk_kanan_atas']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['turbo_masuk_kanan_bawah']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['turbo_keluar_kiri']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['turbo_keluar_kanan']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['rak_bbm']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['governor_load_limit']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['air_ped_injektor']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['pelumasan_mesin']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['udara_masuk_kiri']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['udara_masuk_kanan']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['bahan_bakar_mesin']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['udara_masuk']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['udara_start']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['air_pend_masuk_mesin']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['putaran_turbo_kiri']);
    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['putaran_turbo_kanan']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['bearing1']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['bearing2']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['bearing3']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['bearing4']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['bearing5']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['bearing6']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['bearing7']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['bearing8']);

    $line++;
}

// Loop data logsheet mesin 1
$line = 12;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('AK' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('AL' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['udara_masuk_l']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['udara_masuk_r']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['minyak_pelumas_masuk_mesin_l']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['minyak_pelumas_masuk_mesin_r']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['minyak_pelumas_radiator_masuk']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['minyak_pelumas_radiator_keluar']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['air_pendingin_mesin_masuk_l']);
    $xl->getActiveSheet()->setCellValue('Au' . $line, $row['air_pendingin_mesin_masuk_r']);
    $xl->getActiveSheet()->setCellValue('AV' . $line, $row['air_pendingin_radiator_masuk']);
    $xl->getActiveSheet()->setCellValue('AW' . $line, $row['air_pendingin_radiator_keluar']);
    $xl->getActiveSheet()->setCellValue('AX' . $line, $row['air_pendingin_injektor_masuk']);
    $xl->getActiveSheet()->setCellValue('AY' . $line, $row['air_pendingin_injektor_keluar']);
    $xl->getActiveSheet()->setCellValue('AZ' . $line, $row['keluar_cylinder_l_1']);
    $xl->getActiveSheet()->setCellValue('BA' . $line, $row['keluar_cylinder_l_2']);
    $xl->getActiveSheet()->setCellValue('BB' . $line, $row['keluar_cylinder_l_3']);
    $xl->getActiveSheet()->setCellValue('BC' . $line, $row['keluar_cylinder_l_4']);
    $xl->getActiveSheet()->setCellValue('BD' . $line, $row['keluar_cylinder_l_5']);
    $xl->getActiveSheet()->setCellValue('BE' . $line, $row['keluar_cylinder_l_6']);
    $xl->getActiveSheet()->setCellValue('BF' . $line, $row['keluar_cylinder_r_1']);
    $xl->getActiveSheet()->setCellValue('BG' . $line, $row['keluar_cylinder_r_2']);
    $xl->getActiveSheet()->setCellValue('BH' . $line, $row['keluar_cylinder_r_3']);
    $xl->getActiveSheet()->setCellValue('BI' . $line, $row['keluar_cylinder_r_4']);
    $xl->getActiveSheet()->setCellValue('BJ' . $line, $row['keluar_cylinder_r_5']);
    $xl->getActiveSheet()->setCellValue('BK' . $line, $row['keluar_cylinder_r_6']);
    $xl->getActiveSheet()->setCellValue('BL' . $line, $row['gas_buang_cylinder_l_1']);
    $xl->getActiveSheet()->setCellValue('BM' . $line, $row['gas_buang_cylinder_l_2']);
    $xl->getActiveSheet()->setCellValue('BN' . $line, $row['gas_buang_cylinder_l_3']);
    $xl->getActiveSheet()->setCellValue('BO' . $line, $row['gas_buang_cylinder_l_4']);
    $xl->getActiveSheet()->setCellValue('BP' . $line, $row['gas_buang_cylinder_l_5']);
    $xl->getActiveSheet()->setCellValue('BQ' . $line, $row['gas_buang_cylinder_l_6']);
    $xl->getActiveSheet()->setCellValue('BR' . $line, $row['flow_meter_bahan_bakar']);

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
$xl->getActiveSheet()->getStyle('A1:N1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:AI9')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('AK7:BR11')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:AI' . $line)->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('AK12:BR' . $line)->applyFromArray($styleArray);
unset($styleArray);
