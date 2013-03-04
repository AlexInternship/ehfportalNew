<?php
/* @var $this addressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'address-addressView-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>true
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'address1',array('class'=>'test')); ?>
		<?php echo $form->textField($model,'address1'); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city',array('class'=>'test')); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip',array('class'=>'test')); ?>
		<?php echo $form->textField($model,'zip'); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'cvr',array('class'=>'test')); ?>
		<?php echo $form->textField($model,'cvr'); ?>
		<?php echo $form->error($model,'cvr'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->