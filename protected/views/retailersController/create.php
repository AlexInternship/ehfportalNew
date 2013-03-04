<?php
/* @var $this RetailersControllerController */
/* @var $model retailers */

$this->breadcrumbs=array(
	'Retailers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List retailers', 'url'=>array('index')),
	array('label'=>'Manage retailers', 'url'=>array('admin')),
);
?>

<h1>Create retailers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>