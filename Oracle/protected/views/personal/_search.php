<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PERSONAL'); ?>
		<?php echo $form->textField($model,'ID_PERSONAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_PERSONAL'); ?>
		<?php echo $form->textField($model,'NOMBRE_PERSONAL',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_ESTADO'); ?>
		<?php echo $form->textField($model,'ID_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->