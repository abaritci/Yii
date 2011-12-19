<?php
$this->breadcrumbs=array(
	'Personal',
);

$this->menu=array(
	array('label'=>'Crear Personal', 'url'=>array('create')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Personal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
