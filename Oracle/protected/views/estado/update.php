<?php
$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->ID_ESTADO=>array('view','id'=>$model->ID_ESTADO),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Crear Estado', 'url'=>array('create')),
	array('label'=>'Ver Estado', 'url'=>array('view', 'id'=>$model->ID_ESTADO)),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Editar Estado <?php echo $model->ID_ESTADO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>