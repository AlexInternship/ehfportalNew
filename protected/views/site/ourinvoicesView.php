<?php
/* @var $this ourinvoicesController */
/* @var $model ourinvoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ourinvoices-ourinvoicesView-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subscription_id'); ?>
		<?php echo $form->textField($model,'subscription_id'); ?>
		<?php echo $form->error($model,'subscription_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_id'); ?>
		<?php echo $form->textField($model,'ref_id'); ?>
		<?php echo $form->error($model,'ref_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiced'); ?>
		<?php echo $form->textField($model,'invoiced'); ?>
		<?php echo $form->error($model,'invoiced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vatpaid'); ?>
		<?php echo $form->textField($model,'vatpaid'); ?>
		<?php echo $form->error($model,'vatpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pdkpaid'); ?>
		<?php echo $form->textField($model,'pdkpaid'); ?>
		<?php echo $form->error($model,'pdkpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoicenumber'); ?>
		<?php echo $form->textField($model,'invoicenumber'); ?>
		<?php echo $form->error($model,'invoicenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoicedate'); ?>
		<?php echo $form->textField($model,'invoicedate'); ?>
		<?php echo $form->error($model,'invoicedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paiddate'); ?>
		<?php echo $form->textField($model,'paiddate'); ?>
		<?php echo $form->error($model,'paiddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warningdate'); ?>
		<?php echo $form->textField($model,'warningdate'); ?>
		<?php echo $form->error($model,'warningdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleteddate'); ?>
		<?php echo $form->textField($model,'deleteddate'); ?>
		<?php echo $form->error($model,'deleteddate'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->