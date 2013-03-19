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
            <?php $form->labelEx($model, 'momsfri')?>
            <?php $form->textField($model, 'momsfri')?>
            <?php $form->error($model, 'momsfri')?> 
        </div>
        <div class="row">
            <?php $form->labelEx($model, 'antal')?>
            <?php $form->textField($model, 'antal')?>
            <?php $form->error($model, 'antal')?> 
        </div>
        <div class="row">
            <?php $form->labelEx($model, 'pris')?>
            <?php $form->textField($model, 'pris')?>
            <?php $form->error($model, 'pris')?> 
        </div>
        <div class="row">
            <?php $form->labelEx($model, 'kontering')?>
            <?php $form->textField($model, 'kontering')?>
            <?php $form->error($model, 'kontering')?> 
        </div>
        <div class="row">
            <?php $form->labelEx($model, 'dimaccount')?>
            <?php $form->textField($model, 'dimaccount')?>
            <?php $form->error($model, 'dimaccount')?> 
        </div>
        	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
        
