<?php
require_once Yii::getPathOfAlias('application') . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends CController
{
    public $heading = "Export Management";
    
    public function actionFormExport()
    {
        if (!Yii::app()->user->hasState("admin")){          
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }

        $type = Yii::app()->request->getParam("type");
        $check = Yii::app()->request->getParam("check");

        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("Queries")
             ->setSubject("Queries")
             ->setDescription("Queries")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Queries");        

        $sheet = $spreadsheet->getActiveSheet();
        
        // Set headers
        $sheet->setCellValue('A1', "Type")
              ->setCellValue('B1', "Name")
              ->setCellValue('C1', "Email")
              ->setCellValue('D1', "Phone")
              ->setCellValue('E1', "Subject")
              ->setCellValue('F1', "Message")
              ->setCellValue('G1', "Date Added");

        // Add data
        $i = 2;
        $cri = new CDbCriteria();
        $cri->order = "id desc";
        
        $exam = Forms::model()->findAll($cri);
        
        foreach ($exam as $exams) {
            $sheet->setCellValue('A' . $i, $exams->type)
                  ->setCellValue('B' . $i, $exams->name)
                  ->setCellValue('C' . $i, $exams->email)
                  ->setCellValue('D' . $i, $exams->phone)
                  ->setCellValue('E' . $i, $exams->subject)
                  ->setCellValue('F' . $i, $exams->message)
                  ->setCellValue('G' . $i, $exams->date_added);
            $i++;
        }

        $exclname = $check . "_" . $type . "_" . Yii::app()->params['mydate'];

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('info');
        
        // Save as Excel file
        $filename = $exclname . ".xlsx";  // Use .xlsx for Xlsx writer
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');

        // Clean up
        unset($spreadsheet);
        exit();
    }

    public function actionFormExport_bytype()
    {
        if (!Yii::app()->user->hasState("admin")){          
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }

        $type = Yii::app()->request->getParam("type");
        $check = Yii::app()->request->getParam("check");

        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("Queries")
             ->setSubject("Queries")
             ->setDescription("Queries")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Queries");

        $sheet = $spreadsheet->getActiveSheet();
        
        // Set headers
        $sheet->setCellValue('A1', "Type")
              ->setCellValue('B1', "Name")
              ->setCellValue('C1', "Email")
              ->setCellValue('D1', "Phone")
              ->setCellValue('E1', "Subject")
              ->setCellValue('F1', "Message")
              ->setCellValue('G1', "Date Added");

        // Add data
        $query = trim(Yii::app()->request->getPost('enquiry_type')); 
        $i = 2;
        $cri = new CDbCriteria();
        $cri->order = "id desc";        
        $cri->condition = "type LIKE :query";
        $cri->params = array(":query" => "%$query%");
        
        $exam = Forms::model()->findAll($cri);
        
        foreach ($exam as $exams) {
            $sheet->setCellValue('A' . $i, $exams->type)
                  ->setCellValue('B' . $i, $exams->name)
                  ->setCellValue('C' . $i, $exams->email)
                  ->setCellValue('D' . $i, $exams->phone)
                  ->setCellValue('E' . $i, $exams->subject)
                  ->setCellValue('F' . $i, $exams->message)
                  ->setCellValue('G' . $i, $exams->date_added);
            $i++;
        }

        $exclname = $query . "_" . $type . "_" . Yii::app()->params['mydate'];

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('info');
        
        // Save as Excel file
        $filename = $exclname . ".xlsx";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');

        // Clean up
        unset($spreadsheet);
        exit();
    }



/*
	public $heading="Export Management";
	
	public function actionFormExport()
	{
		if (!Yii::app()->user->hasState("admin")){          
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$type = Yii::app()->request->getParam("type");
		$check = Yii::app()->request->getParam("check");

		$objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("Queries")
             ->setSubject("Queries")
             ->setDescription("Queries")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Queries");        
         $objPHPExcel->setActiveSheetIndex(0)
                 ->setCellValue('A1', "Type")
                 ->setCellValue('B1', "Name")
                 ->setCellValue('C1', "Email")
                 ->setCellValue('D1', "Phone")
                 ->setCellValue('E1', "Subject")
                 ->setCellValue('F1', "Message")
                 ->setCellValue('G1', "Date Added");
                 
        // Add some data
        $i=2;
		$cri= new CDbCriteria();
        $cri->order="id desc";
		
        $exam = Forms::model()->findAll($cri);
        
            foreach ($exam as $exams)
            {
				$objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $exams->type)
                ->setCellValue('B'.$i, $exams->name)
                ->setCellValue('C'.$i, $exams->email)
                ->setCellValue('D'.$i, $exams->phone)
                ->setCellValue('E'.$i, $exams->subject)
                ->setCellValue('F'.$i, $exams->message)
                ->setCellValue('G'.$i, $exams->date_added);
				$i++;
            }
		
		$exclname = $check."_".$type."_".Yii::app()->params['mydate'];
     
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('info');
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        
        // Save a xls file
        $filename = $exclname;
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

        $objWriter->save('php://output');
        unset($this->objWriter);
        unset($this->objWorksheet);
        unset($this->objReader);
        unset($this->objPHPExcel);
        exit();
	}
	//form export by type
	public function actionFormExport_bytype()
	{
		if (!Yii::app()->user->hasState("admin")){          
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$type = Yii::app()->request->getParam("type");
		$check = Yii::app()->request->getParam("check");

		$objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("Queries")
             ->setSubject("Queries")
             ->setDescription("Queries")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Queries");        
         $objPHPExcel->setActiveSheetIndex(0)
                 ->setCellValue('A1', "Type")
                 ->setCellValue('B1', "Name")
                 ->setCellValue('C1', "Email")
                 ->setCellValue('D1', "Phone")
                 ->setCellValue('E1', "Subject")
                 ->setCellValue('F1', "Message")
                 ->setCellValue('G1', "Date Added");
                 
        // Add some data
		// $query=trim(Yii::app()->request->getPost('enquiry_type'));
		$query=trim(Yii::app()->request->getPost('enquiry_type'));
        $i=2;
		$cri= new CDbCriteria();
        $cri->order="id desc";		
		$cri->condition="type Like :query";
		$cri->params= array(":query"=> "%$query%");
		
        $exam = Forms::model()->findAll($cri);
        
            foreach ($exam as $exams)
            {
				$objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $exams->type)
                ->setCellValue('B'.$i, $exams->name)
                ->setCellValue('C'.$i, $exams->email)
                ->setCellValue('D'.$i, $exams->phone)
                ->setCellValue('E'.$i, $exams->subject)
                ->setCellValue('F'.$i, $exams->message)
                ->setCellValue('G'.$i, $exams->date_added);
				$i++;
            }
		
		$exclname = $query."_".$type."_".Yii::app()->params['mydate'];
     
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('info');
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        
        // Save a xls file
        $filename = $exclname;
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

        $objWriter->save('php://output');
        unset($this->objWriter);
        unset($this->objWorksheet);
        unset($this->objReader);
        unset($this->objPHPExcel);
        exit();
	}
*/
}
?>