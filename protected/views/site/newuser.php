<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'axForm-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>
    <?php Yii::app()->clientScript->registerScriptFile('js/addrow.js', CClientScript::POS_HEAD); ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <div class="formbox">
<?php echo $form->errorSummary(array($model, $address1, $address2, $partner1, $partner2, $invoicelines)); ?>

        <div class="row">
            <h3>User / Partner 1</h3>
        </div>
        <div class="row">   
            <?php echo $form->labelEx($model, 'username') ?>
            <?php echo $form->textField($model, 'username') ?>
            <?php echo $form->error($model, 'username') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'firstname') ?>
            <?php echo $form->textField($model, 'firstname') ?>
            <?php echo $form->error($model, 'firstname') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'lastname') ?>
            <?php echo $form->textField($model, 'lastname') ?>
            <?php echo $form->error($model, 'lastname') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($address1, 'Telefon nummer:') ?>
            <?php echo $form->textField($address1, '[1]phone') ?>
            <?php echo $form->error($address1, '[1]phone') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($model, 'email') ?>
            <?php echo $form->textField($model, 'email') ?>
            <?php echo $form->error($model, 'email') ?> 
        </div>  
        <div class="row">
            <?php echo $form->labelEx($address1, 'Adresse') ?>
            <?php echo $form->textField($address1, '[1]address1') ?>
            <?php echo $form->error($address1, '[1]address1') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($address1, 'Adresse') ?>
            <?php echo $form->textField($address1, '[1]address2') ?>
            <?php echo $form->error($address1, '[1]address2') ?>  
        </div>
        <div class="row">
            <?php echo $form->labelEx($address1, 'Adresse') ?>
            <?php echo $form->textField($address1, '[1]address3') ?>
            <?php echo $form->error($address1, '[1]address3') ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($address1, 'Post nummer') ?>
            <?php echo $form->textField($address1, '[1]zip') ?>
            <?php echo $form->error($address1, '[1]zip') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($address1, 'By') ?>
            <?php echo $form->textField($address1, '[1]city') ?>
            <?php echo $form->error($address1, '[1]city') ?>   
        </div>
        <div class="row">
            <?php echo $form->labelEx($partner1, 'cvr') ?>
            <?php echo $form->textField($partner1, '[1]validcvr') ?>
            <?php echo $form->error($partner1, '[1]validcvr') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($partner1, 'Firma navn') ?>
            <?php echo $form->textField($partner1, '[1]name') ?>
            <?php echo $form->error($partner1, '[1]name') ?> 
        </div>
    </div>
    <div class="formsplitter"></div>
    <div class="formbox">
        <div class="row">
            <h3>Partner 2</h3>
        </div>

        <div class="row">
            <?php echo $form->labelEx($partner2, 'Firma navn') ?>
            <?php echo $form->textField($partner2, '[2]name') ?>
            <?php echo $form->error($partner2, '[2]name') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($partner2, 'email') ?>
            <?php echo $form->textField($partner2, '[2]email') ?>
            <?php echo $form->error($partner2, '[2]email') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($partner2, 'cvr') ?>
            <?php echo $form->textField($partner2, '[2]validcvr') ?>
            <?php echo $form->error($partner2, '[2]validcvr') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($address2, 'Adresse') ?>
            <?php echo $form->textField($address2, '[2]address1') ?>
            <?php echo $form->error($address2, '[2]address1') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($address2, 'Adresse') ?>
            <?php echo $form->textField($address2, '[2]address2') ?>
            <?php echo $form->error($address2, '[2]address2') ?>  
        </div>
        <div class="row">
            <?php echo $form->labelEx($address2, 'Adresse') ?>
            <?php echo $form->textField($address2, '[2]address3') ?>
            <?php echo $form->error($address2, '[2]address3') ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($address2, 'Post nummer') ?>
            <?php echo $form->textField($address2, '[2]zip') ?>
            <?php echo $form->error($address2, '[2]zip') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($address2, 'By') ?>
            <?php echo $form->textField($address2, '[2]city') ?>
            <?php echo $form->error($address2, '[2]city') ?>   
        </div>
    </div> 
    <div class="horisontalsplitter"></div>          
    <div class="row">
        <h3>Invoices</h3>              
    </div>  
    <div class="invoicelines">
        <div class="invoiceline row" >
             <!-- start invoiceline -->
             <div style="width: 120px; height: 45px; margin:3px;float:left;clear:left;">
             <?php echo CHtml::label('Beskrivelse','',array('id'=>'antal_label', 'width'=>100)); ?>
             <?php echo CHtml::textArea('Fakturadata[0][varenavn]','',array('id'=>'antal', 'width'=>100,'maxlength'=>100, 'style' =>'height:1.5em; width:100px;')); ?>
            </div>
             <div style="width: 90px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Varenummer','',array('id'=>'Varenummer_label', 'style'=> 'width:80px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][Varenummer]','',array('id'=>'Varenummer', 'style'=>'width:80px;','maxlength'=>16)); ?>
            </div>
             <div style="width: 90px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Antal','',array('id'=>'antal_label', 'style'=> 'width:80px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][antal]','',array('id'=>'antal', 'style'=> 'width:80px;','maxlength'=>16)); ?>
            </div> 
            <div style="width: 55px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Pris','',array('id'=>'antal_label', 'style'=> 'width:45px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][Pris]','',array('id'=>'antal', 'style'=> 'width:45px;','maxlength'=>16)); ?>
            </div>
            <div style="width: 160px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Kontering','',array('id'=>'antal_label', 'width'=>100)); ?>
             <?php echo CHtml::textField('Fakturadata[0][Kontering]','',array('id'=>'antal', 'width'=>100,'maxlength'=>100)); ?>
            </div>
             <?php echo CHtml::hiddenField('Fakturadata[0][dimaccont]',''); ?>
             <div style="width: 60px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('MVA','',array('id'=>'ehf_vat_label')); ?>
             <?php echo CHtml::dropDownList('Fakturadata[0][ehf_vat]', '',array('25' => '25%', '0' => '0%', '8' => '8%', '10' => '10%'));?>
            </div> 
             <div style="width: 160px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Varebeloeb','',array('id'=>'Varebeloeb_label', 'width'=>100)); ?>
             <?php echo CHtml::textField('Fakturadata[0][Varebeloeb]',''); ?>
            </div>
             <?php echo CHtml::hiddenField('Fakturadata[0][Skaffevare]','ja'); ?>           
             <?php echo CHtml::hiddenField('Fakturadata[0][Ordrefradrag]',''); ?>
             <?php echo CHtml::hiddenField('Fakturadata[0][Momsfri]',''); ?>   
            <div style="width: 50px;  height: 45px; margin:3px; float:left; padding:15px 0 0 0;">
            <?php echo CHtml::Button('-', array('onClick'=>'deleterow()' ,'class' => 'fancybutton remove')); ?>
            <?php echo CHtml::Button('+', array('onClick'=>'dubTest()' , 'class' => 'fancybutton add')); ?>
            </div>
            
            <!-- End invoiceline --> 
          
        </div>          
    </div>
     <div class="horisontalsplitter"></div>          
    <div class="row1">
        <h3>Betaling</h3>              
    </div>  
       <!-- Start på ehfportal.no form -->
     
      <div class="row">
  
     <?php echo CHtml::label('Faktura dato',''); ?>
     <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'invoicedate',
                    'attribute' => 'date_from',
                    'htmlOptions' => array(
                    'size' => '10',    
                    'maxlength' => '10',
                    'background' => 'lightgrey'
    ),
));
?>
          <?php echo CHtml::label('Forfalls dato',''); ?>
     <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'duedate',
                    'attribute' => 'date_from',
                    'htmlOptions' => array(
                    'size' => '10',    
                    'maxlength' => '10',
                    'background' => 'lightgrey'
    ),
));
?>
          <?php echo CHtml::label('Leverings dato',''); ?>
     <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'deleverydate',
                    'attribute' => 'date_from',
                    'htmlOptions' => array(
                    'size' => '10',    
                    'maxlength' => '10',
                    'background' => 'lightgrey'
    ),
));
?>
<?php echo $form->error($model,'date_from'); ?>
</div>
   
     <div class="row">
     <?php echo CHtml::label('Kjøpsordrenr','',array('id'=>'info_til_indkoeber_Label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Ordrenummer','',array('id'=>'Info_til_indkoeber', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Beskjed til kunde','',array('id'=>'order_id_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[order_id]','',array('id'=>'order_id', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Bank kontonr.','',array('id'=>'type_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[type]','',array('id'=>'type', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('MVA grunnlag','',array('id'=>'Momssats_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[momssats]','',array('id'=>'Momssats', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Fakturanummer','',array('id'=>'kortart_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[kortart]','',array('id'=>'kortart', 'width'=>100,'maxlength'=>100)); ?>
    </div>
      <div class="row">
     <?php echo CHtml::label('KID','',array('id'=>'giro_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[giro]','',array('id'=>'giro', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('MVA','',array('id'=>'girocreditor_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[girocreditor]','',array('id'=>'girocreditor', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Fakturatotal eks. MVA','',array('id'=>'paymenttype_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[paymenttype]','',array('id'=>'paymenttype', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Fakturatotal inkl. MVA','',array('id'=>'bank_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[bank]','',array('id'=>'bank', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Deres ref.','',array('id'=>'bankbranch_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('buyercontact','',array('id'=>'bankbranch', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Vår ref.','',array('id'=>'regno_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('sellercontact','',array('id'=>'regno', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Intern kommentar','',array('id'=>'account_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[account]','',array('id'=>'account', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Kontrakt nr.','',array('id'=>'bic_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[bic]','',array('id'=>'bic', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    
    <!-- Start på hiddenField s  -->   
     <?php echo CHtml::hiddenField('Fakturadata[iban]',''); ?>  
     <?php echo CHtml::hiddenField('Fakturadata[comment]',''); ?> 
     <?php echo CHtml::hiddenField('Fakturadata[status]',''); ?>
     <?php echo CHtml::hiddenField('Fakturadata[behandler]','')?>
     <?php echo CHtml::hiddenField('EANlokationsnr',''); ?>
     <?php echo CHtml::hiddenField('kontraktReference','');?>
     <?php echo CHtml::hiddenField('Seneste_rettidige_betalingsdato',''); ?>
     <?php echo CHtml::hiddenField('Leveringsdato',''); ?>
     <?php echo CHtml::hiddenField('Ordrenummer',''); ?>    
     <?php echo CHtml::hiddenField('Fakturanummer',''); ?>  
     <?php echo CHtml::hiddenField('Kreditnotanummer',''); ?>    
     <?php echo CHtml::hiddenField('refno',''); ?>  
     <?php echo CHtml::hiddenField('buyercontact',''); ?>  
     <?php echo CHtml::hiddenField('sellercontact',''); ?>  
     <?php echo CHtml::hiddenField('orderContactName',''); ?>
     <?php echo CHtml::hiddenField('sellersOrderID',''); ?> 
     <?php echo CHtml::hiddenField('Ordredato',''); ?>
     <?php echo CHtml::hiddenField('dimaccount',''); ?>
     <?php echo CHtml::hiddenField('KontantRabatSats',''); ?>
     <?php echo CHtml::hiddenField('KontantRabatDato',''); ?>
     <?php echo CHtml::hiddenField('sellersOrderID',''); ?> 
     <?php echo CHtml::hiddenField('StrafRenteDato',''); ?>    
     <?php echo CHtml::hiddenField('shipping',''); ?>    
     <?php echo CHtml::hiddenField('tax',''); ?>   
     <?php echo CHtml::hiddenField('duty',''); ?>    
     <?php echo CHtml::hiddenField('importchg',''); ?>    
     <?php echo CHtml::hiddenField('Tillaeg',''); ?> 
     <?php echo CHtml::hiddenField('Fradrag',''); ?>   
     <?php echo CHtml::hiddenField('Varetotal',''); ?> 
     <?php echo CHtml::hiddenField('Varebeloeb',''); ?>   
     <?php echo CHtml::hiddenField('momsgrundlag',''); ?>   
     <?php echo CHtml::hiddenField('tax',''); ?>   
     <?php echo CHtml::hiddenField('linjetotal_eks_moms',''); ?>
     <?php echo CHtml::hiddenField('vat[shipping]',''); ?>  
             <?php echo CHtml::hiddenField('vat[tax]',''); ?> 
             <?php echo CHtml::hiddenField('vat[duty]',''); ?>  
             <?php echo CHtml::hiddenField('vat[importchg]',''); ?>  
             <?php echo CHtml::hiddenField('vat[Tillaeg]',''); ?> 
             <?php echo CHtml::hiddenField('vat[Fradrag]',''); ?>
             <?php echo CHtml::hiddenField('duty','0'); ?>
             <?php echo CHtml::hiddenField('importchg','0'); ?>
             <?php echo CHtml::hiddenField('Tillaeg','0'); ?>
             <?php echo CHtml::hiddenField('Fradrag','0'); ?>
             <?php echo CHtml::hiddenField('Varetotal','0'); ?>
             <?php echo CHtml::hiddenField('Varebeloeb','0'); ?>
             <?php echo CHtml::hiddenField('momsgrundlag','0.00'); ?>
             <?php echo CHtml::hiddenField('linjetotal_eks_moms','200.00'); ?>
             <?php echo CHtml::hiddenField('ehf_momsgrundlag[25]','200'); ?>
             <?php echo CHtml::hiddenField('ehf_moms[25]','50'); ?>
             <?php echo CHtml::hiddenField('ehf_momsgrundlag_total','50');?>
             <?php echo CHtml::hiddenField('Moms','0'); ?>
     
     
     
     
    <div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
    <?php echo CHtml::submitButton('Submit', array('class' => 'fancybutton')); ?>
    </div>
     
<?php $this->endWidget(); ?>

</div>


