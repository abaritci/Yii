<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Editar Usuario # <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>