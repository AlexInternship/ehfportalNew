<?php
/* @var $this partnersController */
/* @var $model partners */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partners-partnersView-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'partnerno'); ?>
		<?php echo $form->textField($model,'partnerno'); ?>
		<?php echo $form->error($model,'partnerno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validcvr'); ?>
		<?php echo $form->textField($model,'validcvr'); ?>
		<?php echo $form->error($model,'validcvr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scanmail'); ?>
		<?php echo $form->textField($model,'scanmail'); ?>
		<?php echo $form->error($model,'scanmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info_to_purchaser'); ?>
		<?php echo $form->textField($model,'info_to_purchaser'); ?>
		<?php echo $form->error($model,'info_to_purchaser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailcomment'); ?>
		<?php echo $form->textField($model,'mailcomment'); ?>
		<?php echo $form->error($model,'mailcomment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retailer_id'); ?>
		<?php echo $form->textField($model,'retailer_id'); ?>
		<?php echo $form->error($model,'retailer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificationtype'); ?>
		<?php echo $form->textField($model,'identificationtype'); ?>
		<?php echo $form->error($model,'identificationtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'internalpartnerno'); ?>
		<?php echo $form->textField($model,'internalpartnerno'); ?>
		<?php echo $form->error($model,'internalpartnerno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'docdestination'); ?>
		<?php echo $form->textField($model,'docdestination'); ?>
		<?php echo $form->error($model,'docdestination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'girotype'); ?>
		<?php echo $form->textField($model,'girotype'); ?>
		<?php echo $form->error($model,'girotype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'giro'); ?>
		<?php echo $form->textField($model,'giro'); ?>
		<?php echo $form->error($model,'giro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'girocreditor'); ?>
		<?php echo $form->textField($model,'girocreditor'); ?>
		<?php echo $form->error($model,'girocreditor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank'); ?>
		<?php echo $form->textField($model,'bank'); ?>
		<?php echo $form->error($model,'bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bankbranch'); ?>
		<?php echo $form->textField($model,'bankbranch'); ?>
		<?php echo $form->error($model,'bankbranch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regno'); ?>
		<?php echo $form->textField($model,'regno'); ?>
		<?php echo $form->error($model,'regno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account'); ?>
		<?php echo $form->textField($model,'account'); ?>
		<?php echo $form->error($model,'account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation'); ?>
		<?php echo $form->textField($model,'creation'); ?>
		<?php echo $form->error($model,'creation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fsc'); ?>
		<?php echo $form->textField($model,'fsc'); ?>
		<?php echo $form->error($model,'fsc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recorderformat'); ?>
		<?php echo $form->textField($model,'recorderformat'); ?>
		<?php echo $form->error($model,'recorderformat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctype'); ?>
		<?php echo $form->textField($model,'doctype'); ?>
		<?php echo $form->error($model,'doctype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expectinvoice'); ?>
		<?php echo $form->textField($model,'expectinvoice'); ?>
		<?php echo $form->error($model,'expectinvoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news'); ?>
		<?php echo $form->textField($model,'news'); ?>
		<?php echo $form->error($model,'news'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceraise2008'); ?>
		<?php echo $form->textField($model,'priceraise2008'); ?>
		<?php echo $form->error($model,'priceraise2008'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oexusername'); ?>
		<?php echo $form->textField($model,'oexusername'); ?>
		<?php echo $form->error($model,'oexusername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpr'); ?>
		<?php echo $form->textField($model,'cpr'); ?>
		<?php echo $form->error($model,'cpr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ediprice'); ?>
		<?php echo $form->textField($model,'ediprice'); ?>
		<?php echo $form->error($model,'ediprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact'); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'errormail'); ?>
		<?php echo $form->textField($model,'errormail'); ?>
		<?php echo $form->error($model,'errormail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bic'); ?>
		<?php echo $form->textField($model,'bic'); ?>
		<?php echo $form->error($model,'bic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iban'); ?>
		<?php echo $form->textField($model,'iban'); ?>
		<?php echo $form->error($model,'iban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymenttype'); ?>
		<?php echo $form->textField($model,'paymenttype'); ?>
		<?php echo $form->error($model,'paymenttype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceraise'); ?>
		<?php echo $form->textField($model,'priceraise'); ?>
		<?php echo $form->error($model,'priceraise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product'); ?>
		<?php echo $form->textField($model,'product'); ?>
		<?php echo $form->error($model,'product'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recinvoiceformat'); ?>
		<?php echo $form->textField($model,'recinvoiceformat'); ?>
		<?php echo $form->error($model,'recinvoiceformat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edimapfunction'); ?>
		<?php echo $form->textField($model,'edimapfunction'); ?>
		<?php echo $form->error($model,'edimapfunction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'danfoss_ext'); ?>
		<?php echo $form->textField($model,'danfoss_ext'); ?>
		<?php echo $form->error($model,'danfoss_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'danfoss_deb'); ?>
		<?php echo $form->textField($model,'danfoss_deb'); ?>
		<?php echo $form->error($model,'danfoss_deb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site'); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createddate'); ?>
                <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'model' => $model,
                                'attribute' => 'createddate',
                                'htmlOptions' => array(
                                'size' => '10',         // textField size
                                'maxlength' => '10',    // textField maxlength
                            ),
                        ));
                ?>
		<?php /*echo $form->textField($model,'createddate');*/ ?>
		<?php echo $form->error($model,'createddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleteddate'); ?>
		<?php echo $form->textField($model,'deleteddate'); ?>
		<?php echo $form->error($model,'deleteddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cvr_sent'); ?>
		<?php echo $form->textField($model,'cvr_sent'); ?>
		<?php echo $form->error($model,'cvr_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cvr_ok'); ?>
		<?php echo $form->textField($model,'cvr_ok'); ?>
		<?php echo $form->error($model,'cvr_ok'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->