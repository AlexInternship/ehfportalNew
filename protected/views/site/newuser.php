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
	<?php echo $form->errorSummary($model);?>

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
        </div>  
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
   <div class="formsplitter"></div>           
    <div class="formbox">
         <div class="row">
             <h3>Partner 1</h3>
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner1, 'account')?>
            <?php echo $form->textField($partner1, 'account')?>
            <?php echo $form->error($partner1, 'account')?> 
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner1, 'contact')?>
            <?php echo $form->textField($partner1, 'contact')?>
            <?php echo $form->error($partner1, 'contact')?> 
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner1, 'cvr')?>
            <?php echo $form->textField($partner1, 'validcvr')?>
            <?php echo $form->error($partner1, 'validcvr')?> 
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner1, 'Kodeord')?>
            <?php echo $form->textField($partner1, 'password')?>
            <?php echo $form->error($partner1, 'password')?> 
         </div>
     </div>
               <div class="formsplitter"></div>
     <div class="formbox">
         <div class="row">
             <h3>Partner 2</h3>
         </div>
   
        <div class="row">
            <?php echo $form->labelEx($partner2, 'Navn')?>
            <?php echo $form->textField($partner2, 'name')?>
            <?php echo $form->error($partner2, 'name')?> 
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner2, 'email')?>
            <?php echo $form->textField($partner2, 'email')?>
            <?php echo $form->error($partner2, 'email')?> 
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner2, 'contact')?>
            <?php echo $form->textField($partner2, 'contact')?>
            <?php echo $form->error($partner2, 'contact')?> 
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner2, 'cvr')?>
            <?php echo $form->textField($partner2, 'validcvr')?>
            <?php echo $form->error($partner2, 'validcvr')?> 
         </div>
     </div>
       	<div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
		<?php echo CHtml::submitButton('Submit', array('class'=>'fancybutton')); ?>
	</div>
<?php $this->endWidget(); ?>

</div>
        

