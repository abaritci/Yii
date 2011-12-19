<?php
$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->ID_ESTADO,
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Crear Estado', 'url'=>array('create')),
	array('label'=>'Editar Estado', 'url'=>array('update', 'id'=>$model->ID_ESTADO)),
	array('label'=>'Borrar Estado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ESTADO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Ver Estado #<?php echo $model->ID_ESTADO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ESTADO',
		'NOMBRE_ESTADO',
	),
)); ?>
