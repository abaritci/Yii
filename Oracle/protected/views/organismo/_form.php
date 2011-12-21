<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organismo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_TIPO_ORG'); ?>
		<?php echo $form->textField($model,'ID_TIPO_ORG',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ID_TIPO_ORG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_ORG_G'); ?>
		<?php echo $form->textField($model,'ID_ORG_G',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ID_ORG_G'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
		<?php echo $form->error($model,'CREATED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MODIFIED_DATE'); ?>
		<?php echo $form->textField($model,'MODIFIED_DATE'); ?>
		<?php echo $form->error($model,'MODIFIED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'CREATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MODIFIED_BY'); ?>
		<?php echo $form->textField($model,'MODIFIED_BY',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'MODIFIED_BY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->