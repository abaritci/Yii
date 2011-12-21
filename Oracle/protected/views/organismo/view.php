<?php
$this->breadcrumbs=array(
	'Organismos'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Listar Organismos', 'url'=>array('index')),
	array('label'=>'Crear Organismo', 'url'=>array('create')),
	array('label'=>'Editar Organismo', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Eliminar Organismo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Organismos', 'url'=>array('admin')),
);
?>

<h1>Ver Organismo #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_TIPO_ORG',
		'ID_ORG_G',
		'CREATED_DATE',
		'MODIFIED_DATE',
		'CREATED_BY',
		'MODIFIED_BY',
	),
)); ?>
