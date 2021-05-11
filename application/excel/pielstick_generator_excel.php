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
foreach (range('A', 'W') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:W1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Ampenan Pielstick Generator');

// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header
$xl->getActiveSheet()->mergeCells('A7:A9');
$xl->getActiveSheet()->setCellValue('A7', 'No');

$xl->getActiveSheet()->mergeCells('B7:B9');
$xl->getActiveSheet()->setCellValue('B7', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C7:C9');
$xl->getActiveSheet()->setCellValue('C7', 'Waktu');

$xl->getActiveSheet()->mergeCells('D7:U7');
$xl->getActiveSheet()->setCellValue('D7', 'Generator');
$xl->getActiveSheet()->mergeCells('D8:D9');
$xl->getActiveSheet()->setCellValue('D8', 'Tegangan ( KV )');
$xl->getActiveSheet()->mergeCells('E8:E9');
$xl->getActiveSheet()->setCellValue('E8', 'Frekwensi ( HZ )');
$xl->getActiveSheet()->mergeCells('F8:F9');
$xl->getActiveSheet()->setCellValue('F8', 'Faktor Daya (COSƿ)');
$xl->getActiveSheet()->mergeCells('G8:G9');
$xl->getActiveSheet()->setCellValue('G8', 'Daya Semu (MVAR)');
$xl->getActiveSheet()->mergeCells('H8:H9');
$xl->getActiveSheet()->setCellValue('H8', 'Beban ( KW )');
$xl->getActiveSheet()->mergeCells('I8:K8');
$xl->getActiveSheet()->setCellValue('I8', 'Arus ( AMPERE )');
$xl->getActiveSheet()->setCellValue('I9', 'R');
$xl->getActiveSheet()->setCellValue('J9', 'S');
$xl->getActiveSheet()->setCellValue('K9', 'T');
$xl->getActiveSheet()->mergeCells('L8:M8');
$xl->getActiveSheet()->setCellValue('L8', 'Penguat Medan ( Exciter )');
$xl->getActiveSheet()->setCellValue('L9', 'TEG (V)');
$xl->getActiveSheet()->setCellValue('M9', 'ARUS ( A )');

$xl->getActiveSheet()->mergeCells('N8:S8');
$xl->getActiveSheet()->setCellValue('N8', 'Kumparan Generator');
$xl->getActiveSheet()->setCellValue('N9', '1');
$xl->getActiveSheet()->setCellValue('O9', '2');
$xl->getActiveSheet()->setCellValue('P9', '3');
$xl->getActiveSheet()->setCellValue('Q9', '4');
$xl->getActiveSheet()->setCellValue('R9', '5');
$xl->getActiveSheet()->setCellValue('S9', '6');
$xl->getActiveSheet()->mergeCells('T8:T9');
$xl->getActiveSheet()->setCellValue('T8', 'Bantalan Generator');
$xl->getActiveSheet()->mergeCells('U8:U9');
$xl->getActiveSheet()->setCellValue('U8', 'Udara Pendingin');

$xl->getActiveSheet()->mergeCells('V7:V9');
$xl->getActiveSheet()->setCellValue('V7', 'KWH Produksi');
$xl->getActiveSheet()->mergeCells('W7:W9');
$xl->getActiveSheet()->setCellValue('W9', 'Flow Meter Bahan Bakar');


// Loop data
$line = 10;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['tegangan']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['frekwensi']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['faktor_daya']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['daya_semu']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['beban']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['arus_r']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['arus_s']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['arus_t']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['penguat_medan_teg']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['penguat_medan_arus']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['kumparan_generator1']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['kumparan_generator2']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['kumparan_generator3']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['kumparan_generator4']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['kumparan_generator5']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['kumparan_generator6']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['bantalan_generator']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['udara_pendingin']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['kwh_produksi']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['flow_meter_bahan_bakar']);


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
$xl->getActiveSheet()->getStyle('A1:W1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:W9')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:W' . $line)->applyFromArray($styleArray);
unset($styleArray);
