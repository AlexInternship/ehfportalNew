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
            <div style="width: 160px; height: 45px; margin:3px;float:left;clear:left;">
            <?php echo $form->labelEx($invoicelines, 'Beskrivelse') ?>
            <?php echo $form->textField($invoicelines, '[1]itemnumber') ?>
            <?php echo $form->error($invoicelines, '[1]itemnumber') ?>
            </div>    
            <div style="width: 160px; height: 45px; margin:3px; float:left;">
            <?php echo $form->labelEx($invoicelines, 'Pris') ?>
            <?php echo $form->textField($invoicelines, '[1]invoiced') ?>
            <?php echo $form->error($invoicelines, '[1]invoiced') ?>
            </div>
            <div style="width: 60px; height: 45px; margin:3px; float:left;">
            <?php echo $form->labelEx($invoicelines, 'Antal') ?>
            <?php echo $form->textField($invoicelines, '[1]invoiced',array('style'=>'width:50px;')) ?>
            <?php echo $form->error($invoicelines, '[1]invoiced') ?>
            </div>
            <div style="width: 60px; height: 45px; margin:3px; float:left;">
            <?php echo $form->labelEx($invoicelines, 'Moms') ?>
            <?php echo $form->textField($invoicelines, '[1]invoiced',array('style'=>'width:50px;')) ?>
            <?php echo $form->error($invoicelines, '[1]invoiced') ?>
            </div>
            <div style="width: 100px; height: 45px; margin:3px; float:left;">
            <?php echo $form->labelEx($invoicelines, 'Noget mere') ?>
            <?php echo $form->textField($invoicelines, '[1]invoiced',array('style'=>'width:50px;')) ?>
            <?php echo $form->error($invoicelines, '[1]invoiced') ?>
            </div>
            <div style="width: 200px;  height: 45px; margin:3px; float:left;">
            <?php echo CHtml::Button('-', array('onClick'=>'deleterow()' ,'class' => 'fancybutton remove')); ?>
            <?php echo CHtml::Button('+', array('onClick'=>'dubTest()' , 'class' => 'fancybutton add')); ?>
            </div>
        </div>          
    </div>
     <div class="horisontalsplitter"></div>          
    <div class="row1">
        <h3>Betaling</h3>              
    </div>  
     <div class="row">
     <?php echo CHtml::dropDownList('Moms', '', 
              array('yes' => '25%', 'no' => '0%'),
              array('empty' => '(Vælg moms)'));?>
     </div>
     
      <div class="row">
  
     <?php echo CHtml::label('Faktura dato',''); ?>
     <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'Fakturadata[FakturaDato]',
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
     <?php echo CHtml::label('Info til køber','',array('id'=>'info_til_indkoeber_Label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[Info_til_indkoeber]','',array('id'=>'Info_til_indkoeber', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Fakturadata[Order id]','',array('id'=>'order_id_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('fakturadata[order_id]','',array('id'=>'order_id', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Type','',array('id'=>'type_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('fakturadata[type]','',array('id'=>'type', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Momssats','',array('id'=>'Momssats_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[momssats]','',array('id'=>'Momssats', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Kortart','',array('id'=>'kortart_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[kortart]','',array('id'=>'kortart', 'width'=>100,'maxlength'=>100)); ?>
    </div>
      <div class="row">
     <?php echo CHtml::label('Giro','',array('id'=>'giro_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[giro]','',array('id'=>'giro', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Giro creditor','',array('id'=>'girocreditor_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[girocreditor]','',array('id'=>'girocreditor', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Betalings type','',array('id'=>'paymenttype_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[paymenttype]','',array('id'=>'paymenttype', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Bank','',array('id'=>'bank_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[bank]','',array('id'=>'bank', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('bankbranch','',array('id'=>'bankbranch_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[bankbranch]','',array('id'=>'bankbranch', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('regno','',array('id'=>'regno_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[regno]','',array('id'=>'regno', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('account','',array('id'=>'account_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[account]','',array('id'=>'account', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('bic','',array('id'=>'bic_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[bic]','',array('id'=>'bic', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('iban','',array('id'=>'iban_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[iban]','',array('id'=>'iban', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('comment','',array('id'=>'comment_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[comment]','',array('id'=>'comment', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Status','',array('id'=>'status_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[status]','',array('id'=>'status', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('behandler','',array('id'=>'behandler_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturadata[behandler]','',array('id'=>'behandler', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('EANlokationsnr','',array('id'=>'EANlokationsnr_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('EANlokationsnr','',array('id'=>'EANlokationsnr', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('kontraktReference','',array('id'=>'kontraktReference_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('kontraktReference','',array('id'=>'kontraktReference', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Seneste_rettidige_betalingsdato','',array('id'=>'Seneste_rettidige_betalingsdato_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Seneste_rettidige_betalingsdato','',array('id'=>'kontraktReference', 'width'=>100,'maxlength'=>100)); ?>
    </div>
      <div class="row">
     <?php echo CHtml::label('Leveringsdato','',array('id'=>'Leveringsdato_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Leveringsdato','',array('id'=>'Leveringsdato', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Ordrenummer','',array('id'=>'Ordrenummer_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Ordrenummer','',array('id'=>'Ordrenummer', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Fakturanummer','',array('id'=>'Fakturanummer_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fakturanummer','',array('id'=>'Fakturanummer', 'width'=>100,'maxlength'=>100)); ?>
    </div>
      <div class="row">
     <?php echo CHtml::label('Kreditnotanummer','',array('id'=>'Kreditnotanummer_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Kreditnotanummer','',array('id'=>'Kreditnotanummer', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('refno','',array('id'=>'refno_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('refno','',array('id'=>'refno', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('buyercontact','',array('id'=>'buyercontact_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('buyercontact','',array('id'=>'buyercontact', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('sellercontact','',array('id'=>'sellercontact_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('sellercontact','',array('id'=>'sellercontact', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('orderContactName','',array('id'=>'orderContactName_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('orderContactName','',array('id'=>'orderContactName', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
      <div class="row">
     <?php echo CHtml::label('sellersOrderID','',array('id'=>'sellersOrderID_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('sellersOrderID','',array('id'=>'sellersOrderID', 'width'=>100,'maxlength'=>100)); ?>
    </div>
      <div class="row">
     <?php echo CHtml::label('Ordredato','',array('id'=>'Ordredato_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Ordredato','',array('id'=>'Ordredato', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
    <div class="row">
     <?php echo CHtml::label('dimaccount','',array('id'=>'dimaccount_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('dimaccount','',array('id'=>'dimaccount', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
    <div class="row">
     <?php echo CHtml::label('KontantRabatSats','',array('id'=>'KontantRabatSats_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('KontantRabatSats','',array('id'=>'KontantRabatSats', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
    <div class="row">
     <?php echo CHtml::label('KontantRabatDato','',array('id'=>'KontantRabatDato_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('KontantRabatDato','',array('id'=>'KontantRabatDato', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
    <div class="row">
     <?php echo CHtml::label('StrafRenteSats','',array('id'=>'StrafRenteSats_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('sellersOrderID','',array('id'=>'sellersOrderID', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
    <div class="row">
     <?php echo CHtml::label('StrafRenteDato','',array('id'=>'StrafRenteDato_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('StrafRenteDato','',array('id'=>'StrafRenteDato', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('shipping','',array('id'=>'shipping_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('shipping','',array('id'=>'shipping', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     
     
     <div class="row">
     <?php echo CHtml::label('tax','',array('id'=>'tax_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('tax','',array('id'=>'tax', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('duty','',array('id'=>'duty_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('duty','',array('id'=>'duty', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('importchg','',array('id'=>'importchg_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('importchg','',array('id'=>'importchg', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('Tillaeg','',array('id'=>'Tillaeg_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Tillaeg','',array('id'=>'Tillaeg', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('Fradrag','',array('id'=>'Fradrag_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Fradrag','',array('id'=>'Fradrag', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('Varetotal','',array('id'=>'Varetotal_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Varetotal','',array('id'=>'Varetotal', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('Varebeloeb','',array('id'=>'Varebeloeb_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Varebeloeb','',array('id'=>'Varebeloeb', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('momsgrundlag','',array('id'=>'momsgrundlag_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('momsgrundlag','',array('id'=>'momsgrundlag', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('tax','',array('id'=>'tax_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('tax','',array('id'=>'tax', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     <div class="row">
     <?php echo CHtml::label('linjetotal_eks_moms','',array('id'=>'linjetotal_eks_moms_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('linjetotal_eks_moms','',array('id'=>'linjetotal_eks_moms', 'width'=>100,'maxlength'=>100)); ?>
    </div> 
     
     
     
     
    <div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
    <?php echo CHtml::submitButton('Submit', array('class' => 'fancybutton')); ?>
    </div>
     
<?php $this->endWidget(); ?>

</div>


