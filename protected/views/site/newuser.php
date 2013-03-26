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
             <?php echo CHtml::label('Nameamajig','',
        array('id'=>'idTextFields', 'width'=>100,'maxlength'=>100)); ?>
           <?php echo CHtml::textField('Nameamajig','',
        array('id'=>'idTextField', 'width'=>100,'maxlength'=>100)); ?>
            
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
        
    </div>
    
    <div class="row buttons" style="width:800px; float:left; margin-bottom: 10px;">
    <?php echo CHtml::submitButton('Submit', array('class' => 'fancybutton')); ?>
    </div>
<?php $this->endWidget(); ?>

</div>


