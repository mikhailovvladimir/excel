<?php

require __DIR__ . '/config.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/PHPExcel/Classes/PHPExcel.php';

$price_list = getPrice($db);

if (!$price_list) {
    exit('ошибка');
}

$objPHPExcel = new PHPExcel();
// указать активный лист
$objPHPExcel->setActiveSheetIndex(0);

// получить аквтивный лист
$active_sheet = $objPHPExcel->setActiveSheetIndex(0);


// указываем тип контента - excel 
header("Content-Type:application/vnd.ms-excel");
// указываем необходимо отдать файл на скачивание
header('Content-Disposition:attachment;filename="simple.xls"');
// генерируем документ
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
// cгенерируемый документ надо сохранить и отдать браузеру на скачивание
$objWriter->save('php://output');
exit;