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
foreach (range('A', 'N') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:N1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong Beban Penyulang');

// Setup handler
$xl->getActiveSheet()->setCellValue('m2', 'No Dokumen : ');
$xl->getActiveSheet()->setCellValue('m3', 'Edit Revisi : ');
$xl->getActiveSheet()->setCellValue('m4', 'Halaman : ');
// $xl->getActiveSheet()->setCellValue('E2', $param['log'][0]['no_dokumen']);
// $xl->getActiveSheet()->setCellValue('E3', $param['log'][0]['edit_revisi']);
// $xl->getActiveSheet()->setCellValue('E4', $param['log'][0]['halaman']);
$xl->getActiveSheet()->setCellValue('N2', "INT.SL.OPS.04.05");
$xl->getActiveSheet()->setCellValue('N3', "1 / 2");
$xl->getActiveSheet()->setCellValue('N4', "Dari 1");


// Set Date Printed and User Printed
$xl->getActiveSheet()->setCellValue('B2', 'Dicetak pada : ');
$xl->getActiveSheet()->setCellValue('C2', date('d-m-Y'));

$xl->getActiveSheet()->setCellValue('B3', 'Dicetak oleh : ');
$xl->getActiveSheet()->setCellValue('C3', $param['user']['name']);


// Set Header
$xl->getActiveSheet()->mergeCells('A5:A6');
$xl->getActiveSheet()->setCellValue('A5', 'No');

$xl->getActiveSheet()->mergeCells('B5:B6');
$xl->getActiveSheet()->setCellValue('B5', 'Tanggal Input');

$xl->getActiveSheet()->mergeCells('C5:C6');
$xl->getActiveSheet()->setCellValue('C5', 'Beban Penyulang/Jam');

$xl->getActiveSheet()->mergeCells('D5:I5');
$xl->getActiveSheet()->setCellValue('D5', 'Nama Penyulang');
$xl->getActiveSheet()->setCellValue('D6', 'Sikur');
$xl->getActiveSheet()->setCellValue('E6', 'Masbagik');
$xl->getActiveSheet()->setCellValue('F6', 'Sakra');
$xl->getActiveSheet()->setCellValue('G6', 'Keruak');
$xl->getActiveSheet()->setCellValue('H6', 'Pancor');
$xl->getActiveSheet()->setCellValue('I6', 'Rempung');

$xl->getActiveSheet()->mergeCells('J5:K5');
$xl->getActiveSheet()->setCellValue('J5', 'Kopel Express GI PMT');
$xl->getActiveSheet()->setCellValue('J6', 'Ekspor');
$xl->getActiveSheet()->setCellValue('K6', 'Impor');

$xl->getActiveSheet()->mergeCells('L5:M5');
$xl->getActiveSheet()->setCellValue('L5', 'Kopel Express GI PRY');
$xl->getActiveSheet()->setCellValue('L6', 'Ekspor');
$xl->getActiveSheet()->setCellValue('M6', 'Impor');

$xl->getActiveSheet()->mergeCells('N5:N6');
$xl->getActiveSheet()->setCellValue('N5', 'Keterangan');

// Loop data
$line = 7;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, content_date($row['tanggal_input']));
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['beban_penyulang']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['sikur']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['masbagik']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['sakra']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['keruak']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['pancor']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['rempung']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['kopel_pmt_ekspor']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['kopel_pmt_impor']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['kopel_pry_ekspor']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['kopel_pry_impor']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['kopel_pry_impor']);

    $line++;
}

// Styling Header
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
$xl->getActiveSheet()->getStyle('A5:N6')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A7:N' . $line)->applyFromArray($styleArray);
unset($styleArray);
