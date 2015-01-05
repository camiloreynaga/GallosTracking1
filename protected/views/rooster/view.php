<?php
$this->breadcrumbs=array(
            yii::t('app','Roosters')=>array('index'),
            $model->name,
    );

    $this->menu=array(
        array('label'=>yii::t('app','List').' '.yii::t('app','Rooster'),'url'=>array('index')),
        array('label'=>yii::t('app','Create').' '.yii::t('app','Rooster'),'url'=>array('create')),
        array('label'=>yii::t('app','Update').' '.yii::t('app','Rooster'),'url'=>array('update','id'=>$model->id)),
        array('label'=>yii::t('app','Delete').' '.yii::t('app','Rooster'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>yii::t('app','Are you sure you want to delete this item?'))),
        array('label'=>yii::t('app','Manage').' '.yii::t('app','Rooster'),'url'=>array('admin')),
        );
    ?>

    <h1><?php echo yii::t('app','View');?> <?php echo yii::t('app','Rooster');?> #<?php echo $model->id; ?></h1>

    <?php $this->widget('booster.widgets.TbDetailView',array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'nro_file',
		'nro_plate',
		'galpon_id',
		'name',
		'sex',
		'nro_camada',
		'father',
		'mother',
		'active',
		'type_id',
		'observation',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
        ),
)); ?>
