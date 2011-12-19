<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array( 'id'=>'personal-form',
'enableAjaxValidation'=>true, ));
if ($a->isNewRecord==false) { $b=Estado::model()->findByPk($a->ID_ESTADO); }
echo $form->errorSummary(array($a,$b)); ?>
<div class="row">
<?php echo $form->labelEx($a,'NOMBRE_PERSONAL'); ?>
<?php echo $form->textField($a,'NOMBRE_PERSONAL'); ?>
<?php echo $form->error($a,'NOMBRE_PERSONAL'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($b,'NOMBRE_ESTADO'); ?>
<?php echo $form->textField($b,'NOMBRE_ESTADO'); ?>
<?php echo $form->error($b,'NOMBRE_ESTADO'); ?>
</div>
<div class="row buttons">
<?php echo CHtml::submitButton($a->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>


</div> <?php $this->endWidget(); ?> </div>
