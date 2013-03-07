<?php echo $this->renderPartial('addressView', array('Address'=>$address,'retailers'=>$retailers)); ?>

<?php echo CHtml::beginForm();?>
<?php echo CHtml::errorSummary(array($address,$retailers))?>

    <div class="row">
        <?php echo $form->labelEx($address,'address1'); ?>
        <?php echo $form->textField($address,'address1'); ?>
        <?php echo $form->error($address,'address1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($address,'address2'); ?>
        <?php echo $form->textField($address,'address2'); ?>
        <?php echo $form->error($address,'address2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($address,'address3'); ?>
        <?php echo $form->textField($address,'address3'); ?>
        <?php echo $form->error($address,'address3'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($retailers,'name'); ?>
        <?php echo $form->textField($retailers,'name'); ?>
        <?php echo $form->error($retailers,'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($retailers,'comments'); ?>
        <?php echo $form->textField($retailers,'comments'); ?>
        <?php echo $form->error($retailers,'comments'); ?>
    </div>
<?php echo CHtml::endForm() ; ?>