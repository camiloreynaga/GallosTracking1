<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'rooster-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block"><?php echo yii::t('app','Fields with');?> <span class="required">*</span> <?php echo yii::t('app','are required.') ;?></p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nro_file',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10)))); ?>

	<?php echo $form->textFieldGroup($model,'nro_plate',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php //echo $form->textFieldGroup($model,'galpon_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        <?php 
         echo $form->select2Group(
			$model,
			'galpon_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
                                
				'widgetOptions' => array(
				'asDropDownList' => true,
                                    'data'      => CHtml::listData($model->getGalponOptions(),'id','galpon'),
					'options' => array(
						//'tags' => array('clever', 'is', 'better', 'clevertech'),
						'placeholder' => 'elija por favor.',
						/* 'width' => '40%', */
						//'tokenSeparators' => array(',', ' ')
					)
				)
			)
		);
        ?>
	<?php echo $form->textFieldGroup($model,'name',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php //echo $form->textFieldGroup($model,'sex',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        
        <?php 
        
            echo $form->switchGroup($model,'sex',
                array('class'=>'span5',
                        'widgetOptions'=>array(
                            'options'=>array(
                                'size'=>'medium',
                                'onText'=>'Hembra',
                                'offText'=>'Macho',
                                'onColor' => 'danger',
                                'offColor' => 'primary', 
                                )
                        )
                    )
                );
        ?>

	<?php echo $form->textFieldGroup($model,'nro_camada',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'father',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php echo $form->textFieldGroup($model,'mother',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php //echo $form->textFieldGroup($model,'active',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        
        <?php 
        
            echo $form->switchGroup($model,'active',
                array('class'=>'span5',
                        'widgetOptions'=>array(
                            'options'=>array(
                                'size'=>'small',
                                'onText'=>'NO',
                                'offText'=>'SI',
                                'onColor' => 'danger',
                                'offColor' => 'primary', 
                                )
                        )
                    )
                );
        ?>
        
	<?php //echo $form->textFieldGroup($model,'type_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        <?php 
         echo $form->select2Group(
			$model,
			'type_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
                                
				'widgetOptions' => array(
				'asDropDownList' => true,
                                    'data'      => CHtml::listData($model->getTypesOptions(),'id','type'),
					'options' => array(
						//'tags' => array('clever', 'is', 'better', 'clevertech'),
						'placeholder' => 'elija por favor.',
						/* 'width' => '40%', */
						//'tokenSeparators' => array(',', ' ')
					)
				)
			)
		);
        ?>
	<?php echo $form->textAreaGroup($model,'observation', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>


<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? yii::t('app','Create') : yii::t('app','Save'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
