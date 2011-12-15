<?php
$pdf = Yii::createComponent('application.extensions.MPDF.mpdf'); //Lo siguiente es el contenido del pdf :D
$html='
                <table id="yw0" class="detail-view2">
                    <tr class="principal">
                        <td colspan="2"><b>DATOS DEL USUARIO</b></td>
                        <br><br>
                    <tr>
                    <tr class="odd">
                        <td> <b>ID </b> </td>
                        <td> '.$model->ID.'</td>
                    </tr>
                    <tr class="even">
                        <td> <b>Nombre de Usuario</b> </td>
                        <td> '.$model->USERNAME.'</td>
                    </tr>
                    <tr class="odd">
                        <td> <b>EMAIL</b> </td>
                        <td> '.$model->EMAIL.'</td>
                    </tr>
                </table>';
$header=$header.'<img src="'.Yii::app()->request->baseUrl.'/images/banner.gif" align="center" />';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->SetHTMLHeader($header);
$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Tests PDF/ Yii Framework <(O_o)>  ');
$mpdf->WriteHTML($html);
$mpdf->Output('Datos de Usuario '.$model->ID.'.pdf','D');
exit;
?>
