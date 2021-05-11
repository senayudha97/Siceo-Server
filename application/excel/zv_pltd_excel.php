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
foreach (range('BA', 'BZ') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:BZ1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Log Ampenan Zv PLTD');

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

$xl->getActiveSheet()->mergeCells('D7:BD7');
$xl->getActiveSheet()->setCellValue('D7', 'Temperatur');
$xl->getActiveSheet()->mergeCells('D8:E9');
$xl->getActiveSheet()->setCellValue('D8', 'Udara Masuk');
$xl->getActiveSheet()->setCellValue('D10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('E10', 'Sisi B');
$xl->getActiveSheet()->mergeCells('F8:I8');
$xl->getActiveSheet()->setCellValue('F8', 'OLI');
$xl->getActiveSheet()->mergeCells('F9:G9');
$xl->getActiveSheet()->setCellValue('F9', 'Masuk Mesin');
$xl->getActiveSheet()->setCellValue('F10', 'A');
$xl->getActiveSheet()->setCellValue('G10', 'B');
$xl->getActiveSheet()->mergeCells('H9:I9');
$xl->getActiveSheet()->setCellValue('H9', 'Radiator');
$xl->getActiveSheet()->setCellValue('H10', 'Masuk');
$xl->getActiveSheet()->setCellValue('I10', 'Keluar');
$xl->getActiveSheet()->mergeCells('J8:AA8');
$xl->getActiveSheet()->setCellValue('J8', 'Air Pendingin');
$xl->getActiveSheet()->mergeCells('J9:K9');
$xl->getActiveSheet()->setCellValue('J9', 'Masuk Mesin');
$xl->getActiveSheet()->setCellValue('J10', 'A');
$xl->getActiveSheet()->setCellValue('K10', 'B');
$xl->getActiveSheet()->mergeCells('L9:M9');
$xl->getActiveSheet()->setCellValue('L9', 'Radiator');
$xl->getActiveSheet()->setCellValue('L10', 'Masuk');
$xl->getActiveSheet()->setCellValue('M10', 'Keluar');
$xl->getActiveSheet()->mergeCells('N9:O9');
$xl->getActiveSheet()->setCellValue('N9', 'Injektor');
$xl->getActiveSheet()->setCellValue('N10', 'Masuk');
$xl->getActiveSheet()->setCellValue('O10', 'Keluar');
$xl->getActiveSheet()->mergeCells('P9:U9');
$xl->getActiveSheet()->setCellValue('P9', 'Keluar Silinder Sisi A');
$xl->getActiveSheet()->setCellValue('P10', '1');
$xl->getActiveSheet()->setCellValue('Q10', '2');
$xl->getActiveSheet()->setCellValue('R10', '3');
$xl->getActiveSheet()->setCellValue('S10', '4');
$xl->getActiveSheet()->setCellValue('T10', '5');
$xl->getActiveSheet()->setCellValue('U10', '6');
$xl->getActiveSheet()->mergeCells('V9:AA9');
$xl->getActiveSheet()->setCellValue('V9', 'Keluar Silinder Sisi B');
$xl->getActiveSheet()->setCellValue('V10', '1');
$xl->getActiveSheet()->setCellValue('W10', '2');
$xl->getActiveSheet()->setCellValue('X10', '3');
$xl->getActiveSheet()->setCellValue('Y10', '4');
$xl->getActiveSheet()->setCellValue('Z10', '5');
$xl->getActiveSheet()->setCellValue('AA10', '6');
$xl->getActiveSheet()->mergeCells('AB8:AM8');
$xl->getActiveSheet()->setCellValue('AB8', 'Gas Buang');
$xl->getActiveSheet()->mergeCells('AB9:AG9');
$xl->getActiveSheet()->setCellValue('AB9', 'Keluar Silinder Sisi A');
$xl->getActiveSheet()->setCellValue('AB10', '1');
$xl->getActiveSheet()->setCellValue('AC10', '2');
$xl->getActiveSheet()->setCellValue('AD10', '3');
$xl->getActiveSheet()->setCellValue('AE10', '4');
$xl->getActiveSheet()->setCellValue('AF10', '5');
$xl->getActiveSheet()->setCellValue('AG10', '6');
$xl->getActiveSheet()->mergeCells('AH9:AM9');
$xl->getActiveSheet()->setCellValue('AH9', 'Keluar Silinder Sisi B');
$xl->getActiveSheet()->setCellValue('AH10', '1');
$xl->getActiveSheet()->setCellValue('AI10', '2');
$xl->getActiveSheet()->setCellValue('AJ10', '3');
$xl->getActiveSheet()->setCellValue('AK10', '4');
$xl->getActiveSheet()->setCellValue('AL10', '5');
$xl->getActiveSheet()->setCellValue('AM10', '6');
$xl->getActiveSheet()->mergeCells('AN8:AV9');
$xl->getActiveSheet()->setCellValue('AN8', 'Main Bearing');
$xl->getActiveSheet()->setCellValue('AN10', '1');
$xl->getActiveSheet()->setCellValue('AO10', '2');
$xl->getActiveSheet()->setCellValue('AP10', '3');
$xl->getActiveSheet()->setCellValue('AQ10', '4');
$xl->getActiveSheet()->setCellValue('AR10', '5');
$xl->getActiveSheet()->setCellValue('AS10', '6');
$xl->getActiveSheet()->setCellValue('AT10', '7');
$xl->getActiveSheet()->setCellValue('AU10', '8');
$xl->getActiveSheet()->setCellValue('AV10', '9');
$xl->getActiveSheet()->mergeCells('AW8:BB8');
$xl->getActiveSheet()->setCellValue('AW8', 'Turbo');
$xl->getActiveSheet()->mergeCells('AW9:AX9');
$xl->getActiveSheet()->setCellValue('AW9', 'Masuk A');
$xl->getActiveSheet()->setCellValue('AW10', 'Masuk');
$xl->getActiveSheet()->setCellValue('AX10', 'Keluar');
$xl->getActiveSheet()->setCellValue('AW8', 'Turbo');
$xl->getActiveSheet()->mergeCells('AY9:AZ9');
$xl->getActiveSheet()->setCellValue('AY9', 'Masuk B');
$xl->getActiveSheet()->setCellValue('AY10', 'Masuk');
$xl->getActiveSheet()->setCellValue('AZ10', 'Keluar');
$xl->getActiveSheet()->mergeCells('BA9:BB9');
$xl->getActiveSheet()->setCellValue('BA9', 'Keluar');
$xl->getActiveSheet()->setCellValue('BA10', 'A');
$xl->getActiveSheet()->setCellValue('BB10', 'B');
$xl->getActiveSheet()->mergeCells('BC8:BC10');
$xl->getActiveSheet()->setCellValue('BC8', 'Air Pendingin Keluar Mesin');
$xl->getActiveSheet()->mergeCells('BD8:BD10');
$xl->getActiveSheet()->setCellValue('BD8', 'Bahan Bakar Masuk Mesin');

$xl->getActiveSheet()->mergeCells('BE7:BE10');
$xl->getActiveSheet()->setCellValue('BE7', 'Rack Bahan Bakar');

$xl->getActiveSheet()->mergeCells('BF7:BF10');
$xl->getActiveSheet()->setCellValue('BF7', 'Goveror Load Limit');

$xl->getActiveSheet()->mergeCells('BG7:BP7');
$xl->getActiveSheet()->setCellValue('BG7', 'Tekanan');
$xl->getActiveSheet()->mergeCells('BG8:BG10');
$xl->getActiveSheet()->setCellValue('BG8', 'Udara Start');
$xl->getActiveSheet()->mergeCells('BH8:BI9');
$xl->getActiveSheet()->setCellValue('BH8', 'Pressure Udara Masuk');
$xl->getActiveSheet()->setCellValue('BH10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('BI10', 'Sisi B');
$xl->getActiveSheet()->mergeCells('BJ8:BJ10');
$xl->getActiveSheet()->setCellValue('BJ8', 'Udara Masuk A&B');
$xl->getActiveSheet()->mergeCells('BK8:BK10');
$xl->getActiveSheet()->setCellValue('BK8', 'Bahan Bakar Masuk Mesin');
$xl->getActiveSheet()->mergeCells('BL8:BL10');
$xl->getActiveSheet()->setCellValue('BL8', 'Minyak Pelumas');
$xl->getActiveSheet()->mergeCells('BM8:BM10');
$xl->getActiveSheet()->setCellValue('BM8', 'Air Pendingin Mesin');
$xl->getActiveSheet()->mergeCells('BN8:BN10');
$xl->getActiveSheet()->setCellValue('BN8', 'Air Pendingin Injektor');
$xl->getActiveSheet()->mergeCells('BO8:BP9');
$xl->getActiveSheet()->setCellValue('BO8', 'Udara Masuk Disalurkan');
$xl->getActiveSheet()->setCellValue('BO10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('BP10', 'Sisi B');

$xl->getActiveSheet()->mergeCells('BQ7:BR9');
$xl->getActiveSheet()->setCellValue('BQ7', 'Putaran Turbo (RPM) x 1000');
$xl->getActiveSheet()->setCellValue('BQ10', 'Sisi A');
$xl->getActiveSheet()->setCellValue('BR10', 'Sisi B');

$xl->getActiveSheet()->mergeCells('BS7:BS10');
$xl->getActiveSheet()->setCellValue('BS7', 'Tekanan Oli Pada Separator');

$xl->getActiveSheet()->mergeCells('BT7:BT10');
$xl->getActiveSheet()->setCellValue('BT7', 'Ampere Pompa Ali');

$xl->getActiveSheet()->mergeCells('BU7:BU10');
$xl->getActiveSheet()->setCellValue('BU7', 'Ampere Pompa JW');

$xl->getActiveSheet()->mergeCells('BV7:BX8');
$xl->getActiveSheet()->setCellValue('BV7', 'Sikap Flow-Meter Bahan Bakar');
$xl->getActiveSheet()->mergeCells('BV9:BW9');
$xl->getActiveSheet()->setCellValue('BV9', 'MFO');
$xl->getActiveSheet()->setCellValue('BV10', 'IN');
$xl->getActiveSheet()->setCellValue('BW10', 'RETURN');
$xl->getActiveSheet()->mergeCells('BX9:BX10');
$xl->getActiveSheet()->setCellValue('BX9', 'HSD');

$xl->getActiveSheet()->mergeCells('BY7:BY10');
$xl->getActiveSheet()->setCellValue('BY7', 'Waktu Input');

$xl->getActiveSheet()->mergeCells('BZ7:BZ10');
$xl->getActiveSheet()->setCellValue('BZ7', 'Operator');


// Loop data
$line = 11;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['udara_masuk_sisi_a']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['udara_masuk_sisi_b']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['oli_masuk_mesin_a']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['oli_masuk_mesin_b']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['oli_radiator_masuk']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['oli_radiator_keluar']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['air_pendingin_masuk_mesin_a']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['air_pendingin_masuk_mesin_b']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['air_pendingin_radiator_masuk']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['air_pendingin_radiator_keluar']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['air_pendingin_injektor_masuk']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['air_pendingin_injektor_keluar']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['air_pendingin_keluar_silinder_sisi_a_1']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['air_pendingin_keluar_silinder_sisi_a_2']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['air_pendingin_keluar_silinder_sisi_a_3']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['air_pendingin_keluar_silinder_sisi_a_4']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['air_pendingin_keluar_silinder_sisi_a_5']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['air_pendingin_keluar_silinder_sisi_a_6']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['air_pendingin_keluar_silinder_sisi_b_1']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['air_pendingin_keluar_silinder_sisi_b_2']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['air_pendingin_keluar_silinder_sisi_b_3']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['air_pendingin_keluar_silinder_sisi_b_4']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['air_pendingin_keluar_silinder_sisi_b_5']);
    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['air_pendingin_keluar_silinder_sisi_b_6']);
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
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['main_bearing_1']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['main_bearing_2']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['main_bearing_3']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['main_bearing_4']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['main_bearing_5']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['main_bearing_6']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['main_bearing_7']);
    $xl->getActiveSheet()->setCellValue('AU' . $line, $row['main_bearing_8']);
    $xl->getActiveSheet()->setCellValue('AV' . $line, $row['main_bearing_9']);
    $xl->getActiveSheet()->setCellValue('AW' . $line, $row['turbo_a_masuk']);
    $xl->getActiveSheet()->setCellValue('AX' . $line, $row['turbo_a_keluar']);
    $xl->getActiveSheet()->setCellValue('AY' . $line, $row['turbo_b_masuk']);
    $xl->getActiveSheet()->setCellValue('AZ' . $line, $row['turbo_b_keluar']);
    $xl->getActiveSheet()->setCellValue('BA' . $line, $row['turbo_keluar_a']);
    $xl->getActiveSheet()->setCellValue('BB' . $line, $row['turbo_keluar_b']);
    $xl->getActiveSheet()->setCellValue('BC' . $line, $row['air_pendingin_keluar_mesin']);
    $xl->getActiveSheet()->setCellValue('BD' . $line, $row['bahan_bakar_masuk_mesin']);
    $xl->getActiveSheet()->setCellValue('BE' . $line, $row['rack_bahan_bakar']);
    $xl->getActiveSheet()->setCellValue('BF' . $line, $row['governor_load_limit']);
    $xl->getActiveSheet()->setCellValue('BG' . $line, $row['udara_start']);
    $xl->getActiveSheet()->setCellValue('BH' . $line, $row['presure_udara_masuk_sisi_a']);
    $xl->getActiveSheet()->setCellValue('BI' . $line, $row['presure_udara_masuk_sisi_b']);
    $xl->getActiveSheet()->setCellValue('BJ' . $line, $row['udara_masuk_ab']);
    $xl->getActiveSheet()->setCellValue('BK' . $line, $row['bahan_bakar_masuk_mesin1']);
    $xl->getActiveSheet()->setCellValue('BL' . $line, $row['minyak_pelumas']);
    $xl->getActiveSheet()->setCellValue('BM' . $line, $row['air_pendingin_mesin']);
    $xl->getActiveSheet()->setCellValue('BN' . $line, $row['air_pendingin_injektor']);
    $xl->getActiveSheet()->setCellValue('BO' . $line, $row['udara_masuk_disalurkan_sisi_a']);
    $xl->getActiveSheet()->setCellValue('BP' . $line, $row['udara_masuk_disalurkan_sisi_b']);
    $xl->getActiveSheet()->setCellValue('BQ' . $line, $row['putaran_turbo_sisi_a']);
    $xl->getActiveSheet()->setCellValue('BR' . $line, $row['putaran_turbo_sisi_b']);
    $xl->getActiveSheet()->setCellValue('BS' . $line, $row['tekanan_oli_pada_separator']);
    $xl->getActiveSheet()->setCellValue('BT' . $line, $row['ampere_pompa_ali']);
    $xl->getActiveSheet()->setCellValue('BU' . $line, $row['ampere_pompa_jw']);
    $xl->getActiveSheet()->setCellValue('BV' . $line, $row['mfo_in']);
    $xl->getActiveSheet()->setCellValue('BW' . $line, $row['mfo_return']);
    $xl->getActiveSheet()->setCellValue('BX' . $line, $row['hsd']);
    $xl->getActiveSheet()->setCellValue('BY' . $line, $row['waktu_input']);
    $xl->getActiveSheet()->setCellValue('BZ' . $line, $row['operator']);

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
$xl->getActiveSheet()->getStyle('A1:BZ1')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A7:BZ10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:BZ' . $line)->applyFromArray($styleArray);
unset($styleArray);
