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

	<?php echo $form->errorSummary(array($Users, $Address, $Ourinvoices)); ?>
        <div class="box"> 
        <div class="row">Afsender</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Organisations Nummmer', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'cvr'); ?>
		<?php echo $form->error($Address,'cvr'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'Firma Navn', array('class'=>'test')); ?>
		<?php echo $form->textField($Users,'email'); ?>
		<?php echo $form->error($Users,'email'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Adresse', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address1'); ?>
		<?php echo $form->error($Address,'address1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Adresse', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address2'); ?>
		<?php echo $form->error($Address,'address2'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Postnummer', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'zip'); ?>
		<?php echo $form->error($Address,'zip'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'By', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'city'); ?>
		<?php echo $form->error($Address,'city'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Lande kode', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'countrycode'); ?>
		<?php echo $form->error($Address,'countrycode'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'email', array('class'=>'test')); ?>
		<?php echo $form->textField($Users,'email'); ?>
		<?php echo $form->error($Users,'email'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Ourinvoices,'type', array('class'=>'test')); ?>		
                <?php echo $form->dropDownList($Ourinvoices,'type', array('invoice','credit')); ?>
		<?php echo $form->error($Ourinvoices,'type'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Ourinvoices,'invoicenumber', array('class'=>'test')); ?>
		<?php echo $form->textField($Ourinvoices,'invoicenumber'); ?>
		<?php echo $form->error($Ourinvoices,'invoicenumber'); ?>
        </div>
</div>
        <div class="box">
        <div class="row">Modtager</div>
        <div class="row">
		<?php echo $form->labelEx($Ourinvoices,'Organisations nummer', array('class'=>'test')); ?>
		<?php echo $form->textField($Ourinvoices,'invoicenumber'); ?>
		<?php echo $form->error($Ourinvoices,'invoicenumber'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Ourinvoices,'Firma navn', array('class'=>'test')); ?>
		<?php echo $form->textField($Ourinvoices,'invoicenumber'); ?>
		<?php echo $form->error($Ourinvoices,'invoicenumber'); ?>
	</div>
         <div class="row">
		<?php echo $form->labelEx($Address,'Adresse', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address1'); ?>
		<?php echo $form->error($Address,'address1'); ?>
	</div>
         <div class="row">
		<?php echo $form->labelEx($Address,'Adresse', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address2'); ?>
		<?php echo $form->error($Address,'address2'); ?>
	</div>
         <div class="row">
		<?php echo $form->labelEx($Address,'Postnummer', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'zip'); ?>
		<?php echo $form->error($Address,'zip'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'By', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'city'); ?>
		<?php echo $form->error($Address,'city'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'Kontakt id', array('class'=>'test')); ?>
		<?php echo $form->textField($Users,'email'); ?>
		<?php echo $form->error($Users,'email'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'email', array('class'=>'test')); ?>
		<?php echo $form->textField($Users,'email'); ?>
		<?php echo $form->error($Users,'email'); ?>
	</div>
        
</div>
        <div class="box">       
        <div class="row">Leverings Adresse</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Type', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'type'); ?>
                <?php echo $form->dropDownList($Ourinvoices,'type', array('order','company','delivery','invoice')); ?>
		<?php echo $form->error($Address,'type'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'Modtager', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address1'); ?>
		<?php echo $form->error($Address,'address1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'address', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'address1'); ?>
		<?php echo $form->error($Address,'address1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Address,'By', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'city'); ?>
		<?php echo $form->error($Address,'city'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($Address,'Postnummer', array('class'=>'test')); ?>
		<?php echo $form->textField($Address,'zip'); ?>
		<?php echo $form->error($Address,'zip'); ?>
	</div>
</div>
        <div class="box">
        <div class="row">Faktura dato og referancer</div>
        <div class="row">
        <?php echo $form->labelEx($Ourinvoices,'Type', array('class'=>'test')); ?>
        <?php echo $form->dropDownList($Ourinvoices,'type', array('invoice','credit')); ?>
       	<?php echo $form->error($Ourinvoices,'type'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Faktura nummer', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Ourinvoices,'Faktura dato', array('class'=>'test')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $Ourinvoices,
        'attribute' => 'invoicedate',
        'htmlOptions' => array(
        // textField maxlength
         ),
));     ?>
	<?php echo $form->error($Ourinvoices,'invoicedate'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Leverings dato', array('class'=>'test')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $Ourinvoices,
        'attribute' => 'paiddate',
        'htmlOptions' => array(
        'size' => '10',         // textField size
        'maxlength' => '10',    // textField maxlength
         ),
));     ?>
	<?php echo $form->error($Address,'paiddate'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Ordre Reference', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Person Reference', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Konto nummer', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Noter', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Leverings dato', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Valuta', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        </div>
        <div class="box">
        <div class="row">Vare linier</div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Vare nummer', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Beskrivelse', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Antal', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Pris', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Moms', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Rabat', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Beløb', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        </div>
        <div class="box">
        <div class="row">Betaling</div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Betalings dato', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Betalings form', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">
        <?php echo $form->labelEx($Address,'Rabat', array('class'=>'test')); ?>
        <?php echo $form->textField($Address,'zip'); ?>
	<?php echo $form->error($Address,'zip'); ?>
        </div>
        <div class="row">TODO: Lav funtion der ændre input felter der passer til betalings form</div>
        
        </div>
        <div class="box">
        <div class="row">Bilag</div>
        <div class="row">TODO: fil uploader </div>
        </div>
        
<div class="row buttons">
<?php echo CHtml::submitButton($Address->isNewRecord ? 'Send faktura' : 'Save'); ?>
    
<div class="row buttons">
    <?php  /*echo CHtml::submitButton($this->sendMail(), array('style','width:100px;')); */?> 
    <?php /*echo CHtml::Button('Hello!', array('submit' => $this->sendMail() ));*/ ?>
</div>
            

<?php $this->endWidget(); ?>

</div><!-- form -->