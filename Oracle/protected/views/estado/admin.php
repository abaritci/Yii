<?php
$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Crear Estados', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estados</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_ESTADO',
		'NOMBRE_ESTADO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
