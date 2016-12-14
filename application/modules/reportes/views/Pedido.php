<?php
//============================================================+
// File name   : example_063.php
// Begin       : 2010-09-29
// Last Update : 2013-05-14
//
// Description : Example 063 for TCPDF class
//               Text stretching and spacing (tracking)
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Text stretching and spacing (tracking)
 * @author Nicola Asuni
 * @since 2010-09-29
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Pedido de Cliente');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 063', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 10);

// add a page
$pdf->AddPage('L');

$pdf->Write(0, 'Example of Text Stretching and Spacing (tracking)', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

// create several cells to display all cases of stretching and spacing combinations.

$fonts = array('times', 'dejavuserif');
$alignments = array('L' => 'LEFT', 'C' => 'CENTER', 'R' => 'RIGHT', 'J' => 'JUSTIFY');

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

$inventarior='
<table border="1">
	<tr>
		<td>Descripción</td>
		<td>Cantidad</td>
	</tr>';

foreach ($obtenerInventarioPedido as $record) {

$inventarior .='
	<tr>
		<td>'.$record['nombre_inventario'].'</td>
		<td>'.$record['nombre_inventario'].'</td>
	</tr>';

 } 

$inventarior .='
</table>
';

$detalle='
<table border="1">
	<tr>
		<td width="60%">DESCRIPCIÓN</td>
		<td width="20%">DETALLE</td>
		<td width="20%">CANTIDAD</td>
	</tr>';

foreach ($obtenerProductosDeUnPedido as $record){

$detalle .='
	<tr>
		<td>'.$record['PROD_NOM_PROD'].'</td>
		<td>'.$record['DETALLE'].'</td>
		<td>'.$record['CANTIDAD'].'</td>
	</tr>';

}

$detalle .='
</table>
';

$subtabla1='
<table>
	<tr>
		<td>NOMBRE DE CLIENTE</td>
		<td></td>
	</tr>
	<tr>
		<td>CODIGO DE BARRA</td>
		<td></td>
	</tr>	
	<tr>
		<td>FECHA</td>
		<td></td>
	</tr>	
	<tr>
		<td>PRUEBAS</td>
		<td></td>
	</tr>	
	<tr>
		<td>CLIENTE:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
		<td>MEDICO TRATANTE:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
		<td>CIUDAD:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
	<td>CONTACTO:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
	<td>TELEFONO:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
	<td>COLOR:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
		<td>PRIORODAD:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>	
	<tr>
		<td>FECHA DE I INICIO:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
		<td>OBSERVACIONES:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
		<td>RESPONSABLE:</td>
		<td>CLIENTE NOMBRE</td>
	</tr>
	<tr>
		<td colspan="2">Detalle de Pedido</td>
	</tr>
	<tr>
		<td colspan="2">'.$detalle.'</td>
	</tr>
	<tr>
		<td colspan="2">Inventario Recibido</td>
	</tr>
	<tr>
		<td colspan="2">'.$inventarior.'</td>
	</tr>
</table>
';

$subtabla2='
<table border="1">
	<tr>
		<td width="60%">Proceso</td>
		<td width="20%">Responsable</td>
		<td width="20%">Fecha</td>
	</tr>';   	
	
foreach ($pedidos_procesos as $record) {

$subtabla2 .='
	<tr>
		<td>'.$record['NOMBRE_PROCESO'].'</td>
		<td></td>
		<td></td>
	</tr>';

 } 

$subtabla2 .='
</table>
';

$html = '
<table  width="100%" border="3" height="100%">
	<tr>
		<td>'.$subtabla1.'</td>
		<td>'.$subtabla2.'</td>
	</tr>
</table>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// reset font stretching
$pdf->setFontStretching(100);

// reset font spacing
$pdf->setFontSpacing(0);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Pedido.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
