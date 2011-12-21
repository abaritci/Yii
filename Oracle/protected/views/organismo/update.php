<?php
$this->breadcrumbs=array(
	'Organismos'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Organismos', 'url'=>array('index')),
	array('label'=>'Crear Organismo', 'url'=>array('create')),
	array('label'=>'Ver Organismo', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Administrar Organismos', 'url'=>array('admin')),
);
?>

<h1>Editar Organismo <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>