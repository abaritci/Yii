<?php
$this->breadcrumbs=array(
	'Organismos',
);

$this->menu=array(
	array('label'=>'Crear Organismo', 'url'=>array('create')),
	array('label'=>'Administrar Organismos', 'url'=>array('admin')),
);
?>

<h1>Organismos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
