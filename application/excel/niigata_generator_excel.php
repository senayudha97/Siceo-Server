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

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:AZ1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Log Ampenan Niigata Generator');

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

$xl->getActiveSheet()->mergeCells('D7:P7');
$xl->getActiveSheet()->setCellValue('D7', 'Generator');
$xl->getActiveSheet()->mergeCells('D8:D10');
$xl->getActiveSheet()->setCellValue('D8', 'Tegangan (Kv)');
$xl->getActiveSheet()->mergeCells('E8:E10');
$xl->getActiveSheet()->setCellValue('E8', 'Frekuensi (Hz)');
$xl->getActiveSheet()->mergeCells('F8:F10');
$xl->getActiveSheet()->setCellValue('F8', 'Faktor Daya (Cos)');
$xl->getActiveSheet()->mergeCells('G8:G10');
$xl->getActiveSheet()->setCellValue('G8', 'Daya Semu (MVAR)');
$xl->getActiveSheet()->mergeCells('H8:H10');
$xl->getActiveSheet()->setCellValue('H8', 'Beban (MW)');
$xl->getActiveSheet()->mergeCells('I8:K8');
$xl->getActiveSheet()->setCellValue('I8', 'Arus (kA)');
$xl->getActiveSheet()->mergeCells('I9:I10');
$xl->getActiveSheet()->setCellValue('I9', 'R');
$xl->getActiveSheet()->mergeCells('J9:J10');
$xl->getActiveSheet()->setCellValue('J9', 'S');
$xl->getActiveSheet()->mergeCells('K9:K10');
$xl->getActiveSheet()->setCellValue('K9', 'T');
$xl->getActiveSheet()->mergeCells('L8:M8');
$xl->getActiveSheet()->setCellValue('L8', 'Penguat Medan (Exciter)');
$xl->getActiveSheet()->mergeCells('L9:L10');
$xl->getActiveSheet()->setCellValue('L9', 'Arus');
$xl->getActiveSheet()->mergeCells('M9:M10');
$xl->getActiveSheet()->setCellValue('M9', 'Tegangan');
$xl->getActiveSheet()->mergeCells('N8:P8');
$xl->getActiveSheet()->setCellValue('N8', 'Suhu (c)');
$xl->getActiveSheet()->mergeCells('N9:P9');
$xl->getActiveSheet()->setCellValue('N9', 'Winding');
$xl->getActiveSheet()->setCellValue('N10', '1');
$xl->getActiveSheet()->setCellValue('O10', '2');
$xl->getActiveSheet()->setCellValue('P10', '3');

$xl->getActiveSheet()->mergeCells('Q7:Q10');
$xl->getActiveSheet()->setCellValue('Q7', 'Bearing');

$xl->getActiveSheet()->mergeCells('R7:S9');
$xl->getActiveSheet()->setCellValue('R7', 'Pendingin Udara Generator');
$xl->getActiveSheet()->setCellValue('R10', 'Masuk');
$xl->getActiveSheet()->setCellValue('S10', 'Keluar');

$xl->getActiveSheet()->mergeCells('T7:U9');
$xl->getActiveSheet()->setCellValue('T7', 'Putaran Turbo');
$xl->getActiveSheet()->setCellValue('T10', 'A');
$xl->getActiveSheet()->setCellValue('U10', 'B');

$xl->getActiveSheet()->mergeCells('V7:V10');
$xl->getActiveSheet()->setCellValue('V7', 'Sikap KWh Meter');

$xl->getActiveSheet()->mergeCells('W7:W10');
$xl->getActiveSheet()->setCellValue('W7', 'Level Become');

$xl->getActiveSheet()->mergeCells('X7:AA9');
$xl->getActiveSheet()->setCellValue('X7', ' ');
$xl->getActiveSheet()->setCellValue('X10', 'R');
$xl->getActiveSheet()->setCellValue('Y10', 'S');
$xl->getActiveSheet()->setCellValue('Z10', 'T');
$xl->getActiveSheet()->setCellValue('AA10', 'MW');

$xl->getActiveSheet()->mergeCells('AB7:AX7');
$xl->getActiveSheet()->setCellValue('AB7', 'Temperatur');
$xl->getActiveSheet()->mergeCells('AB8:AC9');
$xl->getActiveSheet()->setCellValue('AB8', 'Air Pendingin Mesin');
$xl->getActiveSheet()->setCellValue('AB10', 'Masuk');
$xl->getActiveSheet()->setCellValue('AC10', 'Keluar');
$xl->getActiveSheet()->mergeCells('AD8:AE9');
$xl->getActiveSheet()->setCellValue('AB8', 'Minyak Pelumas');
$xl->getActiveSheet()->setCellValue('AD10', 'Masuk');
$xl->getActiveSheet()->setCellValue('AE10', 'Keluar');
$xl->getActiveSheet()->mergeCells('AF8:AG9');
$xl->getActiveSheet()->setCellValue('AF8', 'Udara Bilas');
$xl->getActiveSheet()->setCellValue('AF10', 'A');
$xl->getActiveSheet()->setCellValue('AG10', 'B');
$xl->getActiveSheet()->mergeCells('AH8:AH10');
$xl->getActiveSheet()->setCellValue('AH8', 'Air Pendingin Udara Masuk');
$xl->getActiveSheet()->mergeCells('AI8:AT8');
$xl->getActiveSheet()->setCellValue('AI8', 'Gas Buang');
$xl->getActiveSheet()->mergeCells('AI9:AN9');
$xl->getActiveSheet()->setCellValue('AI9', 'Silinder Sisi A');
$xl->getActiveSheet()->setCellValue('AI10', '1');
$xl->getActiveSheet()->setCellValue('AJ10', '2');
$xl->getActiveSheet()->setCellValue('AK10', '3');
$xl->getActiveSheet()->setCellValue('AL10', '4');
$xl->getActiveSheet()->setCellValue('AM10', '5');
$xl->getActiveSheet()->setCellValue('AN10', '6');
$xl->getActiveSheet()->mergeCells('AO9:AT9');
$xl->getActiveSheet()->setCellValue('AO9', 'Silinder Sisi B');
$xl->getActiveSheet()->setCellValue('AO10', '1');
$xl->getActiveSheet()->setCellValue('AP10', '2');
$xl->getActiveSheet()->setCellValue('AQ10', '3');
$xl->getActiveSheet()->setCellValue('AR10', '4');
$xl->getActiveSheet()->setCellValue('AS10', '5');
$xl->getActiveSheet()->setCellValue('AT10', '6');
$xl->getActiveSheet()->mergeCells('AU8:AX8');
$xl->getActiveSheet()->setCellValue('AU8', 'Turbo');
$xl->getActiveSheet()->setCellValue('AU9', 'A');
$xl->getActiveSheet()->setCellValue('AV9', 'B');
$xl->getActiveSheet()->setCellValue('AW9', 'A');
$xl->getActiveSheet()->setCellValue('AX9', 'B');
$xl->getActiveSheet()->setCellValue('AU10', '1');
$xl->getActiveSheet()->setCellValue('AV10', '2');
$xl->getActiveSheet()->setCellValue('AW10', '1');
$xl->getActiveSheet()->setCellValue('AX10', '2');
$xl->getActiveSheet()->mergeCells('AY7:AY10');
$xl->getActiveSheet()->setCellValue('AY7', 'Waktu Input');
$xl->getActiveSheet()->mergeCells('AZ7:AZ10');
$xl->getActiveSheet()->setCellValue('AZ7', 'Operator');


// Loop data
$line = 11;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['tegangan']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['frekuensi']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['faktor_daya']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['daya_semu']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['beban']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['arus_r']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['arus_s']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['arus_t']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['penguat_medan_arus']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['penguat_medan_tegangan']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['suhu_1']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['suhu_2']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['suhu_3']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['bearing']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['pendingin_udara_generator_masuk']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['pendingin_udara_generator_keluar']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['putaran_turbo_a']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['putaran_turbo_b']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['sikap_keh_meter']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['level_become']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['daya_r']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['daya_s']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['daya_t']);
    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['daya_mw']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['air_pendingin_mesin_masuk']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['air_pendingin_mesin_keluar']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['minyak_pelumas_masuk']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['minyak_pelumas_keluar']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['udara_bilas_A']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['udara_bilas_B']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['air_pendingin_udara_masuk']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['silinder_sisi_A_1']);
    $xl->getActiveSheet()->setCellValue('AJ' . $line, $row['silinder_sisi_A_2']);
    $xl->getActiveSheet()->setCellValue('AK' . $line, $row['silinder_sisi_A_3']);
    $xl->getActiveSheet()->setCellValue('AL' . $line, $row['silinder_sisi_A_4']);
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['silinder_sisi_A_5']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['silinder_sisi_A_6']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['silinder_sisi_B_1']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['silinder_sisi_B_2']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['silinder_sisi_B_3']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['silinder_sisi_B_4']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['silinder_sisi_B_5']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['silinder_sisi_B_6']);
    $xl->getActiveSheet()->setCellValue('AU' . $line, $row['turbo_a_1_a']);
    $xl->getActiveSheet()->setCellValue('AV' . $line, $row['turbo_b_1_a']);
    $xl->getActiveSheet()->setCellValue('AW' . $line, $row['turbo_a_1_b']);
    $xl->getActiveSheet()->setCellValue('AX' . $line, $row['turbo_b_1_b']);
    $xl->getActiveSheet()->setCellValue('AY' . $line, $row['waktu_input']);
    $xl->getActiveSheet()->setCellValue('AZ' . $line, $row['operator']);

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
$xl->getActiveSheet()->getStyle('A1:AZ1')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A7:AZ10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A11:AZ' . $line)->applyFromArray($styleArray);
unset($styleArray);
