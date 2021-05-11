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
foreach (range('A', 'U') as $columnID) {
    $xl->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}


// Set Title
$xl->setActiveSheetIndex(0);
$xl->getActiveSheet()->mergeCells('A1:U1');
$xl->getActiveSheet()->setCellValue('A1', 'Laporan Paok Motong Penyulang Analog & Bateray');

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

$xl->getActiveSheet()->mergeCells('D7:I7');
$xl->getActiveSheet()->setCellValue('D7', 'Laporan KWH Penyulang Analog Kopel & Sewa (KWH) Analog');
$xl->getActiveSheet()->mergeCells('D8:D10');
$xl->getActiveSheet()->setCellValue('D8', 'Rempung');
$xl->getActiveSheet()->mergeCells('E8:E10');
$xl->getActiveSheet()->setCellValue('E8', 'Pancor');
$xl->getActiveSheet()->mergeCells('F8:F10');
$xl->getActiveSheet()->setCellValue('F8', 'Keruak');
$xl->getActiveSheet()->mergeCells('G8:G10');
$xl->getActiveSheet()->setCellValue('G8', 'Sakra');
$xl->getActiveSheet()->mergeCells('H8:H10');
$xl->getActiveSheet()->setCellValue('H8', 'Masbagik');
$xl->getActiveSheet()->mergeCells('I8:I10');
$xl->getActiveSheet()->setCellValue('I8', 'Sikur');

$xl->getActiveSheet()->mergeCells('J7:U7');
$xl->getActiveSheet()->setCellValue('J7', 'Monitoring Baterai');
$xl->getActiveSheet()->mergeCells('J8:M8');
$xl->getActiveSheet()->setCellValue('J8', 'Unit 2 & 3');
$xl->getActiveSheet()->mergeCells('J9:K9');
$xl->getActiveSheet()->setCellValue('J9', '110 VDC');
$xl->getActiveSheet()->setCellValue('J10', 'V');
$xl->getActiveSheet()->setCellValue('K10', 'I');
$xl->getActiveSheet()->mergeCells('L9:M9');
$xl->getActiveSheet()->setCellValue('L9', '24 VDC');
$xl->getActiveSheet()->setCellValue('L10', 'V');
$xl->getActiveSheet()->setCellValue('M10', 'I');
$xl->getActiveSheet()->mergeCells('N8:Q8');
$xl->getActiveSheet()->setCellValue('N8', 'Unit 4 & 5');
$xl->getActiveSheet()->mergeCells('N9:O9');
$xl->getActiveSheet()->setCellValue('N9', '110 VDC');
$xl->getActiveSheet()->setCellValue('N10', 'V');
$xl->getActiveSheet()->setCellValue('O10', 'I');
$xl->getActiveSheet()->mergeCells('P9:Q9');
$xl->getActiveSheet()->setCellValue('P9', '24 VDC');
$xl->getActiveSheet()->setCellValue('P10', 'V');
$xl->getActiveSheet()->setCellValue('Q10', 'I');
$xl->getActiveSheet()->mergeCells('R8:U8');
$xl->getActiveSheet()->setCellValue('R8', 'Penyulang');
$xl->getActiveSheet()->mergeCells('R9:S9');
$xl->getActiveSheet()->setCellValue('R9', '110 VDC');
$xl->getActiveSheet()->setCellValue('R10', 'V');
$xl->getActiveSheet()->setCellValue('S10', 'I');
$xl->getActiveSheet()->mergeCells('T9:U9');
$xl->getActiveSheet()->setCellValue('T9', '24 VDC');
$xl->getActiveSheet()->setCellValue('T10', 'V');
$xl->getActiveSheet()->setCellValue('U10', 'I');


// Loop data
$line = 11;
$no = 1;
foreach ($param['log'] as $row) {
    $xl->getActiveSheet()->setCellValue('A' . $line, $no++ . ' ');
    $xl->getActiveSheet()->setCellValue('B' . $line, $row['tanggal_input']);
    $xl->getActiveSheet()->setCellValue('C' . $line, $row['waktu']);
    $xl->getActiveSheet()->setCellValue('D' . $line, $row['rempung']);
    $xl->getActiveSheet()->setCellValue('E' . $line, $row['pancor']);
    $xl->getActiveSheet()->setCellValue('F' . $line, $row['keruak']);
    $xl->getActiveSheet()->setCellValue('G' . $line, $row['sakra']);
    $xl->getActiveSheet()->setCellValue('H' . $line, $row['masbagik']);
    $xl->getActiveSheet()->setCellValue('I' . $line, $row['sikur']);
    $xl->getActiveSheet()->setCellValue('J' . $line, $row['unit23_110vdc_v']);
    $xl->getActiveSheet()->setCellValue('K' . $line, $row['unit23_110vdc_i']);
    $xl->getActiveSheet()->setCellValue('L' . $line, $row['unit23_24vdc_v']);
    $xl->getActiveSheet()->setCellValue('M' . $line, $row['unit23_110vdc_i']);
    $xl->getActiveSheet()->setCellValue('N' . $line, $row['unit45_110vdc_v']);
    $xl->getActiveSheet()->setCellValue('O' . $line, $row['unit45_110vdc_i']);
    $xl->getActiveSheet()->setCellValue('P' . $line, $row['unit45_24vdc_v']);
    $xl->getActiveSheet()->setCellValue('Q' . $line, $row['unit45_110vdc_i']);
    $xl->getActiveSheet()->setCellValue('R' . $line, $row['penyulang_110vdc_v']);
    $xl->getActiveSheet()->setCellValue('S' . $line, $row['penyulang_110vdc_i']);
    $xl->getActiveSheet()->setCellValue('T' . $line, $row['penyulang_24vdc_v']);
    $xl->getActiveSheet()->setCellValue('U' . $line, $row['penyulang_110vdc_i']);

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
$xl->getActiveSheet()->getStyle('A1:U1')->applyFromArray($styleArray);
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

$xl->getActiveSheet()->getStyle('A7:U10')->applyFromArray($styleArray);
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
$xl->getActiveSheet()->getStyle('A10:U' . $line)->applyFromArray($styleArray);
unset($styleArray);
