<?php
$this->breadcrumbs=array(
	'Organismos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Organismos', 'url'=>array('index')),
	array('label'=>'Administrar Organismos', 'url'=>array('admin')),
);
?>

<h1>Crear Organismo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>