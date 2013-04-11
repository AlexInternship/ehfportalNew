<?php

?>
<div class="view">
    
<h1>View Invoices #<?php echo '$dataProvider'; ?></h1>

<?php/* $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=> $dataProvider
, 
        'columns'=>array(
            array(
                'header' => 'Index',
                'value'=>  '$row',
                'htmlOptions' => array(
                    'style' => 'width:65px;'
                ) 
           ),
            array(
                'header'=>'Content',
                'value' => 'dataProvider'),    
            )
        )  
   );
 * 
 */
?>
<?php


$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(array(
            'name'  => 'fakturaData',
            'value' => 'CHtml::link(CHtml::encode($data->id),"index.php?r=documentsOutbound/view&id=".$data->id, array("id"=>"fancy-link"))',
            'type'  => 'raw'),
            'Varebeloeb', 'Seneste_rettidige_betalingsdato'
))); 

//put fancybox on page
$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));  
?>




?>
</div>