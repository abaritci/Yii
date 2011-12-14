<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <!-- application icon-->
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ccx.ico" type="image/x-icon" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
      
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		<?php
                    $this->widget('application.extensions.mbmenu.MbMenu',array(
                    'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('/site/index')),
                        array('label'=>'Usuarios', 'url'=>array('/user/'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contacto', 'url'=>array('/site/contact')),
                        array('label'=>'Test DropDown Menu',
                          'items'=>array(
                            array('label'=>'Subtitulo 1', 'url'=>array('/site/test','view'=>'sub1')),
                            array('label'=>'Subtitulo 2',
                              'items'=>array(
                                array('label'=>'Sub sub 1', 'url'=>array('/site/test','view'=>'subsub1')),
                                array('label'=>'Sub sub 2', 'url'=>array('/site/test','view'=>'subsub2')),
                              ),
                            ),
                          ),
                        ),
                       array('label'=>'Inicio de Sesión', 'url'=>array('/site/example'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
            ));
                ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Atalaya Systems.<br/>
		All Rights Reserved.<br/>
	
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>