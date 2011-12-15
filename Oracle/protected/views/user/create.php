<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Crear Usuario',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Crear Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>