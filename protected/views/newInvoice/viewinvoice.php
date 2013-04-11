
<div class="view">
 
<h1>View Invoice</h1>


 <div class="row">    
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["Varebeloeb"],'');?>
    </div>


<div class="row">  
<?php echo CHtml::label('Varenummer',''); ?>
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["Varenummer"],''); ?>
</div>
<div class="row">  
<?php echo CHtml::label('Varenavn',''); ?>
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["varenavn"],''); ?>
</div>
<div class="row">  
<?php echo CHtml::label('Kontering',''); ?>
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["Kontering"],''); ?>   
</div>
<div class="row">  
<?php echo CHtml::label('Pris',''); ?>
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["Varebeloeb"],''); ?>
</div>
<div class="row">  
<?php echo CHtml::label('moms - ehf_Vat',''); ?>
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["ehf_vat"],''); ?>
<div class="row"> 
<?php echo CHtml::label('Subtotal',''); ?>
<?php echo CHtml::label($dataProvider["Fakturadata"][0]["linie_total"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Faktura dato',''); ?>
<?php echo CHtml::label(' '.$$dataProvider["FakturaDato"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Afsender',''); ?>
<?php echo CHtml::label(' '.$dataProvider["partner"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Besked til kunden',''); ?>
<?php echo CHtml::label($dataProvider["Info_til_indkoeber"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('type',''); ?>
<?php echo CHtml::label($dataProvider["Type"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Moms Sats',''); ?>
<?php echo CHtml::label($dataProvider["Momssats"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('kortart',''); ?>
<?php echo CHtml::label($dataProvider["kortart"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('giro',''); ?>
<?php echo CHtml::label($dataProvider["giro"],''); ?>
</div>
<div class="row" style="margin-top:7px;">
<?php echo CHtml::label('Leverings addresse','',array('style'=>' ;font-size:1.5em;font-wieght:bolder;')); ?>
</div>
<div class="row">
<?php echo CHtml::label(' '.$dataProvider["Leveringsadresse"]["Adresse1"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$dataProvider["Leveringsadresse"]["Adresse2"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$dataProvider["Leveringsadresse"]["Adresse3"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Postnummer: '.$dataProvider["Leveringsadresse"]["Postnummer"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('cvr: '.$a["Leveringsadresse"]["cvr"],''); ?>
</div>

<div class="row" style="margin-top:7px;">
<?php echo CHtml::label('Fakturerings addresse','',array('style'=>' ;font-size:1.5em;font-wieght:bolder;')); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Faktureringsadresse"]["Adresse1"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Faktureringsadresse"]["Adresse2"],''); ?>
</div>
<div class="row">

<?php echo CHtml::label(' '.$a["Faktureringsadresse"]["Adresse3"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Postnummer: '.$dataProvider["Faktureringsadresse"]["Postnummer"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('cvr: '.$dataProvider["Faktureringsadresse"]["cvr"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('comment: '.$dataProvider["comment"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('giro creditor',''); ?>
<?php echo CHtml::label($dataProvider["girocreditor"],''); ?>
</div>        
<div class="row">
<?php echo CHtml::label('Bank: ',''); ?>
<?php echo CHtml::label($dataProvider["bank"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('Behandler: ',''); ?>
<?php echo CHtml::label($dataProvider["behandler"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('Kunde: ',''); ?>
<?php echo CHtml::label($dataProvider["Kundenavn"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('EAN: ',''); ?>
<?php echo CHtml::label($dataProvider["EANlokationsnr"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Betales senest: ',''); ?>
<?php echo CHtml::label($dataProvider["Seneste_rettidige_betalingsdato"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Faktura nummer: ',''); ?>
<?php echo CHtml::label($dataProvider["Fakturanummer"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Kreditnota nummer: ',''); ?>
<?php echo CHtml::label($dataProvider["Kreditnotanummer"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('buyercontact: ',''); ?>
<?php echo CHtml::label($dataProvider["buyercontact"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('sellersOrderID: ',''); ?>
<?php echo CHtml::label($dataProvider["sellersOrderID"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('Ordre dato: ',''); ?>
<?php echo CHtml::label($dataProvider["Ordredato"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('KontantRabatSats: ',''); ?>
<?php echo CHtml::label($dataProvider["KontantRabatSats"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('KontantRabatDato: ',''); ?>
<?php echo CHtml::label($dataProvider["KontantRabatDato"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('StrafRenteSats: ',''); ?>
<?php echo CHtml::label($dataProvider["StrafRenteSats"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('StrafRenteDato: ',''); ?>
<?php echo CHtml::label($dataProvider["StrafRenteDato"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Shipping: ',''); ?>
<?php echo CHtml::label($dataProvider["Shipping"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Vat: ',''); ?>
<?php echo CHtml::label($dataProvider["vatyn"]["shipping"]
        .$dataProvider["vatyn"]["tax"]
        .$dataProvider["vatyn"]["duty"]
        .$dataProvider["vatyn"]["importchg"]
        .$dataProvider["vatyn"]["Tillaeg"]
        .$dataProvider["vatyn"]["Fradrag"],''); ?>
</div>
<div class="row">
<?php echo CHtml::label('skat: ',''); ?>
<?php echo CHtml::label($dataProvider["tax"],''); ?>
</div>        
        
<div class="row">
<?php echo CHtml::label('Moms: ',''); ?>
<?php echo CHtml::label($dataProvider["Moms"],''); ?>
</div>

<div class="row">
<?php echo CHtml::label('skat: ',''); ?>
<?php echo CHtml::label($dataProvider["tax"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Leveringsdata: ',''); ?>
<?php echo CHtml::label($dataProvider["Leveringsdato"],''); ?>
</div>        
                
<div class="row">
<?php echo CHtml::label('Order ref.: ',''); ?>
<?php echo CHtml::label($dataProvider["ordreReference"],''); ?>
</div>
        
<div class="row">
<?php echo CHtml::label('Kontrakt ref.: ',''); ?>
<?php echo CHtml::label($dataProvider["kontraktReference"],''); ?>
</div>
<?php  var_dump($dataProvider);?> 
</div>