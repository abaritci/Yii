<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Test',
);
?>

<p>Just  examples :) </p>
<div class="row" >
        <?php echo 'Fecha'; ?>&nbsp;&nbsp;&nbsp;
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
<br>
<div class="row">
    <?php echo "Teléfono"?>
    <?php
        $this->widget('CMaskedTextField', array(
        'name'=>'telefono',
        'attribute' => 'telefono_persona',
        'mask' => '(9999)-999-9999',
        'htmlOptions' => array(
            'size' => 11,
              'style'=>'width:150px;'
            ),
        ));
        ?>
    <?php echo 'Ejemplo de un CMaskedTextField'; ?>
</div>
<br>
<div class="row">
  <?php echo 'Fecha M'  ?>
  <?php
    $this->widget('CMaskedTextField', array(
        'name'=>'fechaMask',
        'mask'=>'99/99/9999',
        'htmlOptions'=>array(
            'size'=>8,
            'style'=>'width:150px;'
        ),
        
    ) );

  ?>
</div>
<BR>
<DIV class="row">
    <?php echo "datetime";  ?>
    <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    $this->widget('CJuiDateTimePicker',array(
        'name'=>'otro',
        //'model'=>$news, //Model object
        'attribute'=>'eventDate', //attribute name
                'mode'=>'datetime', //use "time","date" or "datetime" (default)
        'options'=>array() // jquery plugin options
    ));
?>

</DIV>




