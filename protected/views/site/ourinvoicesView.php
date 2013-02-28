<?php
/* @var $this ourinvoicesController */
/* @var $Ourinvoices ourinvoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ourinvoices-ourinvoicesView-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($ourinvoices); ?>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'subscription_id'); ?>
		<?php echo $form->textField($ourinvoices,'subscription_id'); ?>
		<?php echo $form->error($ourinvoices,'subscription_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'ref_id'); ?>
		<?php echo $form->textField($ourinvoices,'ref_id'); ?>
		<?php echo $form->error($ourinvoices,'ref_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'invoiced'); ?>
		<?php echo $form->textField($ourinvoices,'invoiced'); ?>
		<?php echo $form->error($ourinvoices,'invoiced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'vatpaid'); ?>
		<?php echo $form->textField($ourinvoices,'vatpaid'); ?>
		<?php echo $form->error($ourinvoices,'vatpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'pdkpaid'); ?>
		<?php echo $form->textField($ourinvoices,'pdkpaid'); ?>
		<?php echo $form->error($ourinvoices,'pdkpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'type'); ?>
		<?php echo $form->textField($ourinvoices,'type'); ?>
		<?php echo $form->error($ourinvoices,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'invoicenumber'); ?>
		<?php echo $form->textField($ourinvoices,'invoicenumber'); ?>
		<?php echo $form->error($ourinvoices,'invoicenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'invoicedate'); ?>
		<?php echo $form->textField($ourinvoices,'invoicedate'); ?>
		<?php echo $form->error($ourinvoices,'invoicedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'duedate'); ?>
		<?php echo $form->textField($ourinvoices,'duedate'); ?>
		<?php echo $form->error($ourinvoices,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'paiddate'); ?>
		<?php echo $form->textField($ourinvoices,'paiddate'); ?>
		<?php echo $form->error($ourinvoices,'paiddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'warningdate'); ?>
		<?php echo $form->textField($ourinvoices,'warningdate'); ?>
		<?php echo $form->error($ourinvoices,'warningdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($ourinvoices,'deleteddate'); ?>
		<?php echo $form->textField($ourinvoices,'deleteddate'); ?>
		<?php echo $form->error($ourinvoices,'deleteddate'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->