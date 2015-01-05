<?php
$this->breadcrumbs=array(
        yii::t('app','Galpons'),
);

$this->menu=array(
array('label'=>yii::t('app','Create').' '.yii::t('app','Galpon'),'url'=>array('create')),
array('label'=>yii::t('app','Manage').' '.yii::t('app','Galpon'),'url'=>array('admin')),
);
?>

<h1><?php echo yii::t('app','Galpons'); ?></h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
