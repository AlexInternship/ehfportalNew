<?php
/* @var $this SiteController */
/* @var $users Users */
/* @var $address Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partners-partnersView-form',
        /*'focus'=>array($users,'partnerno'),*/
        'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($users); ?>
        
        <div class="row">
		<?php echo $form->labelEx($address,'cvr', array('class'=>'test')); ?>
		<?php echo $form->textField($address,'cvr', array('value'=>'cvr', 'onFocus'=>'if(this.value=="cvr"){this.value=""}')); ?>
		<?php echo $form->error($address,'cvr'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($address,'address1', array('class'=>'test')); ?>
		<?php echo $form->textField($address,'address1', array('value'=>'address', 'onFocus'=>'if(this.value=="address"){this.value=""}')); ?>
		<?php echo $form->error($address,'address1'); ?>
	</div>
        
        	<div class="row">
		<?php echo $form->labelEx($address,'city', array('class'=>'test')); ?>
		<?php echo $form->textField($address,'city', array('value'=>'city', 'onFocus'=>'if(this.value=="city"){this.value=""}')); ?>
		<?php echo $form->error($address,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'zip', array('class'=>'test')); ?>
		<?php echo $form->textField($address,'zip', array('value'=>'zip', 'onFocus'=>'if(this.value=="zip"){this.value=""}')); ?>
		<?php echo $form->error($address,'zip'); ?>
	</div>
        
        	<div class="row">
		<?php echo $form->labelEx($users,'email', array('class'=>'test')); ?>
		<?php echo $form->textField($users,'email', array('value'=>'email', 'onFocus'=>'if(this.value=="email"){this.value=""}')); ?>
		<?php echo $form->error($users,'email'); ?>
	</div>


<div class="row buttons">
<?php echo CHtml::submitButton($users->isNewRecord ? 'Create' : 'Save'); ?>
    
<div class="row buttons">
    <?php  /*echo CHtml::submitButton($this->sendMail(), array('style','width:100px;')); */?> 
    <?php /*echo CHtml::Button('Hello!', array('submit' => $this->sendMail() ));*/ ?>
</div>
            

<?php $this->endWidget(); ?>

</div><!-- form -->