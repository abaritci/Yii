<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->ID_PERSONAL,
);

$this->menu=array(
	array('label'=>'Listar Personal', 'url'=>array('index')),
	array('label'=>'Crear Personal', 'url'=>array('create')),
	array('label'=>'Editar Personal', 'url'=>array('update', 'id'=>$model->ID_PERSONAL)),
	array('label'=>'Eliminar Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PERSONAL),'confirm'=>'¿Deseas borrar este registro?')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Ver Personal #<?php echo $model->ID_PERSONAL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PERSONAL',
		'NOMBRE_PERSONAL',
		'ID_ESTADO',
	),
)); ?>
