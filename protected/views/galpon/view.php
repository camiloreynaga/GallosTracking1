<?php
$this->breadcrumbs=array(
            yii::t('app','Galpons')=>array('index'),
            $model->id,
    );

    $this->menu=array(
        array('label'=>yii::t('app','List').' '.yii::t('app','Galpon'),'url'=>array('index')),
        array('label'=>yii::t('app','Create').' '.yii::t('app','Galpon'),'url'=>array('create')),
        array('label'=>yii::t('app','Update').' '.yii::t('app','Galpon'),'url'=>array('update','id'=>$model->id)),
        array('label'=>yii::t('app','Delete').' '.yii::t('app','Galpon'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>yii::t('app','Are you sure you want to delete this item?'))),
        array('label'=>yii::t('app','Manage').' '.yii::t('app','Galpon'),'url'=>array('admin')),
        );
    ?>

    <h1><?php echo yii::t('app','View');?> <?php echo yii::t('app','Galpon');?> #<?php echo $model->id; ?></h1>

    <?php $this->widget('booster.widgets.TbDetailView',array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'galpon',
		'active',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
        ),
)); ?>
