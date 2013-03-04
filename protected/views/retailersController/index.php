<?php
/* @var $this RetailersControllerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Retailers',
);

$this->menu=array(
	array('label'=>'Create retailers', 'url'=>array('create')),
	array('label'=>'Manage retailers', 'url'=>array('admin')),
);
?>

<h1>Retailers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
