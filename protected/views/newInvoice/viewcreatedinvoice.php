<?php $this->breadcrumbs=array(
	'Opret ny faktura'=> Yii::app()->baseUrl.'newinvoice/newuser','Din nye faktura'
);?> 

<?php
 // CHtml::link('Se din sendte faktura her','#');
 echo CHtml::link('Se din faktura her',array('newinvoice/viewinvoice'), array('id' => 'fancy-link', 'style' => 'font-size:1.5em; font-weight:bold;'));
 // 
 //CHtml::link(CHtml::encode($s_id),array('newinvoice' => 'viewinvoice')); 
?>
<?php $this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));    
?>