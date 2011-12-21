<?php
$this->breadcrumbs=array(
	'Organismos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Organismos', 'url'=>array('index')),
	array('label'=>'Crear Organismo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organismo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Organismos</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'organismo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'ID_TIPO_ORG',
		'ID_ORG_G',
		'CREATED_DATE',
		'MODIFIED_DATE',
		'CREATED_BY',
		
		'MODIFIED_BY',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
