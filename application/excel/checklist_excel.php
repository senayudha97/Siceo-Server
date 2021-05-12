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

$second = $this->cellRange('AA', 'AS');

foreach ($second as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:N1');
$xl->getActiveSheet()->setCellValue('A1', 'PATROL CHECK MESIN');

// Setup Mesin
$xl->getActiveSheet()->setCellValue('B3', 'NOMOR DOKUMEN');
$xl->getActiveSheet()->setCellValue('B4', 'EDISI REVISI');
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
$xl->getActiveSheet()->mergeCells('A8:A10');
$xl->getActiveSheet()->setCellValue('A8', 'No');

$xl->getActiveSheet()->mergeCells('B8:B10');
$xl->getActiveSheet()->setCellValue('B8', 'Jam');

$xl->getActiveSheet()->mergeCells('C8:AS8');
$xl->getActiveSheet()->setCellValue('C8', 'Lokasi');

$xl->getActiveSheet()->mergeCells('C9:K9');
$xl->getActiveSheet()->setCellValue('C9', 'Cylinder Head');
$xl->getActiveSheet()->setCellValue('C10', 'a. Pelumasan');
$xl->getActiveSheet()->setCellValue('D10', 'b. Getaran');
$xl->getActiveSheet()->setCellValue('E10', 'c. Bunyi');
$xl->getActiveSheet()->setCellValue('F10', 'd. Kebocoran pelumas');
$xl->getActiveSheet()->setCellValue('G10', 'e. Kebocoran solar');
$xl->getActiveSheet()->setCellValue('H10', 'f. Kebocoran air');
$xl->getActiveSheet()->setCellValue('I10', 'g. Kebocoran gas buang');
$xl->getActiveSheet()->setCellValue('J10', 'h. Kondisi laut');
$xl->getActiveSheet()->setCellValue('K10', 'i. Kebersihan');

$xl->getActiveSheet()->mergeCells('L9:S9');
$xl->getActiveSheet()->setCellValue('L9', 'Injection Pump');
$xl->getActiveSheet()->setCellValue('L10', 'Pelumasan');
$xl->getActiveSheet()->setCellValue('M10', 'Getaran');
$xl->getActiveSheet()->setCellValue('N10', 'Bunyi');
$xl->getActiveSheet()->setCellValue('O10', 'Kebocoran pelumas');
$xl->getActiveSheet()->setCellValue('P10', 'Kebocoran solar');
$xl->getActiveSheet()->setCellValue('Q10', 'Kondisi baut');
$xl->getActiveSheet()->setCellValue('R10', 'Kondisi rack');
$xl->getActiveSheet()->setCellValue('S10', 'Kebersihan');

$xl->getActiveSheet()->mergeCells('T9:X9');
$xl->getActiveSheet()->setCellValue('T9', 'Governor');
$xl->getActiveSheet()->setCellValue('T10', 'Pelumasan');
$xl->getActiveSheet()->setCellValue('U10', 'Getaran');
$xl->getActiveSheet()->setCellValue('V10', 'Kebocoran pelumas');
$xl->getActiveSheet()->setCellValue('W10', 'Kondisi baut');
$xl->getActiveSheet()->setCellValue('X10', 'Kebersihan');

$xl->getActiveSheet()->mergeCells('Y9:AE9');
$xl->getActiveSheet()->setCellValue('Y9', 'System Gas Buang');
$xl->getActiveSheet()->setCellValue('Y10', 'Getaran turbocharger');
$xl->getActiveSheet()->setCellValue('Z10', 'Bunyi turbocharger');
$xl->getActiveSheet()->setCellValue('AA10', 'Pelumas turbio');
$xl->getActiveSheet()->setCellValue('AB10', 'Kebocoran pelumas turbo');
$xl->getActiveSheet()->setCellValue('AC10', 'Kebocoran air turbo');
$xl->getActiveSheet()->setCellValue('AD10', 'Kebocoran gas buang');
$xl->getActiveSheet()->setCellValue('AE10', 'Kebocoran udara masuk');

$xl->getActiveSheet()->mergeCells('AF9:AM9');
$xl->getActiveSheet()->setCellValue('AF9', 'Blok Mesin');
$xl->getActiveSheet()->setCellValue('AF10', 'Pelumasan');
$xl->getActiveSheet()->setCellValue('AG10', 'Getaran');
$xl->getActiveSheet()->setCellValue('AH10', 'Bunyi');
$xl->getActiveSheet()->setCellValue('AI10', 'Kebocoran pelumas');
$xl->getActiveSheet()->setCellValue('AJ10', 'Kebocoran solar');
$xl->getActiveSheet()->setCellValue('AK10', 'Kebocoran air');
$xl->getActiveSheet()->setCellValue('AL10', 'Kondisi baut');
$xl->getActiveSheet()->setCellValue('AM10', 'Kebersihan');

$xl->getActiveSheet()->mergeCells('AN9:AS9');
$xl->getActiveSheet()->setCellValue('AN9', 'Generator');
$xl->getActiveSheet()->setCellValue('AN10', 'Pelumasan');
$xl->getActiveSheet()->setCellValue('AO10', 'Getaran');
$xl->getActiveSheet()->setCellValue('AP10', 'Bunyi');
$xl->getActiveSheet()->setCellValue('AQ10', 'Kondisi baut');
$xl->getActiveSheet()->setCellValue('AR10', 'Kebersihan saringan');
$xl->getActiveSheet()->setCellValue('AS10', 'Kebersihan');



// Loop data
$line = 11;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['waktu_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['ch_a']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['ch_b']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['ch_c']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['ch_d']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['ch_e']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['ch_f']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['ch_g']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['ch_h']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['ch_i']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['ip_a']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['ip_b']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['ip_c']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['ip_d']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['ip_e']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['ip_f']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['ip_g']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['ip_h']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['gov_a']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['gov_b']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['gov_c']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['gov_d']);
    $xl->getActiveSheet()->setCellValue('X' . $line, $row['gov_e']);
    $xl->getActiveSheet()->setCellValue('Y' . $line, $row['sgb_a']);
    $xl->getActiveSheet()->setCellValue('Z' . $line, $row['sgb_b']);
    $xl->getActiveSheet()->setCellValue('AA' . $line, $row['sgb_c']);
    $xl->getActiveSheet()->setCellValue('AB' . $line, $row['sgb_d']);
    $xl->getActiveSheet()->setCellValue('AC' . $line, $row['sgb_e']);
    $xl->getActiveSheet()->setCellValue('AD' . $line, $row['sgb_f']);
    $xl->getActiveSheet()->setCellValue('AE' . $line, $row['sgb_g']);
    $xl->getActiveSheet()->setCellValue('AF' . $line, $row['bm_a']);
    $xl->getActiveSheet()->setCellValue('AG' . $line, $row['bm_b']);
    $xl->getActiveSheet()->setCellValue('AH' . $line, $row['bm_c']);
    $xl->getActiveSheet()->setCellValue('AI' . $line, $row['bm_d']);
    $xl->getActiveSheet()->setCellValue('AJ' . $line, $row['bm_e']);
    $xl->getActiveSheet()->setCellValue('AK' . $line, $row['bm_f']);
    $xl->getActiveSheet()->setCellValue('AL' . $line, $row['bm_g']);
    $xl->getActiveSheet()->setCellValue('AM' . $line, $row['bm_h']);
    $xl->getActiveSheet()->setCellValue('AN' . $line, $row['gen_a']);
    $xl->getActiveSheet()->setCellValue('AO' . $line, $row['gen_b']);
    $xl->getActiveSheet()->setCellValue('AP' . $line, $row['gen_c']);
    $xl->getActiveSheet()->setCellValue('AQ' . $line, $row['gen_g']);
    $xl->getActiveSheet()->setCellValue('AR' . $line, $row['gen_h']);
    $xl->getActiveSheet()->setCellValue('AS' . $line, $row['gen_i']);

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

$xl->getActiveSheet()->getStyle('A8:AS10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:AS' . $line)->applyFromArray($styleArray);
unset($styleArray);
