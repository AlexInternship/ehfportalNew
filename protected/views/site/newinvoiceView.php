<?php
/* @var $this SiteController */
/* @var $users Users */
/* @var $Address Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Users-form',
        /*'focus'=>array($users,'partnerno'),*/
        'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($Users, $Address)); ?>
        
        <div class="row">
		<?php echo $form->labelEx($Address,'cvr', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'cvr'); ?>
		<?php echo $form->error($Address,'cvr'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($Address,'address1', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address1'); ?>
		<?php echo $form->error($Address,'address1'); ?>
	</div>
        
        	<div class="row">
		<?php echo $form->labelEx($Address,'city', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'city'); ?>
		<?php echo $form->error($Address,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Address,'zip', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'zip'); ?>
		<?php echo $form->error($Address,'zip'); ?>
	</div>
        
        	<div class="row">
		<?php echo $form->labelEx($Users,'email', array('class'=>'test')); ?>
		<?php echo $form->textField($Users,'email'); ?>
		<?php echo $form->error($Users,'email'); ?>
	</div>
 

<div class="row buttons">
<?php echo CHtml::submitButton($Address->isNewRecord ? 'Create' : 'Save'); ?>
    
<div class="row buttons">
    <?php  /*echo CHtml::submitButton($this->sendMail(), array('style','width:100px;')); */?> 
    <?php /*echo CHtml::Button('Hello!', array('submit' => $this->sendMail() ));*/ ?>
</div>
            

<?php $this->endWidget(); ?>

</div><!-- form -->