<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_file')); ?>:</b>
	<?php echo CHtml::encode($data->nro_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_plate')); ?>:</b>
	<?php echo CHtml::encode($data->nro_plate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galpon_id')); ?>:</b>
	<?php echo CHtml::encode($data->galpon_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_camada')); ?>:</b>
	<?php echo CHtml::encode($data->nro_camada); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('father')); ?>:</b>
	<?php echo CHtml::encode($data->father); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother')); ?>:</b>
	<?php echo CHtml::encode($data->mother); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation')); ?>:</b>
	<?php echo CHtml::encode($data->observation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>