<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
         array('label'=>'Exportar a PDF', 'url'=>array('pdfs')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Usuarios</h1>

<p>
Opcionalmente puedes poner operadores de comparacion al inicio  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) para búsquedas mas específicas. 
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'USERNAME',
                'EMAIL',
                // array(
                // 'header'=>'Fecha Vigencia',
                // 'name'=>'fecha_vigencia',
                // 'value' => '$data->EMAIL' ,
               // 'htmlOptions'=>array('width'=>'180px'),
               // 'class'=>'SYDateColumn',
                 //),

		//array(
		//	'class'=>'CButtonColumn',
		//),
            
                array(
                    'class'=>'CButtonColumn',
                    'template' => '{view} {update} {delete} {pdf}',
                    'buttons'=>array(
                    'pdf' => array(
                    'label'=>'Generar PDF',
                    'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->ID))",
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.gif',
                    'options' => array('class'=>'pdf'),
                    ),
                    ),
                    ),

	),
)); ?>
