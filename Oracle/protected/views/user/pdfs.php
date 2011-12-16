<?
//@Isabel Palomar
//El siguiente codigo utiliza la libreria MPDF, la cual nos ayuda a exportar los datos
//de una busqueda a un archivo pdf, los datos se encuentran almacenados en variables
//de sesion declaradas en el modelo (o_O) <3
$pdf = Yii::createComponent('application.extensions.MPDF.mpdf');
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
$html.='
<table align="center"><tr>
<td align="center"><b>LISTADO DE USUARIOS</b></td>
</tr></table>
Total Resultados: '.$contador.'
<table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="1"
width="100%" border="0">
<tr class="principal">
<td class="principal" width="30%">&nbsp;ID USUARIO</td>
<td class="principal" width="30%">&nbsp;NOMBRE DE USUARIO</td>
<td class="principal" width="30%">&nbsp;EMAIL</td>
</tr>';
$i=0;
$val=count($dataProvider);
while($i<$val){
$html.='
<tr class="odd">
<td class="odd" width="30%">&nbsp;'.$dataProvider[$i] ["ID"].'</td>
<td class="odd" width="30%">&nbsp;'.$dataProvider[$i]["USERNAME"].'</td>
<td class="odd" width="30%">&nbsp;'.$dataProvider[$i]["EMAIL"].'</td>';
$html.='</tr>'; $i++;
}
$html.='</table>';
$mpdf=new mPDF('win-1252','LETTER-L','','',9,9,24,10,5,5);
$mpdf->WriteHTML($html);
$mpdf->Output('Listado de usuarios.pdf','D');
exit; ?>