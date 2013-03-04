<?php
/* @var $this RetailersControllerController */
/* @var $model retailers */

$this->breadcrumbs=array(
	'Retailers'=>array('index'),
	$model->name=>array('view','id'=>$model->retailer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List retailers', 'url'=>array('index')),
	array('label'=>'Create retailers', 'url'=>array('create')),
	array('label'=>'View retailers', 'url'=>array('view', 'id'=>$model->retailer_id)),
	array('label'=>'Manage retailers', 'url'=>array('admin')),
);
?>

<h1>Update retailers <?php echo $model->retailer_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>