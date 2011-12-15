<?php $this->pageTitle=Yii::app()->name; ?>

<h1> <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p><b>Descripción.</b></p>

<p>En esta aplicación se encuentran desarrollos, pruebas de extensiones y modulos de Yii Framework.
    <br>Si se desea cambiar el contenido de esta página, se tendran que editar los siguientes archivos:
</p>

<ul>
	<li>Vista: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
   
</ul>
