<?php
$this->breadcrumbs=array(
        yii::t('app','Types'),
);

$this->menu=array(
array('label'=>yii::t('app','Create').' '.yii::t('app','Type'),'url'=>array('create')),
array('label'=>yii::t('app','Manage').' '.yii::t('app','Type'),'url'=>array('admin')),
);
?>

<h1><?php echo yii::t('app','Types'); ?></h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
