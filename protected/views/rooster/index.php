<?php
$this->breadcrumbs=array(
        yii::t('app','Roosters'),
);

$this->menu=array(
array('label'=>yii::t('app','Create').' '.yii::t('app','Rooster'),'url'=>array('create')),
array('label'=>yii::t('app','Manage').' '.yii::t('app','Rooster'),'url'=>array('admin')),
);
?>

<h1><?php echo yii::t('app','Roosters'); ?></h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
