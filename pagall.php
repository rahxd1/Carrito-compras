
<?php

 session_start();
  $nom = $_SESSION['nombre'];
//  $seccion=$_GET['seccion'];
    $idse = $_SESSION['id_user'];
  $tiempo= $_SESSION['session'];

$hoy = date("F j, Y, g:i a"); 

include "conecta.php";
$con=conecta();

$sql="SELECT * FROM pedidos WHERE cliente='$nom' AND pagado=0";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);
$suma=0;

ob_end_clean();
require('fpdf/fpdf.php');
$pdf=new fpdf();

$pdf->AddPage();
$pdf->Image('imagenes/like2.png',100,10,50,0,'PNG');
$pdf->Image('imagenes/like.png',50,10,50,0,'PNG');
$pdf->Image('imagenes/hsbc.png',10,50,40,0,'PNG');
$pdf->Image('imagenes/bana.png',55,50,40,0,'PNG');
$pdf->Image('imagenes/scoti.png',100,50,40,0,'PNG');
$pdf->Image('imagenes/banco.png',145,50,40,0,'PNG');

$pdf->SetFont('helvetica','',14);
/*$pdf->Ln(2);
$pdf->Write(5,'Factura:000'.$factura);*/
$pdf->Ln(32);
$pdf->Write(5,'_______________________________________________________________');
$pdf->Ln(18);
$pdf->Write(5,'No.:21654987     No.:4789      No.:2687       No.:6547812');
$pdf->Ln(8);
$pdf->Write(5,'Podra realizar su deposito en cualquiera de las sucursales');
$pdf->Ln(8);
$pdf->Write(5,'_______________________________________________________________');
$pdf->Ln(2);
$pdf->Write(5,'_______________________________________________________________');
$pdf->Ln(15);
$pdf->Write(5,'Usuario:                 **----   '.$nom.'   ----** ');
$pdf->Ln(8);
$pdf->Write(5,'_______________________________________________________________');
$pdf->Ln(2);
$pdf->Write(5,'_______________________________________________________________');
$pdf->Ln(10);
$pdf->Write(5,'                                 **----      Descripcion del Producto    ----**');
$pdf->Ln(5);



for($i=0;$i<$num;$i++){
              
               $pro = mysql_result($res,$i,"producto");
               $tiem = mysql_result($res,$i,"tiempo");
               $pre = mysql_result($res,$i,"precio");
               $can = mysql_result($res,$i,"cantidad");

               $suma=$suma+$pre;
               $pieza=$pre/$can;
             
            $pdf->Ln(8);
			$pdf->Write(5,'Prducto :'.$pro   );
			$pdf->Ln(8);
			$pdf->Write(5,'  Cantidad:'.$can.'                                                                  Precio :'.$pieza);
			$pdf->Ln(16);
           
  }

$pdf->Ln(8);
$pdf->Write(5,'_______________________________________________________________');
$pdf->SetTextColor(220,50,50);
$pdf->Ln(8);
$pdf->Write(5,'----Costo TOTAL:                 $'.$suma);
$pdf->SetTextColor(0,0,0);
$pdf->Ln(7);
$pdf->Write(5,'_______________________________________________________________');
$pdf->Write(5,'_______________________________________________________________');
$pdf->SetTextColor(220,50,50);
$pdf->Ln(8);
$pdf->Write(5,'***NOTA : Esta orden de pago sera vigente durante las 48 hrs despues de ser expedida de lo contrario sera cancelada, fecha:'.$hoy);
$pdf->SetTextColor(0,0,0);
$pdf->Ln(7);
$pdf->Write(5,'_______________________________________________________________');

$pdf->Output();

 
$sql="UPDATE pedidos SET pagado=1 WHERE cliente='$nom' AND pagado=0";
$res=mysql_query($sql,$con);



?>

