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

foreach (range('AA', 'AU') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:AU1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Ampenan Ruston');

// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header
$xl->getActiveSheet()->mergeCells('A7:A11');
$xl->getActiveSheet()->setCellValue('A7', 'No');

$xl->getActiveSheet()->mergeCells('B7:B11');
$xl->getActiveSheet()->setCellValue('B7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C7:C11');
$xl->getActiveSheet()->setCellValue('C7', 'Waktu');

$xl->getActiveSheet()->mergeCells('D7:AI7');
$xl->getActiveSheet()->setCellValue('D7', 'Mesin');

$xl->getActiveSheet()->mergeCells('D8:AB8');
$xl->getActiveSheet()->setCellValue('D8', 'Suhu (°C)');
$xl->getActiveSheet()->mergeCells('D9:G9');
$xl->getActiveSheet()->setCellValue('D9', 'Air Pendingin');
$xl->getActiveSheet()->mergeCells('D10:E10');
$xl->getActiveSheet()->setCellValue('D10', 'Jacket Water');
$xl->getActiveSheet()->setCellValue('D11', 'Masuk');
$xl->getActiveSheet()->setCellValue('E11', 'Keluar');
$xl->getActiveSheet()->mergeCells('F10:G10');
$xl->getActiveSheet()->setCellValue('F10', 'Raw Water');
$xl->getActiveSheet()->setCellValue('F11', 'Masuk');
$xl->getActiveSheet()->setCellValue('G11', 'Keluar');
$xl->getActiveSheet()->mergeCells('H9:I9');
$xl->getActiveSheet()->setCellValue('H9', 'Minyak Pelumas');
$xl->getActiveSheet()->mergeCells('H10:H11');
$xl->getActiveSheet()->setCellValue('H10', 'Masuk');
$xl->getActiveSheet()->mergeCells('I10:I11');
$xl->getActiveSheet()->setCellValue('I10', 'Keluar');
$xl->getActiveSheet()->mergeCells('J9:J11');
$xl->getActiveSheet()->setCellValue('J9', 'Udara Masuk');
$xl->getActiveSheet()->mergeCells('K9:Z9');
$xl->getActiveSheet()->setCellValue('K9', 'Gas Buang');
$xl->getActiveSheet()->mergeCells('K10:N10');
$xl->getActiveSheet()->setCellValue('K10', 'Silinder Sisi A');
$xl->getActiveSheet()->setCellValue('K11', '1');
$xl->getActiveSheet()->setCellValue('L11', '2');
$xl->getActiveSheet()->setCellValue('M11', '3');
$xl->getActiveSheet()->setCellValue('N11', '4');
$xl->getActiveSheet()->mergeCells('O10:R10');
$xl->getActiveSheet()->setCellValue('O10', 'Silinder Sisi B');
$xl->getActiveSheet()->setCellValue('O11', '1');
$xl->getActiveSheet()->setCellValue('P11', '2');
$xl->getActiveSheet()->setCellValue('Q11', '3');
$xl->getActiveSheet()->setCellValue('R11', '4');
$xl->getActiveSheet()->mergeCells('S10:Z10');
$xl->getActiveSheet()->setCellValue('S10', 'Sebelum Turbo');
$xl->getActiveSheet()->setCellValue('S11', '1A');
$xl->getActiveSheet()->setCellValue('T11', '2A');
$xl->getActiveSheet()->setCellValue('U11', '3A');
$xl->getActiveSheet()->setCellValue('V11', '4A');
$xl->getActiveSheet()->setCellValue('W11', '1B');
$xl->getActiveSheet()->setCellValue('X11', '2B');
$xl->getActiveSheet()->setCellValue('Y11', '3B');
$xl->getActiveSheet()->setCellValue('Z11', '4B');
$xl->getActiveSheet()->mergeCells('AA9:AB9');
$xl->getActiveSheet()->setCellValue('AA9', 'Minyak Disaringan');
$xl->getActiveSheet()->mergeCells('AA10:AA11');
$xl->getActiveSheet()->setCellValue('AA10', 'Masuk');
$xl->getActiveSheet()->mergeCells('AB10:AB11');
$xl->getActiveSheet()->setCellValue('AB10', 'Keluar');

$xl->getActiveSheet()->mergeCells('AC8:AI8');
$xl->getActiveSheet()->setCellValue('AC8', 'Tekanan ( Kg / Cm2 )');
$xl->getActiveSheet()->mergeCells('AC9:AD9');
$xl->getActiveSheet()->setCellValue('AC9', 'Pelumas');
$xl->getActiveSheet()->mergeCells('AC10:AC11');
$xl->getActiveSheet()->setCellValue('AC10', 'Dipanel');
$xl->getActiveSheet()->mergeCells('AD10:AD11');
$xl->getActiveSheet()->setCellValue('AD10', 'Dimesin');
$xl->getActiveSheet()->mergeCells('AE9:AF9');
$xl->getActiveSheet()->setCellValue('AE9', 'Bahan Bakar Disaringan');
$xl->getActiveSheet()->mergeCells('AE10:AE11');
$xl->getActiveSheet()->setCellValue('AE10', 'Masuk');
$xl->getActiveSheet()->mergeCells('AF10:AF11');
$xl->getActiveSheet()->setCellValue('AF10', 'Keluar');
$xl->getActiveSheet()->mergeCells('AG9:AH9');
$xl->getActiveSheet()->setCellValue('AG9', 'Pendinginan');
$xl->getActiveSheet()->mergeCells('AG10:AG11');
$xl->getActiveSheet()->setCellValue('AG10', 'Jacket Water Masuk');
$xl->getActiveSheet()->mergeCells('AH10:AH11');
$xl->getActiveSheet()->setCellValue('AH10', 'Raw Water Masuk');
$xl->getActiveSheet()->mergeCells('AI9:AI11');
$xl->getActiveSheet()->setCellValue('AI9', 'Udara Masuk');

$xl->getActiveSheet()->mergeCells('AJ7:AJ11');
$xl->getActiveSheet()->setCellValue('AJ7', 'Load Limit Governor');

$xl->getActiveSheet()->mergeCells('AK7:AR7');
$xl->getActiveSheet()->setCellValue('AK7', 'Generator');
$xl->getActiveSheet()->mergeCells('AK8:AK11');
$xl->getActiveSheet()->setCellValue('AK8', 'Frekwensi (Hz)');
$xl->getActiveSheet()->mergeCells('AL8:AL11');
$xl->getActiveSheet()->setCellValue('AL8', 'Faktor Daya ( COSƿ )');
$xl->getActiveSheet()->mergeCells('AM8:AM11');
$xl->getActiveSheet()->setCellValue('AM8', 'Tegangan ( KV )');
$xl->getActiveSheet()->mergeCells('AN8:AP9');
$xl->getActiveSheet()->setCellValue('AN8', 'Arus');
$xl->getActiveSheet()->mergeCells('AN10:AN11');
$xl->getActiveSheet()->setCellValue('AN10', 'R');
$xl->getActiveSheet()->mergeCells('AO10:AO11');
$xl->getActiveSheet()->setCellValue('AO10', 'S');
$xl->getActiveSheet()->mergeCells('AP10:AP11');
$xl->getActiveSheet()->setCellValue('AP10', 'T');
$xl->getActiveSheet()->mergeCells('AQ8:AR9');
$xl->getActiveSheet()->setCellValue('AQ8', 'Penguat Medan ( Exciter )');
$xl->getActiveSheet()->mergeCells('AQ10:AQ11');
$xl->getActiveSheet()->setCellValue('AQ10', 'Tegangan ( V )');
$xl->getActiveSheet()->mergeCells('AR10:AR11');
$xl->getActiveSheet()->setCellValue('AR10', 'Arus ( A )');
$xl->getActiveSheet()->mergeCells('AS7:AS11');
$xl->getActiveSheet()->setCellValue('AS7', 'Beban ( KW )');
$xl->getActiveSheet()->mergeCells('AT7:AT11');
$xl->getActiveSheet()->setCellValue('AT7', 'KWH Produksi');
$xl->getActiveSheet()->mergeCells('AU7:AU11');
$xl->getActiveSheet()->setCellValue('AU7', 'Flow Meter Bahan Bakar');


// Loop data
$line = 12;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['air_pendingin_jacket_water_masuk']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['air_pendingin_jacket_water_keluar']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['air_pendingin_raw_water_masuk']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['air_pendingin_raw_water_keluar']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['minyak_pelumas_masuk']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['minyak_pelumas_keluar']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['suhu_udara_masuk']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['gas_buang_silinder_sisi_a_1']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['gas_buang_silinder_sisi_a_2']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['gas_buang_silinder_sisi_a_3']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['gas_buang_silinder_sisi_a_4']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['gas_buang_silinder_sisi_b_1']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['gas_buang_silinder_sisi_b_2']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['gas_buang_silinder_sisi_b_3']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['gas_buang_silinder_sisi_b_4']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['sebelum_turbo_a1']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['sebelum_turbo_a2']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['sebelum_turbo_a3']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['sebelum_turbo_a4']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['sebelum_turbo_b1']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['sebelum_turbo_b2']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['sebelum_turbo_b3']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['sebelum_turbo_b4']);

    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['minyak_disaringan_masuk']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['minyak_disaringan_keluar']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['pelumas_dipanel']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['pelumas_dimesin']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['bahan_bakar_disaringan_masuk']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['bahan_bakar_disaringan_keluar']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['pendinginan_jacket_water_masuk']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['pendinginan_raw_water_masuk']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['tekanan_udara_masuk']);
    $xl->getActiveSheet()->setCellValue('AJ' . $line, $row['load_limit_governor']);
    $xl->getActiveSheet()->setCellValue('AK' . $line, $row['frekwensi']);
    $xl->getActiveSheet()->setCellValue('AL' . $line, $row['faktor_daya']);
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['tegangan']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['arus_r']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['arus_s']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['arus_t']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['penguat_medan_tegangan']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['penguat_medan_arus']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['beban']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['kwh_produksi']);
    $xl->getActiveSheet()->setCellValue('AU' . $line, $row['flow_meter_bahan_bakar']);


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
$xl->getActiveSheet()->getStyle('A1:AU1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:AU11')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:AU' . $line)->applyFromArray($styleArray);
unset($styleArray);
