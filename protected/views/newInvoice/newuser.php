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
    
<?php echo $form->errorSummary(array($model, $address1, $address2, $partner1, $partner2)); ?>

   
 <div class="usercontainer"> 
     
      <div class="formbox"> 
        <div class="row">   
            <?php echo $form->labelEx($model, 'username') ?>
            <?php echo $form->textField($model, 'username') ?>
            <?php echo $form->error($model, 'username') ?> 
        </div>
        <div class="row">
            <?php echo $form->labelEx($partner1, 'Firma navn') ?>
            <?php echo $form->textField($partner1, '[1]name') ?>
            <?php echo $form->error($partner1, '[1]name') ?> 
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
    </div>
    <div class="formbox">
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
       
        </div>
    </div>
    <div class="usercontainer">
  
    <div class="formbox">
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
    </div>
    <div class="formbox">
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
    
    <!-- Faktura / Invoice -->
    <div class="horisontalsplitter"></div>          
    <div class="row">
        <h3>Invoices</h3>              
    </div>  
    <div class="invoicelines">
        <div class="a"></div>
        <div class="invoiceline row" id="row_0">
             <!-- start invoiceline -->
             <div style="width: 120px; height: 45px; margin:3px;float:left;clear:left;">
             <?php echo CHtml::label('Beskrivelse','',array('id'=>'Beskrivelse_label', 'width'=>100)); ?>
             <?php echo CHtml::textArea('Fakturadata[0][varenavn]','',array('class'=> 'beskrivelse', 'id'=>'beskrivelse', 'width'=>100,'maxlength'=>100, 'style' =>'height:1.5em; width:100px;')); ?>
            </div>
             <div style="width: 90px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Varenummer','',array('id'=>'Varenummer_label', 'style'=> 'width:80px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][Varenummer]','',array('class'=>'varenummer', 'id'=>'Varenummer',  'style'=>'width:80px;','maxlength'=>16)); ?>
            </div>
             <div style="width: 90px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Antal','',array('class' => 'test' ,'id'=>'antal_label', 'style'=> 'width:80px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][antal]','0',array('class' => 'antal', 'id'=>'antal_0', 'style'=> 'width:80px;','maxlength'=>16, 'onBlur'=>'calc(0)')); ?>
            </div>
            <div style="width: 80px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Kontering','',array('id'=>'kontering', 'style'=> 'width:70px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][Kontering]','',array('class'=>'kontering',   'id'=>'Kontering', 'style'=> 'width:45px;','maxlength'=>100)); ?>
            </div>
             <?php echo CHtml::hiddenField('Fakturadata[0][dimaccont]',''); ?>
             <div style="width: 60px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('MVA','',array('id'=>'ehf_vat_label')); ?>
             <?php echo CHtml::dropDownList('Fakturadata[0][ehf_vat]', '',array('25' => '25%', '0' => '0%', '8' => '8%', '10' => '10%'),array('class'=>'vat' , 'id'=>'vat_0'));?>
            </div> 
             <div style="width: 90px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('Varebeloeb','',array('id'=>'Varebeloeb_label', 'style'=> 'width:75px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][Varebeloeb]','0',array('class'=>'varebeloeb',  'id'=>'varebeloeb_0', 'style'=> 'width:75px;', 'onBlur'=>'calc(0)')); ?>
            </div>
             <div style="width:55px; height: 45px; margin:3px;float:left;">
             <?php echo CHtml::label('I alt','',array('id'=>'total_label', 'style'=> 'width:45px;')); ?>
             <?php echo CHtml::textField('Fakturadata[0][linie_total]','',array('style'=> 'width:45px;','class' => 'subtotal','id'=> 'linie_total_0','readonly' =>'readonly')); ?>
            </div>
             <?php echo CHtml::hiddenField('Fakturadata[0][Skaffevare]','ja'); ?>           
             <?php echo CHtml::hiddenField('Fakturadata[0][Ordrefradrag]',''); ?>
             <?php echo CHtml::hiddenField('Fakturadata[0][Momsfri]',''); ?>   
            <div style="width: 50px;  height: 45px; margin:3px; float:left; padding:15px 0 0 0;">
            <?php echo CHtml::Button('-', array('onClick'=>'deleterow(0)' ,  'id'=>'0' ,'class' => 'fancybutton remove')); ?>
            <?php echo CHtml::Button('+', array('onClick'=>'newdiv()' , 'class' => 'fancybutton add')); ?>
            </div>
        </div>
    </div>
    <div class="horisontalsplitter"></div>
             <div class="row">
                 <?php echo CHtml::label('Total','',array('id'=>'total_label', 'width'=>100)); ?>
                 <?php echo CHtml::textField('VareTotal','',array('readonly' =>'readonly')); ?>      
             </div>
     <div class="horisontalsplitter"></div>          
    <div class="row1">
        <h3>Betaling</h3>              
    </div>  
       <!-- Start på ehfportal.no form -->
     
<div class="usercontainer"> 
     
     <div class="formbox">   
       
      <div class="row">
  
     <?php echo CHtml::label('Faktura dato',''); ?>
     <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'Seneste_rettidige_betalingsdato',
                    'attribute' => 'date_from',
                    'htmlOptions' => array(
                    'size' => '10',    
                    'maxlength' => '10',
                    'background' => 'lightgrey'
    ),
));
?>
          <?php echo CHtml::label('Faktura dato',''); ?>
     <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'FakturaDato',
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
                    'name' => 'Leveringsdato',
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
     <?php echo CHtml::label('Kjøpsordrenr','',array('id'=>'order_id_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Ordrenummer','',array('id'=>'order_id', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     </div>
</div>
         
 <div class="usercontainer">
  
    <div class="formbox">
         
     <div class="row">
     <?php echo CHtml::label('Beskjed til kunde','',array('id'=>'info_til_indkoeber_Label', 'width'=>100)); ?>
     <?php echo CHtml::textField('Info_til_indkoeber','',array('id'=>'Info_til_indkoeber', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Bank kontonr.','',array('id'=>'type_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('type','',array('id'=>'type', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('MVA grunnlag','',array('id'=>'Momssats_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('momssats','',array('id'=>'Momssats', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Fakturanummer','',array('id'=>'kortart_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('kortart','',array('id'=>'kortart', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     </div>
</div>
<div class="usercontainer">
  
    <div class="formbox">         
         
      <div class="row">
     <?php echo CHtml::label('KID','',array('id'=>'giro_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('giro','',array('id'=>'giro', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('MVA','',array('id'=>'girocreditor_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('girocreditor','',array('id'=>'girocreditor', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Fakturatotal eks. MVA','',array('id'=>'paymenttype_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('paymenttype','',array('id'=>'paymenttype', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    <div class="row">
     <?php echo CHtml::label('Fakturatotal inkl. MVA','',array('id'=>'bank_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('bank','',array('id'=>'bank', 'width'=>100,'maxlength'=>100)); ?>
    </div>
      </div>      
</div>
              
<div class="usercontainer">
  
    <div class="formbox">
     
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
     <?php echo CHtml::textField('account','',array('id'=>'account', 'width'=>100,'maxlength'=>100)); ?>
    </div>
     <div class="row">
     <?php echo CHtml::label('Kontrakt nr.','',array('id'=>'bic_label', 'width'=>100)); ?>
     <?php echo CHtml::textField('bic','',array('id'=>'bic', 'width'=>100,'maxlength'=>100)); ?>
    </div>
    </div>
</div>
   
    <div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
    <?php/* echo CHtml::submitButton('Submit', array('class' => 'fancybutton', 'id' => 'fancySubmit')); */?>
        <?php echo CHtml::Button('Submit', array('class' => 'fancybutton', 'id' => 'fancySubmit')); ?>
    </div>
<?php $this->endWidget(); 

  $this->widget('fancybox.EFancyBox', array(
        'target'=>'input#fancySubmit', 
        'config'=>array(
            'title' => 'Faktura sent',
            'content' => '<h1>Fakturaen til er nu sendt</h1>',
            'onClosed'=>'js:function(){
                 document.getElementById("axForm-form").submit();
                }' 
        ),));  ?>

</div>
