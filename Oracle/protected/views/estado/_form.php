<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_ESTADO'); ?>
		<?php echo $form->textField($model,'NOMBRE_ESTADO',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'NOMBRE_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->