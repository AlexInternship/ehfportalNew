<?php echo $this->renderPartial('addressView', array('Address'=>$Address,'retailers'=>$retailers)); ?>

<?php echo CHtml::beginForm();?>
<?php echo CHtml::errorSummary(array($Address,$retailers))?>

    <div class="row">
        <?php echo $form->labelEx($Address,'address1'); ?>
        <?php echo $form->textField($Address,'address1'); ?>
        <?php echo $form->error($Address,'address1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($Address,'address2'); ?>
        <?php echo $form->textField($Address,'address2'); ?>
        <?php echo $form->error($Address,'address2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($Address,'address3'); ?>
        <?php echo $form->textField($Address,'address3'); ?>
        <?php echo $form->error($Address,'address3'); ?>
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