<?php
$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Crear Estado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>