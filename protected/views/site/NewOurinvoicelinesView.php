<?php
/* @var $this OurinvoicelinesController */
/* @var $model Ourinvoicelines */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ourinvoicelines-NewOurinvoicelinesView-form',
	'enableAjaxValidation'=>true,
     'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /* <div class="row" style="width: 800px;">
            <?php echo $form->labelEx($model,'description', array('class'=>'test', 'style'=>'float:left;width:125px;')); ?>
            <?php echo $form->labelEx($model,'ourinvoice_id', array('class'=>'test', 'style'=>'float:left;width:125px;')); ?>
            <?php echo $form->labelEx($model,'quantity', array('class'=>'test', 'style'=>'float:left;width:125px;')); ?>
            <?php echo $form->labelEx($model,'price', array('class'=>'test', 'style'=>'float:left;width:125px;')); ?>
            <?php echo $form->labelEx($model,'vatyn', array('class'=>'test', 'style'=>'float:left;width:125px;')); ?>
            <?php echo $form->labelEx($model,'reminder', array('class'=>'test', 'style'=>'float:left;width:125px;')); ?>
        </div>
        
       <div class="row" style="width: 800px;">
            <?php echo $form->textField($model,'description', array('style'=>'width:125px;')); ?>
            <?php echo $form->textField($model,'ourinvoice_id', array('style'=>'width:125px;')); ?>
            <?php echo $form->textField($model,'quantity', array('style'=>'width:125px;')); ?>
            <?php echo $form->textField($model,'price', array('style'=>'width:125px;')); ?>
            <?php echo $form->textField($model,'vatyn', array('style'=>'width:125px;')); ?>
            <?php echo $form->textField($model,'reminder', array('style'=>'width:100px;')); ?>
        </div> */?>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'description', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'description', array('style'=>'width:125px;')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ourinvoice_id', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'ourinvoice_id', array('style'=>'width:125px;')); ?>
		<?php echo $form->error($model,'ourinvoice_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'quantity', array('style'=>'width:125px;')); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'price', array('style'=>'width:125px;')); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vatyn', array('class'=>'test'));?>
		<?php echo $form->textField($model,'vatyn', array('style'=>'width:125px;')); ?>
		<?php echo $form->error($model,'vatyn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reminder', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'reminder', array('style'=>'width:100px;')); ?>
		<?php echo $form->error($model,'reminder'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->