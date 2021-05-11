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
foreach (range('A', 'V') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:V1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Log Ampenan Zv Generator');

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

$xl->getActiveSheet()->mergeCells('D7:O7');
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
$xl->getActiveSheet()->mergeCells('L8:L10');
$xl->getActiveSheet()->setCellValue('L8', 'Penguat Medan (Exciter)');
$xl->getActiveSheet()->mergeCells('M8:O8');
$xl->getActiveSheet()->setCellValue('M8', 'Suhu (C)');
$xl->getActiveSheet()->mergeCells('M9:O9');
$xl->getActiveSheet()->setCellValue('M9', 'Winding');
$xl->getActiveSheet()->setCellValue('M10', '1');
$xl->getActiveSheet()->setCellValue('N10', '2');
$xl->getActiveSheet()->setCellValue('O10', '3');

$xl->getActiveSheet()->mergeCells('P7:P10');
$xl->getActiveSheet()->setCellValue('P7', 'Bearing');

$xl->getActiveSheet()->mergeCells('Q7:S8');
$xl->getActiveSheet()->setCellValue('Q7', 'Sikap KWh Meter');
$xl->getActiveSheet()->mergeCells('Q9:R9');
$xl->getActiveSheet()->setCellValue('Q9', 'KWh Produksi');
$xl->getActiveSheet()->setCellValue('Q10', 'HSD');
$xl->getActiveSheet()->setCellValue('R10', 'MFO');
$xl->getActiveSheet()->mergeCells('S9:S10');
$xl->getActiveSheet()->setCellValue('S9', 'KWh Alat Bantu');

$xl->getActiveSheet()->mergeCells('T7:T10');
$xl->getActiveSheet()->setCellValue('T7', 'Level Becomes');

$xl->getActiveSheet()->mergeCells('U7:U10');
$xl->getActiveSheet()->setCellValue('U7', 'Waktu Input');

$xl->getActiveSheet()->mergeCells('V7:V10');
$xl->getActiveSheet()->setCellValue('V7', 'Operator');



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
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['arus_a_r']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['arus_a_s']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['arus_a_t']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['penguat_medan_arus']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['suhu_winding_1']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['suhu_winding_2']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['suhu_winding_3']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['bearing']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['kwh_produksi_hsd']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['kwh_produksi_mfo']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['kwh_alat_bantu']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['level_becomes']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['waktu_input']);
    $xl->getActiveSheet()->setCellValue('V' . $line, $row['operator']);

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
$xl->getActiveSheet()->getStyle('A1:V1')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A7:V10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:V' . $line)->applyFromArray($styleArray);
unset($styleArray);
