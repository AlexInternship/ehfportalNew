<?php $this->breadcrumbs=array(
	'Opret ny faktura'=> 'index.php?r=newinvoice/newuser','Din nye faktura'
);?> 

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
          array( 
              'name' =>'serializedocument',
              'type' => 'raw',
              'value' => 'CHtml::Link(CHtml::encode($data->serializedocument_id),array("newInvoice/viewinvoice","id" =>$data->serializedocument_id), array("id"=>"fancy-link"))'  
              )
        ,'type', 'version','outbox'
)));
 //echo CHtml::link('Se din faktura her',array('newinvoice/viewinvoice'), array('id' => 'fancy-link', 'style' => 'font-size:1.5em; font-weight:bold;'));

?>
<?php// echo Yii::app()->User->user_name; ?> 
<?php $this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(
            'autoDimension' =>  'true'
            
        ),));    
?>