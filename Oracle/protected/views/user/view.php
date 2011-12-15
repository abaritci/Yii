<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
    	array('label'=>'Manage User', 'url'=>array('admin')),
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
