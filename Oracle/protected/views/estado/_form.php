<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_ESTADO'); ?>
		<?php
                 $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                 'name'=>'NOMBRE_ESTADO',
                 'attribute'=>'NOMBRE_ESTADO',
                 'id'=>'NOMBRE_ESTADO',
                 'model'=>$model,
                 'source'=>$this->createUrl('ListarEstados'),
                'options'=>array(
                'showAnim'=>'fold',
                ),
                ));
               ?>
		<?php echo $form->error($model,'NOMBRE_ESTADO'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->