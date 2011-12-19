<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ESTADO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ESTADO), array('view', 'id'=>$data->ID_ESTADO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_ESTADO); ?>
	<br />


</div>