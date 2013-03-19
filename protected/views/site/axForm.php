<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'axForm-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); /*asdasd*/?>

        <div class="row">
            <?php echo $form->labelEx($model, 'momsfri')?>
            <?php echo $form->textField($model, 'momsfri')?>
            <?php echo $form->error($model, 'momsfri')?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'antal')?>
            <?php echo $form->textField($model, 'antal')?>
            <?php echo $form->error($model, 'antal')?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'pris')?>
            <?php echo $form->textField($model, 'pris')?>
            <?php echo $form->error($model, 'pris')?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'kontering')?>
            <?php echo $form->textField($model, 'kontering')?>
            <?php echo $form->error($model, 'kontering')?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'dimaccount')?>
            <?php echo $form->textField($model, 'dimaccount')?>
            <?php echo $form->error($model, 'dimaccount')?> 
        </div>
        	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
        
