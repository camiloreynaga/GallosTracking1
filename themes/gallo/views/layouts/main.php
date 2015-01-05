<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

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

        
        <?php 
        
        //echo CHtml::openTag('div', array('class' => 'bs-navbar-top-example'));
        $this->widget(
            'booster.widgets.TbNavbar',
            array(
                'type'=>'inverse',
               // 'brand' => $this->pageTitle,
                'brandOptions' => array('style' => 'width:auto;margin-left: 0px;'),
                'collapse'=>true,
                'fixed' => 'top',
                'fluid' => true,
                'items' => array(
                    array(
                        'class' => 'booster.widgets.TbMenu',
                        'type' => 'navbar',
                        'items' => array(
                            array('label' => yii::t('app','Home'), 'url' => array('/site/index')),
                            array('label' => yii::t('app','System maintance'),
                                'url' => '#',
                                'items'=>array(
                                    array('label'=> yii::t('app','Types'),'url'=>array('/type/admin')),
                                    array('label'=>yii::t('app','Galpones'),'url'=>array('/galpon/admin')),
                                    ),
                                ),
                                array('label'=>yii::t('app','Operations'),
                                    'items'=>array(
                                            array('label'=>yii::t('app','Register Rooster'),'url'=>array('/rooster/admin')),
                                        ),
                                    ),
                                
                                
                                   
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        )
                    )
                )
            )
        );
       // echo CHtml::closeTag('div');
        
        ?>
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Kiwi Soluciones.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
