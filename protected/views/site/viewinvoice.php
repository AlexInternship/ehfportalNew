<?php

?>
<div class="view">
    
<h1>View Invoices #<?php echo $newdata->SerializeDocuments; ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=> $newdata
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
                'value' => '$data'),    
            )
        )  
   );







?>
</div>