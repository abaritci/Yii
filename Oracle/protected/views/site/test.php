<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Test',
);
?>
<p>Just  examples :) </p>
<div class="row" >
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name'=>'publishDate',
            'attribute'=>'fecha',
            'language' =>'es',
            // additional javascript options for the date picker plugin

            'options'=>array(
           
            //   'autoSize'=>true,
                'dateFormat'=>'dd-mm-yy', //Formato de fecha
                'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png', //icono a mostrar
                'buttonImageOnly'=>true,
               'buttonText'=>'Fecha',
               'selectOtherMonths'=>true,
                 //    'showAnim'=>'fold',
                'showAnim'=>'slide',
               'showButtonPanel'=>true,
                'showOn'=>'button',
                'showOtherMonths'=>true,
                'changeMonth' => 'true',
                'changeYear' => 'true',
                'minDate'=>'date("Y-m-d")', //fecha minima
                'maxDate'=> "+20Y",//fecha maxima
    
            ),
            'htmlOptions'=>array(
              'readonly'=>'readonly',
                'style'=>'height:18px;'
            ),
        ));
        ?>
</div>


