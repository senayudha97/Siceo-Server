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

$second = $this->cellRange('AZ', 'A');

foreach ($second as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

$third = $this->cellRange('BE', 'B');

foreach ($third as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:N1');
$xl->getActiveSheet()->setCellValue('A1', 'PATROL CHECK MESIN');

// Setup Mesin
$xl->getActiveSheet()->setCellValue('B3', 'NOMOR DOKUMEN');
$xl->getActiveSheet()->setCellValue('B4', 'EDIT REVISI');
$xl->getActiveSheet()->setCellValue('B5', 'TANGGAL');
$xl->getActiveSheet()->setCellValue('B6', 'HALAMAN');
// Mesin Value
$xl->getActiveSheet()->setCellValue('D3', ': FM-OPS-18');
$xl->getActiveSheet()->setCellValue('D4', ': 1 / 0');
$xl->getActiveSheet()->setCellValue('D5', ': ' . date('d-m-Y'));
$xl->getActiveSheet()->setCellValue('D6', ': 1 dari 1');

// Setup PLTD
$xl->getActiveSheet()->setCellValue('F3', 'Unit');
$xl->getActiveSheet()->setCellValue('F4', 'Merek');
$xl->getActiveSheet()->setCellValue('F5', 'Tipe');
// PLTD Value
$xl->getActiveSheet()->setCellValue('G3', ': AMPENAN');
$xl->getActiveSheet()->setCellValue('G4', ': Sulzer');
$xl->getActiveSheet()->setCellValue('G5', ': 9 ZV 40/48');

// Setup Generator
$xl->getActiveSheet()->setCellValue('I3', 'Daya Terpasang');
$xl->getActiveSheet()->setCellValue('I4', 'Tahun Operasi');
$xl->getActiveSheet()->setCellValue('I5', 'Sub Unit');

$xl->getActiveSheet()->setCellValue('J3', ': 6368 KW');
$xl->getActiveSheet()->setCellValue('J4', ': 2000 / 2002');
$xl->getActiveSheet()->setCellValue('J5', ': PL (PLTD) Paokmotong');

// Set Header
$xl->getActiveSheet()->mergeCells('A8:A11');
$xl->getActiveSheet()->setCellValue('A8', 'No');

$xl->getActiveSheet()->mergeCells('B8:B11');
$xl->getActiveSheet()->setCellValue('B8', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C8:C11');
$xl->getActiveSheet()->setCellValue('C8', 'Jam');

$xl->getActiveSheet()->mergeCells('D8:K8');
$xl->getActiveSheet()->setCellValue('D8', 'TEKANAN');

$xl->getActiveSheet()->mergeCells('D9:E9');
$xl->getActiveSheet()->setCellValue('D9', 'Air Pendingin');

$xl->getActiveSheet()->mergeCells('D10:D11');
$xl->getActiveSheet()->setCellValue('D10', 'Masuk Mesin');

$xl->getActiveSheet()->mergeCells('E10:E11');
$xl->getActiveSheet()->setCellValue('E10', 'Masuk Intercooler');

$xl->getActiveSheet()->mergeCells('F9:F11');
$xl->getActiveSheet()->setCellValue('F9', 'Minyak Pelumas Mesin');

$xl->getActiveSheet()->mergeCells('G9:H9');
$xl->getActiveSheet()->setCellValue('G9', 'Udara Bias');

$xl->getActiveSheet()->mergeCells('G10:G11');
$xl->getActiveSheet()->setCellValue('G10', 'A');

$xl->getActiveSheet()->mergeCells('H10:H11');
$xl->getActiveSheet()->setCellValue('H10', 'B');

$xl->getActiveSheet()->mergeCells('I9:I11');
$xl->getActiveSheet()->setCellValue('I9', 'Bahan Bakar Masuk Mesin');

$xl->getActiveSheet()->mergeCells('J9:J11');
$xl->getActiveSheet()->setCellValue('J9', 'Minyak Pelumas Tuas katup');

$xl->getActiveSheet()->mergeCells('K9:K11');
$xl->getActiveSheet()->setCellValue('K9', 'Minyak Pendingin Injektor');

$xl->getActiveSheet()->mergeCells("L8:L11");
$xl->getActiveSheet()->setCellValue("L8", "Gas Buang \n (mmH2O)");

$xl->getActiveSheet()->mergeCells("M8:M11");
$xl->getActiveSheet()->setCellValue("M8", "Load Limit \n Governor");

$xl->getActiveSheet()->mergeCells("N8:Y8");
$xl->getActiveSheet()->setCellValue("N8", "Rack Bahan Bakar (mm)");

$xl->getActiveSheet()->mergeCells("N9:S9");
$xl->getActiveSheet()->setCellValue("N9", "Silinder A");

$xl->getActiveSheet()->mergeCells("T9:Y9");
$xl->getActiveSheet()->setCellValue("T9", "Silinder B");

$xl->getActiveSheet()->mergeCells("N10:N11");
$xl->getActiveSheet()->setCellValue("N10", "1 A");

$xl->getActiveSheet()->mergeCells("O10:O11");
$xl->getActiveSheet()->setCellValue("O10", "2 A");

$xl->getActiveSheet()->mergeCells("P10:P11");
$xl->getActiveSheet()->setCellValue("P10", "3 A");

$xl->getActiveSheet()->mergeCells("Q10:Q11");
$xl->getActiveSheet()->setCellValue("Q10", "4 A");

$xl->getActiveSheet()->mergeCells("R10:R11");
$xl->getActiveSheet()->setCellValue("R10", "5 A");

$xl->getActiveSheet()->mergeCells("S10:S11");
$xl->getActiveSheet()->setCellValue("S10", "6 A");

$xl->getActiveSheet()->mergeCells("T10:T11");
$xl->getActiveSheet()->setCellValue("T10", "1 B");

$xl->getActiveSheet()->mergeCells("U10:U11");
$xl->getActiveSheet()->setCellValue("U10", "2 B");

$xl->getActiveSheet()->mergeCells("V10:V11");
$xl->getActiveSheet()->setCellValue("V10", "3 B");

$xl->getActiveSheet()->mergeCells("W10:W11");
$xl->getActiveSheet()->setCellValue("W10", "4 B");

$xl->getActiveSheet()->mergeCells("X10:X11");
$xl->getActiveSheet()->setCellValue("X10", "5 B");

$xl->getActiveSheet()->mergeCells("Y10:Y11");
$xl->getActiveSheet()->setCellValue("Y10", "6 B");

$xl->getActiveSheet()->mergeCells("Z8:AY8");
$xl->getActiveSheet()->setCellValue("Z8", "Temperature");

$xl->getActiveSheet()->mergeCells("Z9:Z11");
$xl->getActiveSheet()->setCellValue("Z9", "BB Mesin");

$xl->getActiveSheet()->mergeCells("AA9:AB9");
$xl->getActiveSheet()->setCellValue("AA9", "Minyak Pendingin \n Injektor");

$xl->getActiveSheet()->mergeCells("AA10:AA11");
$xl->getActiveSheet()->setCellValue("AA10", "Masuk");

$xl->getActiveSheet()->mergeCells("AB10:AB11");
$xl->getActiveSheet()->setCellValue("AB10", "Keluar");

$xl->getActiveSheet()->mergeCells("AC9:AN9");
$xl->getActiveSheet()->setCellValue("AC9", "Air Pendingin");

$xl->getActiveSheet()->mergeCells("AC10:AH10");
$xl->getActiveSheet()->setCellValue("AC10", "Keluar Silinder A");

$xl->getActiveSheet()->mergeCells("AI10:AN10");
$xl->getActiveSheet()->setCellValue("AI10", "Keluar Silinder B");

$xl->getActiveSheet()->setCellValue("AC11", "1 A");
$xl->getActiveSheet()->setCellValue("AD11", "2 A");
$xl->getActiveSheet()->setCellValue("AE11", "3 A");
$xl->getActiveSheet()->setCellValue("AF11", "4 A");
$xl->getActiveSheet()->setCellValue("AG11", "5 A");
$xl->getActiveSheet()->setCellValue("AH11", "6 A");
$xl->getActiveSheet()->setCellValue("AI11", "1 B");
$xl->getActiveSheet()->setCellValue("AJ11", "2 B");
$xl->getActiveSheet()->setCellValue("AK11", "3 B");
$xl->getActiveSheet()->setCellValue("AL11", "4 B");
$xl->getActiveSheet()->setCellValue("AM11", "5 B");
$xl->getActiveSheet()->setCellValue("AN11", "6 B");

$xl->getActiveSheet()->mergeCells("AO9:AS9");
$xl->getActiveSheet()->setCellValue("AO9", "Udara");

$xl->getActiveSheet()->mergeCells("AT9:AY9");
$xl->getActiveSheet()->setCellValue("AT9", "Radiator");

$xl->getActiveSheet()->mergeCells("AO10:AP10");
$xl->getActiveSheet()->setCellValue("AO10", "Masuk Intercoooler");

$xl->getActiveSheet()->mergeCells("AQ10:AR10");
$xl->getActiveSheet()->setCellValue("AQ10", "Keluar Intercoooler");

$xl->getActiveSheet()->setCellValue("AO11", "A");
$xl->getActiveSheet()->setCellValue("AP11", "B");
$xl->getActiveSheet()->setCellValue("AQ11", "A");
$xl->getActiveSheet()->setCellValue("AR11", "B");

$xl->getActiveSheet()->mergeCells("AS10:AS11");
$xl->getActiveSheet()->setCellValue("AS10", "Masuk Filter\n(Blower)");

$xl->getActiveSheet()->mergeCells("AT10:AU10");
$xl->getActiveSheet()->setCellValue("AT10", "Minyak Pelumas");

$xl->getActiveSheet()->mergeCells("AV10:AW10");
$xl->getActiveSheet()->setCellValue("AV10", "Air Pendingin\nMesin");

$xl->getActiveSheet()->mergeCells("AX10:AY10");
$xl->getActiveSheet()->setCellValue("AX10", "Air Pendingin\nIntercooler");

$xl->getActiveSheet()->setCellValue("AT11", "Masuk");
$xl->getActiveSheet()->setCellValue("AU11", "Keluar");
$xl->getActiveSheet()->setCellValue("AV11", "Masuk");
$xl->getActiveSheet()->setCellValue("AW11", "Keluar");
$xl->getActiveSheet()->setCellValue("AX11", "Masuk");
$xl->getActiveSheet()->setCellValue("AY11", "Keluar");

$xl->getActiveSheet()->mergeCells("AZ8:AZ11");
$xl->getActiveSheet()->setCellValue("AZ8", "KWH PS");

$xl->getActiveSheet()->mergeCells("BA8:BC10");
$xl->getActiveSheet()->setCellValue("BA8", "Stand Flow Meter HSD/MFO");

$xl->getActiveSheet()->setCellValue("BA11", "HSD");
$xl->getActiveSheet()->setCellValue("BB11", "MFO IN");
$xl->getActiveSheet()->setCellValue("BC11", "MFO RETURN");

$xl->getActiveSheet()->mergeCells("BD8:BD11");
$xl->getActiveSheet()->setCellValue("BD8", "Waktu \n Input");

$xl->getActiveSheet()->mergeCells("BE8:BE11");
$xl->getActiveSheet()->setCellValue("BE8", "Operator");

// Loop data
$line = 12;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['tanggal_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['jam']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['air_pendingin_mesin']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['air_pendingin_intercooler']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['minyak_pelumas_masuk_mesin']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['udara_bilas_a']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['udara_bilas_b']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['bahan_bakar_masuk_mesin']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['minyak_pelumas_tuas_katup']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['minyak_pendingin_injektor']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['gas_buang']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['load_limit_governor']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['silinder_sisi_a_1']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['silinder_sisi_a_2']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['silinder_sisi_a_3']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['silinder_sisi_a_4']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['silinder_sisi_a_5']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['silinder_sisi_a_6']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['silinder_sisi_b_1']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['silinder_sisi_b_2']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['silinder_sisi_b_3']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['silinder_sisi_b_4']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['silinder_sisi_b_5']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['silinder_sisi_b_6']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['bahan_bakar_mesin_masuk']);
    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['minyak_pendingin_injektor_masuk']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['minyak_pendingin_injektor_keluar']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['air_pendingin_silinder_a_1']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['air_pendingin_silinder_a_2']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['air_pendingin_silinder_a_3']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['air_pendingin_silinder_a_4']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['air_pendingin_silinder_a_5']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['air_pendingin_silinder_a_6']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['air_pendingin_silinder_b_1']);
    $xl->getActiveSheet()->setCellValue('AJ' . $line, $row['air_pendingin_silinder_b_2']);
    $xl->getActiveSheet()->setCellValue('AK' . $line, $row['air_pendingin_silinder_b_3']);
    $xl->getActiveSheet()->setCellValue('AL' . $line, $row['air_pendingin_silinder_b_4']);
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['air_pendingin_silinder_b_5']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['air_pendingin_silinder_b_6']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['udara_masuk_intercooler_a']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['udara_masuk_intercooler_b']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['udara_keluar_intercooler_a']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['udara_keluar_intercooler_b']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['masuk_filter']);
    $xl->getActiveSheet()->setCellValue('AT' . $line, $row['radiator_minyak_pelumas_masuk']);
    $xl->getActiveSheet()->setCellValue('AU' . $line, $row['radiator_minyak_pelumas_keluar']);
    $xl->getActiveSheet()->setCellValue('AV' . $line, $row['radiator_air_pendingin_mesin_masuk']);
    $xl->getActiveSheet()->setCellValue('AW' . $line, $row['radiator_air_pendingin_mesin_keluar']);
    $xl->getActiveSheet()->setCellValue('AX' . $line, $row['radiator_air_pendingin_intercooler_masuk']);
    $xl->getActiveSheet()->setCellValue('AY' . $line, $row['radiator_air_pendingin_intercooler_keluar']);
    $xl->getActiveSheet()->setCellValue('AZ' . $line, $row['kwh_ps']);
    $xl->getActiveSheet()->setCellValue('BA' . $line, $row['hsd']);
    $xl->getActiveSheet()->setCellValue('BB' . $line, $row['mfo_in']);
    $xl->getActiveSheet()->setCellValue('BC' . $line, $row['mfo_return']);
    $xl->getActiveSheet()->setCellValue('BD' . $line, $row['waktu_input']);
    $xl->getActiveSheet()->setCellValue('BE' . $line, $row['operator']);

    $line++;
}

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

$xl->getActiveSheet()->getStyle('A8:BE11')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:BE' . $line)->applyFromArray($styleArray);
unset($styleArray);
