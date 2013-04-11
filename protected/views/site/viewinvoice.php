<?php

?>
<div class="view">
    
<<<<<<< HEAD
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
=======
<h1>View Invoices #</h1>

<?php $a = $dataProvider->getData(); ?>
>>>>>>> 8a99c51c1f350fe749b42516b51e3d0e1d812043

<div class="formbox">
    <div class="row">    
<?php echo CHtml::label($a["Fakturadata"][0]["Varebeloeb"],'')?>;
    </div>
</div>

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(array(
            'name'  => 'fakturaData',
            'value' => 'CHtml::link(CHtml::encode($data->id),"index.php?r=documentsOutbound/view&id=".$data->id, array("id"=>"fancy-link"))',
            'type'  => 'raw'),
            'Varebeloeb', 'Seneste_rettidige_betalingsdato'
))); 

<<<<<<< HEAD
//put fancybox on page
$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));  
?>
=======
<div class="row">  
<?php echo CHtml::label('Varenummer',''); ?>
<?php echo CHtml::label($a["Fakturadata"][0]["Varenummer"],''); ?>
<?php echo CHtml::label('Varenavn',''); ?>
<?php echo CHtml::label($a["Fakturadata"][0]["varenavn"],''); ?>
<?php echo CHtml::label('Kontering',''); ?>
<?php echo CHtml::label($a["Fakturadata"][0]["Kontering"],''); ?>    
<?php echo CHtml::label('Pris',''); ?>
<?php echo CHtml::label('moms - ehf_Vat',''); ?>
<?php echo CHtml::label($a["Fakturadata"][0]["ehf_vat"],''); ?>
<?php echo CHtml::label($a["Fakturadata"][0]["Varebeloeb"],''); ?>
<?php echo CHtml::label('Subtotal',''); ?>
<?php echo CHtml::label($a["Fakturadata"][0]["linie_total"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Faktura dato',''); ?>
<?php echo CHtml::label(' '.$a["FakturaDato"],''); ?>
</div>
>>>>>>> 8a99c51c1f350fe749b42516b51e3d0e1d812043

<div class="row">
<?php echo CHtml::label('Faktura dato',''); ?>
<?php echo CHtml::label(' '.$a["FakturaDato"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Afsender',''); ?>
<?php echo CHtml::label(' '.$a["partner"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Besked til kunden',''); ?>
<?php echo CHtml::label(' '.$a["Info_til_indkoeber"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('type',''); ?>
<?php echo CHtml::label(' '.$a["Type"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Moms Sats',''); ?>
<?php echo CHtml::label(' '.$a["MomsSats"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('kortart',''); ?>
<?php echo CHtml::label(' '.$a["kortart"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('giro',''); ?>
<?php echo CHtml::label(' '.$a["giro"],''); ?>
</div>



<?php
function e($value){
    if(!empty($value))
    { return $value;}
    else{return '';}
}



?>
</div>