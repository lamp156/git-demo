<?php  
	$dir=dirname(__FILE__);
	require $dir.'/PHPExcel/PHPExcel.php';
	$objPHPExcel=new PHPExcel();
	$objSheet=$objPHPExcel->getActiveSheet();
	$objSheet->setTitle('demo');
	// $objSheet->setCellValue('A1','姓名')->setCellValue('B1','分数');
	// $objSheet->setCellValue('A2','张三')->setCellValue('B2','50');
	$array=array(
			array(),
			array('','姓名','分数'),
			array('','李四','60'),
			array('','王五','70')
		);
	$objSheet->fromArray($array);
	$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
	$objWriter->save($dir.'/demo_1.xlsx');
第三次线上修改
?>
