<?php
/* @var $this RetailersControllerController */
/* @var $model retailers */

$this->breadcrumbs=array(
	'Retailers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List retailers', 'url'=>array('index')),
	array('label'=>'Create retailers', 'url'=>array('create')),
	array('label'=>'Update retailers', 'url'=>array('update', 'id'=>$model->retailer_id)),
	array('label'=>'Delete retailers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->retailer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage retailers', 'url'=>array('admin')),
);
?>

<h1>View retailers #<?php echo $model->retailer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'retailer_id',
		'name',
		'comments',
	),
)); ?>
