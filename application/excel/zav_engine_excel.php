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
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Log Ampenan Zav Engine');

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

$xl->getActiveSheet()->mergeCells('D7:M7');
$xl->getActiveSheet()->setCellValue('D7', 'Generator');
$xl->getActiveSheet()->mergeCells('D8:D9');
$xl->getActiveSheet()->setCellValue('D8', 'Tegangan (Kv)');
$xl->getActiveSheet()->mergeCells('E8:E9');
$xl->getActiveSheet()->setCellValue('E8', 'Frekuensi (Hz)');
$xl->getActiveSheet()->mergeCells('F8:F9');
$xl->getActiveSheet()->setCellValue('F8', 'Faktor Daya (Cos)');
$xl->getActiveSheet()->mergeCells('G8:G9');
$xl->getActiveSheet()->setCellValue('G8', 'Daya Semu (MVAR)');
$xl->getActiveSheet()->mergeCells('H8:H9');
$xl->getActiveSheet()->setCellValue('H8', 'Beban (MW)');
$xl->getActiveSheet()->mergeCells('I8:K8');
$xl->getActiveSheet()->setCellValue('I8', 'Arus (kA)');
$xl->getActiveSheet()->setCellValue('I9', 'R');
$xl->getActiveSheet()->setCellValue('J9', 'S');
$xl->getActiveSheet()->setCellValue('K9', 'T');
$xl->getActiveSheet()->mergeCells('L8:M8');
$xl->getActiveSheet()->setCellValue('L8', 'Penguat Medan (Exciter)');
$xl->getActiveSheet()->setCellValue('L9', 'Arus');
$xl->getActiveSheet()->setCellValue('M9', 'Tegangan');

$xl->getActiveSheet()->mergeCells('N7:N9');
$xl->getActiveSheet()->setCellValue('N7', 'Bearing');

$xl->getActiveSheet()->mergeCells('O7:Q7');
$xl->getActiveSheet()->setCellValue('O7', 'Sikap KWh Meter');
$xl->getActiveSheet()->mergeCells('O8:P8');
$xl->getActiveSheet()->setCellValue('O8', 'KWh Produksi');
$xl->getActiveSheet()->setCellValue('O9', 'HSD');
$xl->getActiveSheet()->setCellValue('P9', 'MFO');
$xl->getActiveSheet()->mergeCells('Q8:Q9');
$xl->getActiveSheet()->setCellValue('Q8', 'KWh Alat Bantu');

$xl->getActiveSheet()->mergeCells('R7:T8');
$xl->getActiveSheet()->setCellValue('R7', 'Arus (A)');
$xl->getActiveSheet()->setCellValue('R9', 'R');
$xl->getActiveSheet()->setCellValue('S9', 'S');
$xl->getActiveSheet()->setCellValue('T9', 'T');

$xl->getActiveSheet()->mergeCells('U7:U9');
$xl->getActiveSheet()->setCellValue('U7', 'Level Becomes');

$xl->getActiveSheet()->mergeCells('V7:V9');
$xl->getActiveSheet()->setCellValue('V7', 'Waktu Input');

$xl->getActiveSheet()->mergeCells('W7:W9');
$xl->getActiveSheet()->setCellValue('W7', 'Operator');



// Loop data
$line = 10;
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
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['arus_a_r']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['arus_a_s']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['arus_a_t']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['penguat_medan_arus']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['penguat_medan_tegangan']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['bearing']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['kwh_produksi_hsd']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['kwh_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['kwh_alat_bantu']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['arus_b_r']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['arus_b_s']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['arus_b_t']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['level_becomes']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['waktu_input']);
    $xl->getActiveSheet()->setCellValue('W' . $line, $row['operator']);

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
