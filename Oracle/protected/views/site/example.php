<?php
$this->pageTitle=Yii::app()->name . ' - Inicio de Sesión';
$this->breadcrumbs=array(
	'Inicio de Sesión',
);
?>

<h1>Inicio de Sesión</h1>

<p>Para iniciar sesión es necesario que proporciones los siguientes datos: </p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'example-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->passwordField($model,'contrasena'); ?>
		<?php echo $form->error($model,'contrasena'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'recuerdame'); ?>
		<?php echo $form->label($model,'recuerdame'); ?>
		<?php echo $form->error($model,'recuerdame'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Iniciar sesión'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
