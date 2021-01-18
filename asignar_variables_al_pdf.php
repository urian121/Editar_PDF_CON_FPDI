<?php
    include('config.php');
    use setasign\Fpdi\Fpdi;

    require_once('fpdf181/fpdf.php'); 
    require_once('fpdi2/src/autoload.php'); 
    require_once('mis_variables_pdf.php'); 

    $pdf = new FPDI();

    # Pagina 1
    $pdf->AddPage(); 
    $pdf->setSourceFile('Files_Pdf/18_01_2021.demo1.pdf'); 
    $tplIdx = $pdf->importPage(1); 
    $pdf->useTemplate($tplIdx); 
    $pdf->SetFont('Arial', 'B', '15'); 
    $pdf->SetXY(90,50);
    $pdf->Write(10,$nombreEncargado);


    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(10,220);
    $pdf->Write(10,$tecnico1);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(100,220);
    $pdf->Write(10,$nametecnico1);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(180,220);
    $pdf->Write(10,$tiempo1); 

  
    /**Lista de Tecnicos asignados */
    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(10,224);
    $pdf->Write(10,$tecnico2);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(100,224);
    $pdf->Write(10,$nametecnico2);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(180,224);
    $pdf->Write(10,$tiempo2);



    # Pagina 2
    $pdf->AddPage(); 
    $tplIdx1 = $pdf->importPage(2); 
    $pdf->useTemplate($tplIdx1);     
    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(60,95);
    $pdf->Write(10,$trabajoRealizar." - ".$posicion." - ".$dimension);


    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(10,140);
    $pdf->Write(10,$materiales);

    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(10,145);
    $pdf->Write(10,$id." - ".$codigo." - ".$descripcion." - ".$cantidad);

    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(10,150);
    $pdf->Write(10,$id1." - ".$codigo1." - ".$descripcion1." - ".$cantidad1);


    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(107,200);
    $pdf->Write(10,$textosupervisor);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(107,205);
    $pdf->Write(10,$namesupervisor);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(80,250);
    $pdf->Write(10,$nombreFirma);


    $pdf->Output('Files_Pdf/VYWQ_15_12_2020.pdf', 'I'); //SALIDA DEL PDF
    //    $pdf->Output('original_update.pdf', 'F');
    //    $pdf->Output('original_update.pdf', 'I'); //PARA ABRIL EL PDF EN OTRA VENTANA
    //	  $pdf->Output('original_update.pdf', 'D'); //PARA FORZAR LA DESCARGA
?>