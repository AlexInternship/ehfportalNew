<?php
//$this->breadcrumbs=array('newuser');
?>

<?php 
$this->widget('zii.widgets.grid.CGridView',
        array('dataProvider'=>$dataprovider, 
        'columns' => array(array(
            'name' => 'er',
            'value' => 'CHtml::link(CHtml::encode($data->user_id),"index.php?r=site/newuser", array("id"=>"fancy-link"))',
            'type' => 'raw'
         ),
             array(
            'name' => 'rest',
            'value' => 'CHtml::link(CHtml::encode($data->username),"index.php?r=site/newuser", array("id"=>"fancy-link"))',
            'type' => 'raw'     
             ),
         'firstname','lastname','email','phone'   
            )));
?>

<?php $this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));    
?>

</view>