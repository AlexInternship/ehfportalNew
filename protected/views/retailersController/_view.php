<?php
/* @var $this RetailersControllerController */
/* @var $data retailers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('retailer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->retailer_id), array('view', 'id'=>$data->retailer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />


</div>