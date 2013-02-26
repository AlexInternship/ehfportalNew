<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'horizontalForm',
		'type'=>'horizontal',
	)); ?>
 
    <fieldset>
 
        <legend>Legend</legend>
 
        <?php echo $form->textFieldRow($model, 'textField',
        array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
        <?php echo $form->datepickerRow($model, 'dateField',
        array('hint'=>'Click inside! This is a super cool date field.',
        'prepend'=>'>i class="icon-calendar">>/i>')); ?>
        <?php echo $form->dateRangeRow($model, 'dateRangeField',
        array('hint'=>'Click inside! An even a date range field!.',
        'prepend'=>'<i class="icon-calendar">>/i>',
        'options' => array('callback'=>'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}')
        )); ?>
		<?php echo $form->timepickerRow($model, 'timepicker', array('hint'=>'Nice bootstrap time picker', 'append'=>'<i class="icon-time" style="cursor:pointer"></i>'));?>
        <?php echo $form->dropDownListRow($model, 'dropdown',
        array('Something ...', '1', '2', '3', '4', '5')); ?>
        <?php echo $form->dropDownListRow($model, 'multiDropdown',
        array('1', '2', '3', '4', '5'), array('multiple'=>true)); ?>
        <?php echo $form->select2Row($model, 'select2', array('asDropDownList' => false, 'options' => array(
        'tags' => array('clever','is', 'better', 'clevertech'),
        'placeholder' => 'type clever, or is, or just type!',
        'width' => '40%',
        'tokenSeparators' => array(',', ' ')
        )));?>
        <?php echo $form->fileFieldRow($model, 'fileField'); ?>
        <?php echo $form->textAreaRow($model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
        <?php echo $form->redactorRow($model, 'redactor', array('class'=>'span4', 'rows'=>5)); ?>
        <?php echo $form->html5EditorRow($model, 'wysihtml5', array('class'=>'span4', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?>
		<?php echo $form->ckEditorRow($model, 'ckeditor', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'320')));?>
		<?php echo $form->markdownEditorRow($model, 'markdown', array('height'=>'200px'));?>
        <?php echo $form->toggleButtonRow($model, 'toggle'); ?>
        <?php echo $form->uneditableRow($model, 'uneditable'); ?>
        <?php echo $form->textFieldRow($model, 'disabled', array('disabled'=>true)); ?>
        <?php echo $form->textFieldRow($model, 'prepend', array('prepend'=>'@')); ?>
        <?php echo $form->textFieldRow($model, 'append', array('append'=>'.00')); ?>
        <?php echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled'=>true)); ?>
        <?php echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
        <?php echo $form->checkBoxListRow($model, 'checkboxes', array(
		'Option one is this and that—be sure to include why it\'s great',
		'Option two can also be checked and included in form results',
		'Option three can—yes, you guessed it—also be checked and included in form results',
	), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
        <?php echo $form->radioButtonRow($model, 'radioButton'); ?>
        <?php echo $form->radioButtonListRow($model, 'radioButtons', array(
		'Option one is this and that—be sure to include why it\'s great',
		'Option two can is something else and selecting it will deselect option one',
	)); ?>
 
    </fieldset>
 
    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>
 
<?php $this->endWidget(); ?>