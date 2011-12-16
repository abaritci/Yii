<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Editar Usuario', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
    	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
        array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->ID)),

);
?>

<h1>Ver Usuario #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'USERNAME',
		'EMAIL',
	),
)); ?>
