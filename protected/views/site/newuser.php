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
             <h3>User / Partner 1</h3>
         </div>
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
            <?php echo $form->labelEx($address1, 'Telefon nummer:')?>
            <?php echo $form->textField($address1, 'phone')?>
            <?php echo $form->error($address1, 'phone')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($model, 'email')?>
            <?php echo $form->textField($model, 'email')?>
            <?php echo $form->error($model, 'email')?> 
        </div>  
        <div class="row">
            <?php echo $form->labelEx($address1, 'Adresse')?>
            <?php echo $form->textField($address1, 'address1')?>
            <?php echo $form->error($address1, 'address1')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($address1, 'Adresse')?>
            <?php echo $form->textField($address1, 'address2')?>
            <?php echo $form->error($address1, 'address2')?>  
        </div>
        <div class="row">
             <?php echo $form->labelEx($address1, 'Adresse')?>
            <?php echo $form->textField($address1, 'address3')?>
            <?php echo $form->error($address1, 'address3')?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($address1, 'Post nummer')?>
            <?php echo $form->textField($address1, 'zip')?>
            <?php echo $form->error($address1, 'zip')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($address1, 'By')?>
            <?php echo $form->textField($address1, 'city')?>
            <?php echo $form->error($address1, 'city')?>   
         </div>
         <div class="row">
            <?php echo $form->labelEx($partner1, 'cvr')?>
            <?php echo $form->textField($partner1, 'validcvr')?>
            <?php echo $form->error($partner1, 'validcvr')?> 
         </div>
            <div class="row">
            <?php echo $form->labelEx($partner1, 'Firma navn')?>
            <?php echo $form->textField($partner1, 'name')?>
            <?php echo $form->error($partner1, 'name')?> 
         </div>
     </div>
               <div class="formsplitter"></div>
     <div class="formbox">
         <div class="row">
             <h3>Partner 2</h3>
         </div>
   
        <div class="row">
         <?php echo $form->labelEx($partner2, 'Firma navn')?>
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
         <div class="row">
            <?php echo $form->labelEx($address2, 'Adresse')?>
            <?php echo $form->textField($address2, 'address1')?>
            <?php echo $form->error($address2, 'address1')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($address2, 'Adresse')?>
            <?php echo $form->textField($address2, 'address2')?>
            <?php echo $form->error($address2, 'address2')?>  
        </div>
        <div class="row">
             <?php echo $form->labelEx($address2, 'Adresse')?>
            <?php echo $form->textField($address2, 'address3')?>
            <?php echo $form->error($address2, 'address3')?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($address2, 'Post nummer')?>
            <?php echo $form->textField($address2, 'zip')?>
            <?php echo $form->error($address2, 'zip')?> 
        </div>
         <div class="row">
            <?php echo $form->labelEx($address2, 'By')?>
            <?php echo $form->textField($address2, 'city')?>
            <?php echo $form->error($address2, 'city')?>   
         </div>
     </div> 
   
       	<div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
		<?php echo CHtml::submitButton('Submit', array('class'=>'fancybutton')); ?>
	</div>
<?php $this->endWidget(); ?>

</div>
        

