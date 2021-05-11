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
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Ampenan Niigata Engine');

// Setup Mesin
$xl->getActiveSheet()->mergeCells('B3:D3');
$xl->getActiveSheet()->setCellValue('B3', 'MESIN');

$xl->getActiveSheet()->setCellValue('B4', 'MESIN NO');
$xl->getActiveSheet()->setCellValue('B5', 'MEREK');
$xl->getActiveSheet()->setCellValue('B6', 'TYPE');
$xl->getActiveSheet()->setCellValue('B7', 'NO. SERIE');
$xl->getActiveSheet()->setCellValue('B8', 'DAYA');
$xl->getActiveSheet()->setCellValue('B9', 'PUTARAN');
// Mesin Value
$xl->getActiveSheet()->setCellValue('D4', ': Kosong');
$xl->getActiveSheet()->setCellValue('D5', ': Kosong');
$xl->getActiveSheet()->setCellValue('D6', ': Kosong');
$xl->getActiveSheet()->setCellValue('D7', ': Kosong');
$xl->getActiveSheet()->setCellValue('D8', ': Kosong');
$xl->getActiveSheet()->setCellValue('D9', ': Kosong');

// Setup PLTD
$xl->getActiveSheet()->setCellValue('F3', 'PLTD');
$xl->getActiveSheet()->setCellValue('F5', 'HARI / TANGGAL');
$xl->getActiveSheet()->setCellValue('F7', 'DICETAK OLEH');
// PLTD Value
$xl->getActiveSheet()->setCellValue('G3', ': AMPENAN');
$xl->getActiveSheet()->setCellValue('G5', date('d-m-Y'));
$xl->getActiveSheet()->setCellValue('G7', $param['user']['name']);

// Setup Generator
$xl->getActiveSheet()->mergeCells('I3:J3');
$xl->getActiveSheet()->setCellValue('I3', 'GENERATOR');

$xl->getActiveSheet()->setCellValue('I4', 'MEREK');
$xl->getActiveSheet()->setCellValue('I5', 'TYPE');
$xl->getActiveSheet()->setCellValue('I6', 'TEGANGAN');
$xl->getActiveSheet()->setCellValue('I6', 'DAYA');

$xl->getActiveSheet()->setCellValue('J4', ': Kosong');
$xl->getActiveSheet()->setCellValue('J5', ': Kosong');
$xl->getActiveSheet()->setCellValue('J6', ': Kosong');
$xl->getActiveSheet()->setCellValue('J6', ': Kosong');

// Set Header
$xl->getActiveSheet()->mergeCells('A11:A14');
$xl->getActiveSheet()->setCellValue('A11', 'No');

$xl->getActiveSheet()->mergeCells('B11:B14');
$xl->getActiveSheet()->setCellValue('B11', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C11:C14');
$xl->getActiveSheet()->setCellValue('C11', 'Jam');

$xl->getActiveSheet()->mergeCells('D11:K11');
$xl->getActiveSheet()->setCellValue('D11', 'TEKANAN');

$xl->getActiveSheet()->mergeCells('D12:E12');
$xl->getActiveSheet()->setCellValue('D12', 'Air Pendingin');

$xl->getActiveSheet()->mergeCells('D13:D14');
$xl->getActiveSheet()->setCellValue('D13', 'Masuk Mesin');

$xl->getActiveSheet()->mergeCells('E13:E14');
$xl->getActiveSheet()->setCellValue('E13', 'Masuk Intercooler');

$xl->getActiveSheet()->mergeCells('F12:F14');
$xl->getActiveSheet()->setCellValue('F12', 'Minyak Pelumas Mesin');

$xl->getActiveSheet()->mergeCells('G12:H12');
$xl->getActiveSheet()->setCellValue('G12', 'Udara Bias');

$xl->getActiveSheet()->mergeCells('G13:G14');
$xl->getActiveSheet()->setCellValue('G13', 'A');

$xl->getActiveSheet()->mergeCells('H13:H14');
$xl->getActiveSheet()->setCellValue('H13', 'B');

$xl->getActiveSheet()->mergeCells('I12:I14');
$xl->getActiveSheet()->setCellValue('I12', 'Bahan Bakar Masuk Mesin');

$xl->getActiveSheet()->mergeCells('J12:J14');
$xl->getActiveSheet()->setCellValue('J12', 'Minyak Pelumas Tuas katup');

$xl->getActiveSheet()->mergeCells('K12:K14');
$xl->getActiveSheet()->setCellValue('K12', 'Minyak Pendingin Injektor');

$xl->getActiveSheet()->mergeCells("L11:L14");
$xl->getActiveSheet()->setCellValue("L11", "Gas Buang \n (mmH2O)");

$xl->getActiveSheet()->mergeCells("M11:M14");
$xl->getActiveSheet()->setCellValue("M11", "Load Limit \n Governor");

$xl->getActiveSheet()->mergeCells("N11:Y11");
$xl->getActiveSheet()->setCellValue("N11", "Rack Bahan Bakar (mm)");

$xl->getActiveSheet()->mergeCells("N12:S12");
$xl->getActiveSheet()->setCellValue("N12", "Silinder A");

$xl->getActiveSheet()->mergeCells("T12:Y12");
$xl->getActiveSheet()->setCellValue("T12", "Silinder B");

$xl->getActiveSheet()->mergeCells("N13:N14");
$xl->getActiveSheet()->setCellValue("N13", "1 A");

$xl->getActiveSheet()->mergeCells("O13:O14");
$xl->getActiveSheet()->setCellValue("O13", "2 A");

$xl->getActiveSheet()->mergeCells("P13:P14");
$xl->getActiveSheet()->setCellValue("P13", "3 A");

$xl->getActiveSheet()->mergeCells("Q13:Q14");
$xl->getActiveSheet()->setCellValue("Q13", "4 A");

$xl->getActiveSheet()->mergeCells("R13:R14");
$xl->getActiveSheet()->setCellValue("R13", "5 A");

$xl->getActiveSheet()->mergeCells("S13:S14");
$xl->getActiveSheet()->setCellValue("S13", "6 A");

$xl->getActiveSheet()->mergeCells("T13:T14");
$xl->getActiveSheet()->setCellValue("T13", "1 B");

$xl->getActiveSheet()->mergeCells("U13:U14");
$xl->getActiveSheet()->setCellValue("U13", "2 B");

$xl->getActiveSheet()->mergeCells("V13:V14");
$xl->getActiveSheet()->setCellValue("V13", "3 B");

$xl->getActiveSheet()->mergeCells("W13:W14");
$xl->getActiveSheet()->setCellValue("W13", "4 B");

$xl->getActiveSheet()->mergeCells("X13:X14");
$xl->getActiveSheet()->setCellValue("X13", "5 B");

$xl->getActiveSheet()->mergeCells("Y13:Y14");
$xl->getActiveSheet()->setCellValue("Y13", "6 B");

$xl->getActiveSheet()->mergeCells("Z11:AY11");
$xl->getActiveSheet()->setCellValue("Z11", "Temperature");

$xl->getActiveSheet()->mergeCells("Z12:Z14");
$xl->getActiveSheet()->setCellValue("Z12", "BB Mesin");

$xl->getActiveSheet()->mergeCells("AA12:AB12");
$xl->getActiveSheet()->setCellValue("AA12", "Minyak Pendingin \n Injektor");

$xl->getActiveSheet()->mergeCells("AA13:AA14");
$xl->getActiveSheet()->setCellValue("AA13", "Masuk");

$xl->getActiveSheet()->mergeCells("AB13:AB14");
$xl->getActiveSheet()->setCellValue("AB13", "Keluar");

$xl->getActiveSheet()->mergeCells("AC12:AN12");
$xl->getActiveSheet()->setCellValue("AC12", "Air Pendingin");

$xl->getActiveSheet()->mergeCells("AC13:AH13");
$xl->getActiveSheet()->setCellValue("AC13", "Keluar Silinder A");

$xl->getActiveSheet()->mergeCells("AI13:AN13");
$xl->getActiveSheet()->setCellValue("AI13", "Keluar Silinder B");

$xl->getActiveSheet()->setCellValue("AC14", "1 A");
$xl->getActiveSheet()->setCellValue("AD14", "2 A");
$xl->getActiveSheet()->setCellValue("AE14", "3 A");
$xl->getActiveSheet()->setCellValue("AF14", "4 A");
$xl->getActiveSheet()->setCellValue("AG14", "5 A");
$xl->getActiveSheet()->setCellValue("AH14", "6 A");
$xl->getActiveSheet()->setCellValue("AI14", "1 B");
$xl->getActiveSheet()->setCellValue("AJ14", "2 B");
$xl->getActiveSheet()->setCellValue("AK14", "3 B");
$xl->getActiveSheet()->setCellValue("AL14", "4 B");
$xl->getActiveSheet()->setCellValue("AM14", "5 B");
$xl->getActiveSheet()->setCellValue("AN14", "6 B");

$xl->getActiveSheet()->mergeCells("AO12:AS12");
$xl->getActiveSheet()->setCellValue("AO12", "Udara");

$xl->getActiveSheet()->mergeCells("AT12:AY12");
$xl->getActiveSheet()->setCellValue("AT12", "Radiator");

$xl->getActiveSheet()->mergeCells("AO13:AP13");
$xl->getActiveSheet()->setCellValue("AO13", "Masuk Intercoooler");

$xl->getActiveSheet()->mergeCells("AQ13:AR13");
$xl->getActiveSheet()->setCellValue("AQ13", "Keluar Intercoooler");

$xl->getActiveSheet()->setCellValue("AO14", "A");
$xl->getActiveSheet()->setCellValue("AP14", "B");
$xl->getActiveSheet()->setCellValue("AQ14", "A");
$xl->getActiveSheet()->setCellValue("AR14", "B");

$xl->getActiveSheet()->mergeCells("AS13:AS14");
$xl->getActiveSheet()->setCellValue("AS13", "Masuk Filter\n(Blower)");

$xl->getActiveSheet()->mergeCells("AT13:AU13");
$xl->getActiveSheet()->setCellValue("AT13", "Minyak Pelumas");

$xl->getActiveSheet()->mergeCells("AV13:AW13");
$xl->getActiveSheet()->setCellValue("AV13", "Air Pendingin\nMesin");

$xl->getActiveSheet()->mergeCells("AX13:AY13");
$xl->getActiveSheet()->setCellValue("AX13", "Air Pendingin\nIntercooler");

$xl->getActiveSheet()->setCellValue("AT14", "Masuk");
$xl->getActiveSheet()->setCellValue("AU14", "Keluar");
$xl->getActiveSheet()->setCellValue("AV14", "Masuk");
$xl->getActiveSheet()->setCellValue("AW14", "Keluar");
$xl->getActiveSheet()->setCellValue("AX14", "Masuk");
$xl->getActiveSheet()->setCellValue("AY14", "Keluar");

$xl->getActiveSheet()->mergeCells("AZ11:AZ14");
$xl->getActiveSheet()->setCellValue("AZ11", "KWH PS");

$xl->getActiveSheet()->mergeCells("BA11:BC13");
$xl->getActiveSheet()->setCellValue("BA11", "Stand Flow Meter HSD/MFO");

$xl->getActiveSheet()->setCellValue("BA14", "HSD");
$xl->getActiveSheet()->setCellValue("BB14", "MFO IN");
$xl->getActiveSheet()->setCellValue("BC14", "MFO RETURN");

$xl->getActiveSheet()->mergeCells("BD11:BD14");
$xl->getActiveSheet()->setCellValue("BD11", "Waktu \n Input");

$xl->getActiveSheet()->mergeCells("BE11:BE14");
$xl->getActiveSheet()->setCellValue("BE11", "Operator");

// Loop data
$line = 15;
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

$xl->getActiveSheet()->getStyle('A11:BE14')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A13:BE' . $line)->applyFromArray($styleArray);
unset($styleArray);
