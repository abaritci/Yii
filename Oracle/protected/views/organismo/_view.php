<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_TIPO_ORG')); ?>:</b>
	<?php echo CHtml::encode($data->ID_TIPO_ORG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ORG_G')); ?>:</b>
	<?php echo CHtml::encode($data->ID_ORG_G); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIED_BY); ?>
	<br />


</div>