<?php
$this->breadcrumbs=array(
	'Estados',
);

$this->menu=array(
	array('label'=>'Crear Estado', 'url'=>array('create')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Estados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
