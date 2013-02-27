<?php
/* @var $this partnersController */
/* @var $model partners */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partners-partnersView-form',
        /*'focus'=>array($model,'partnerno'),*/
        'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'partnerno', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'partnerno', array('value'=>'Partner nummer', 'onFocus'=>'if(this.value=="Partner nummer"){this.value=""}')); ?>
		<?php echo $form->error($model,'partnerno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validcvr', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'validcvr', array('value'=>'validcvr', 'onFocus'=>'if(this.value=="validcvr"){this.value=""}')); ?>
		<?php echo $form->error($model,'validcvr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scanmail', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'scanmail', array('value'=>'scanmail', 'onFocus'=>'if(this.value=="scanmail"){this.value=""}')); ?>
		<?php echo $form->error($model,'scanmail'); ?>
	</div>
       
	<div class="row">
		<?php echo $form->labelEx($model,'info_to_purchaser', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'info_to_purchaser'); ?>
		<?php echo $form->error($model,'info_to_purchaser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailcomment', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'mailcomment'); ?>
		<?php echo $form->error($model,'mailcomment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retailer_id', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'retailer_id'); ?>
		<?php echo $form->error($model,'retailer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificationtype', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'identificationtype'); ?>
		<?php echo $form->error($model,'identificationtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'version'); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'internalpartnerno', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'internalpartnerno'); ?>
		<?php echo $form->error($model,'internalpartnerno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'docdestination', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'docdestination'); ?>
		<?php echo $form->error($model,'docdestination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'girotype', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'girotype'); ?>
		<?php echo $form->error($model,'girotype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'giro', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'giro'); ?>
		<?php echo $form->error($model,'giro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'girocreditor', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'girocreditor'); ?>
		<?php echo $form->error($model,'girocreditor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'bank'); ?>
		<?php echo $form->error($model,'bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bankbranch', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'bankbranch'); ?>
		<?php echo $form->error($model,'bankbranch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regno', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'regno'); ?>
		<?php echo $form->error($model,'regno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'account'); ?>
		<?php echo $form->error($model,'account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'creation'); ?>
		<?php echo $form->error($model,'creation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fsc', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'fsc'); ?>
		<?php echo $form->error($model,'fsc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recorderformat', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'recorderformat'); ?>
		<?php echo $form->error($model,'recorderformat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctype', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'doctype'); ?>
		<?php echo $form->error($model,'doctype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expectinvoice', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'expectinvoice'); ?>
		<?php echo $form->error($model,'expectinvoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'news'); ?>
		<?php echo $form->error($model,'news'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceraise2008', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'priceraise2008'); ?>
		<?php echo $form->error($model,'priceraise2008'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oexusername', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'oexusername'); ?>
		<?php echo $form->error($model,'oexusername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpr', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'cpr'); ?>
		<?php echo $form->error($model,'cpr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ediprice', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'ediprice'); ?>
		<?php echo $form->error($model,'ediprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'contact'); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'errormail', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'errormail'); ?>
		<?php echo $form->error($model,'errormail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bic', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'bic'); ?>
		<?php echo $form->error($model,'bic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iban', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'iban'); ?>
		<?php echo $form->error($model,'iban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymenttype', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'paymenttype'); ?>
		<?php echo $form->error($model,'paymenttype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceraise', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'priceraise'); ?>
		<?php echo $form->error($model,'priceraise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'product'); ?>
		<?php echo $form->error($model,'product'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recinvoiceformat', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'recinvoiceformat'); ?>
		<?php echo $form->error($model,'recinvoiceformat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edimapfunction', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'edimapfunction'); ?>
		<?php echo $form->error($model,'edimapfunction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'danfoss_ext', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'danfoss_ext'); ?>
		<?php echo $form->error($model,'danfoss_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'danfoss_deb', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'danfoss_deb'); ?>
		<?php echo $form->error($model,'danfoss_deb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'site'); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createddate', array('class'=>'test')); ?>
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
		<?php echo $form->textField($model,'createddate'); ?>
		<?php echo $form->error($model,'createddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleteddate', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'deleteddate'); ?>
		<?php echo $form->error($model,'deleteddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cvr_sent', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'cvr_sent'); ?>
		<?php echo $form->error($model,'cvr_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cvr_ok', array('class'=>'test')); ?>
		<?php echo $form->textField($model,'cvr_ok'); ?>
		<?php echo $form->error($model,'cvr_ok'); ?>
	</div>

<div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>


<?php $this->endWidget(); ?>

</div><!-- form -->