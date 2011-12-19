<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Personal', 'url'=>array('index')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Crear Personal</h1>

<?php echo $this->renderPartial('_form', array('a'=>$a, 'b'=>$b)); ?>
