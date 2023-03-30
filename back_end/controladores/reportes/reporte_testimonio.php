<?php
require_once('../../../tcpdf/tcpdf.php'); //Llamando a la Libreria TCPDF
include("../../conexion/conexion.php");
include("../../conexion/seguridad.php");
date_default_timezone_set('America/Lima');


ob_end_clean(); //limpiar la memoria


class MYPDF extends TCPDF{
      
    	public function Header() {
            $bMargin = $this->getBreakMargin();
            $auto_page_break = $this->AutoPageBreak;
            $this->SetAutoPageBreak(false, 0);
            $this->SetAutoPageBreak($auto_page_break, $bMargin);
            $this->setPageMark();
	    }
}


//Iniciando un nuevo pdf
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);
 
//Establecer margenes del PDF
$pdf->SetMargins(20, 35, 25);
$pdf->SetHeaderMargin(20);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(true); //Eliminar la linea superior del PDF por defecto
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM); //Activa o desactiva el modo de salto de página automático
 
//Informacion del PDF
$pdf->SetCreator('UrianViera');
$pdf->SetAuthor('UrianViera');
$pdf->SetTitle('Reporte de Testimonio');
 
/** Eje de Coordenadas
 *          Y
 *          -
 *          - 
 *          -
 *  X ------------- X
 *          -
 *          -
 *          -
 *          Y
 * 
 * $pdf->SetXY(X, Y);
 */

//Agregando la primera página
$pdf->AddPage();
$pdf->setPageOrientation("Landscape");
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(235, 10);
$pdf->Write(0, 'Fecha: '. date('d-m-Y'));
$pdf->SetXY(235, 17);
$pdf->Write(0, 'Hora: '. date('h:i A'));





$pdf->Ln(10); //Salto de Linea
$pdf->Cell(40,26,'',0,0,'C');
/*$pdf->SetDrawColor(50, 0, 0, 0);
$pdf->SetFillColor(100, 0, 0, 0); */
//$pdf->SetTextColor(34,68,136);
//$pdf->SetTextColor(255,204,0); //Amarillo
$pdf->SetTextColor(34,68,136); //Azul
//$pdf->SetTextColor(153,204,0); //Verde
//$pdf->SetTextColor(204,0,0); //Marron
//$pdf->SetTextColor(245,245,205); //Gris claro
//$pdf->SetTextColor(100, 0, 0); //Color Carne
$pdf->SetFont('helvetica','B', 15); 
$pdf->Cell(180,6,'Lista de Testimonios',0,0,'C');


$pdf->Ln(10); //Salto de Linea
$pdf->SetTextColor(0, 0, 0); 
$pdf->Ln(10); //Salto de Linea
$pdf->SetTextColor(0, 0, 0);

//Armando la cabecera de la Tabla
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('helvetica','B',12); //La B es para letras en Negritas
$pdf->Cell(60,8,'Cliente',1,0,'C',1);
$pdf->Cell(80,8,'Testimonio',1,0,'C',1);
$pdf->Cell(25,8,'Valoracion',1,0,'C',1); 
$pdf->Cell(40,8,'Fecha Registro',1,0,'C',1);
$pdf->Cell(55,8,'Producto',1,1,'C',1);
/*El 1 despues de  Fecha Ingreso indica que hasta alli 
llega la linea */

$pdf->SetFont('helvetica','',10);


//SQL para consultas Empleados
$sql = "SELECT tes.id_testimonio,CONCAT(cli.apellidos,' ',cli.nombres) as nombre_cliente,cli.id_cliente,tes.testimonio, tes.valoracion,tes.fecha_registro,po.nombre FROM tb_testimonio tes inner join tb_cliente cli on cli.id_cliente = tes.id_cliente inner join tb_producto po on po.id_producto = tes.id_producto";
$result = $con->query($sql);
while ($testimonios = $result->fetch_array()) {
        $pdf->Cell(60,8,("  ".$testimonios['nombre_cliente']),1,0,'L');
        $pdf->Cell(80,8,"  ".$testimonios['testimonio'],1,0,'L');
        $pdf->Cell(25,8,"  ".$testimonios['valoracion'],1,0,'C');
        $pdf->Cell(40,8,($testimonios['fecha_registro']),1,0,'C');
        $pdf->Cell(55,8,("  ".$testimonios['nombre']),1,1,'L');
    }


//$pdf->AddPage(); //Agregar nueva Pagina

$pdf->Output('Resumen_Testimonio_'.date('d_m_y').'.pdf', 'I'); 
// Output funcion que recibe 2 parameros, el nombre del archivo, ver archivo o descargar,
// La D es para Forzar una descarga