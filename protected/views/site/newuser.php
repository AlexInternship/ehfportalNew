<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'axForm-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="formbox">
	<?php echo $form->errorSummary($model); /*asdasd*/?>

        <div class="row">
            <?php echo $form->labelEx($model, 'username')?>
            <?php echo $form->textField($model, 'username')?>
            <?php echo $form->error($model, 'username')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'firstname')?>
            <?php echo $form->textField($model, 'firstname')?>
            <?php echo $form->error($model, 'firstname')?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'lastname')?>
            <?php echo $form->textField($model, 'lastname')?>
            <?php echo $form->error($model, 'lastname')?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'phone')?>
            <?php echo $form->textField($model, 'phone')?>
            <?php echo $form->error($model, 'phone')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'email')?>
            <?php echo $form->textField($model, 'email')?>
            <?php echo $form->error($model, 'email')?> 
        </div></div>
             <div class="formsplitter"></div>
             <div class="formbox">
               <div class="row">
            <?php echo $form->labelEx($model, 'Adresse')?>
            <?php echo $form->textField($model, 'address1')?>
            <?php echo $form->error($model, 'address1')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'Adresse')?>
            <?php echo $form->textField($model, 'address2')?>
            <?php echo $form->error($model, 'address2')?>  
        </div>
        <div class="row">
             <?php echo $form->labelEx($model, 'Adresse')?>
            <?php echo $form->textField($model, 'address3')?>
            <?php echo $form->error($model, 'address3')?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'Post nummer')?>
            <?php echo $form->textField($model, 'zip')?>
            <?php echo $form->error($model, 'zip')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'By')?>
            <?php echo $form->textField($model, 'city')?>
            <?php echo $form->error($model, 'city')?>   
         </div>
     </div>
             <div style="width:900px; margin-left: auto; margin-right:auto; border-top:1px solid #888; float:left;"></div>
             <div class="formbox">
               <div class="row">
            <?php echo $form->labelEx($model, 'Navn')?>
            <?php echo $form->textField($model, 'address1')?>
            <?php echo $form->error($model, 'address1')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'Type')?> 
            <?php echo CHtml::dropDownList('address2' ,'',array(1=>'0',2=>'04',3=>'15',4=>'71',5=>'73',6=>'75'));?>
            <?php echo $form->error($model, 'address2')?>  
        </div>
        <div class="row">
             <?php echo $form->labelEx($model, 'Betalings type')?>
            <?php echo CHtml::dropDownList('address3' ,'',array(1=>'giro',2=>'bank',3=>'iban'));?>
            <?php echo $form->error($model, 'address3')?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'Post nummer')?>
            <?php echo $form->textField($model, 'zip')?>
            <?php echo $form->error($model, 'zip')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'By')?>
            <?php echo $form->textField($model, 'city')?>
            <?php echo $form->error($model, 'city')?>   
         </div>
     </div>
       	<div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
		<?php echo CHtml::submitButton('Submit', array('class'=>'fancybutton')); ?>
	</div>
<?php $this->endWidget(); ?>

</div>
        

