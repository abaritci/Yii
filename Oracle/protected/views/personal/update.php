<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$a->ID_PERSONAL=>array('view','id'=>$a->ID_PERSONAL),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista de Personal', 'url'=>array('index')),
	array('label'=>'Crear Personal', 'url'=>array('create')),
	array('label'=>'Ver Personal', 'url'=>array('view', 'id'=>$a->ID_PERSONAL)),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Editar Personal <?php echo $a->ID_PERSONAL; ?></h1>

<?php //echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_form', array('a'=>$a, 'b'=>$b)); ?>