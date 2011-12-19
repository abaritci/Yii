<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PERSONAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PERSONAL), array('view', 'id'=>$data->ID_PERSONAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ID_ESTADO); ?>
	<br />


</div>