
<div class="view">
 
<h1>View Invoice</h1>

<?php $a = $dataProvider->getData(); ?>

<div class="formbox">
    <div class="row">    
<?php echo CHtml::label($a["Fakturadata"][0]["Varebeloeb"],'')?>;
    </div>
</div>

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
<div class="row" style="margin-top:7px;">
<?php echo CHtml::label('Leverings addresse','',array('style'=>' ;font-size:1.5em;font-wieght:bolder;')); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Leveringsaddresse"]["Address1"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Leveringsaddresse"]["Address2"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Leveringsaddresse"]["Address3"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Postnummer: '.$a["Leveringsaddresse"]["Postnummer"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('cvr: '.$a["Leveringsaddresse"]["cvr"],''); ?>
</div>

<div class="row" style="margin-top:7px;">
<?php echo CHtml::label('Fakturerings addresse','',array('style'=>' ;font-size:1.5em;font-wieght:bolder;')); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Faktureringsadresse"]["Address1"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Faktureringsadresse"]["Address2"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Faktureringsadresse"]["Address3"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Postnummer: '.$a["Faktureringsadresse"]["Postnummer"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('cvr: '.$a["Faktureringsadresse"]["cvr"],''); ?>
</div>

<?php var_dump($a) ?> 
<?php
function e($value){
    if(!empty($value))
    { return $value;}
    else{return '';}
}



?>
</div>