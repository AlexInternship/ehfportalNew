
<div class="view">
    <div class="topright" style="float:right; margin:40px 70px 0 0;">
        <div class="row">
            <?php echo CHtml::label('Faktura nummer: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Fakturanummer"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Betales senest: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Seneste_rettidige_betalingsdato"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Ordre dato: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Ordredato"], ''); ?>
        </div>               
        <div class="row">
            <?php echo CHtml::label('Leverings dato: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Leveringsdato"], ''); ?>
        </div> 
        <div class="row">
            <?php echo CHtml::label('Faktura dato: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Fakturadato"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('EAN: ', ''); ?>
            <?php echo CHtml::label($dataProvider["EANlokationsnr"], ''); ?>
        </div>
        <div class="row" style="margin:13px 0 0 0;">
            <?php echo CHtml::label('Order no.: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Ordrenummer"], ''); ?>
        </div>
        <div class="row" style="margin:13px 0 0 0;">
            <?php echo CHtml::label('Order ref.: ', ''); ?>
            <?php echo CHtml::label($dataProvider["ordreReference"], ''); ?>
        </div>

        <div class="row">
            <?php echo CHtml::label('Kontrakt ref.: ', ''); ?>
            <?php echo CHtml::label($dataProvider["kontraktReference"], ''); ?>
        </div>

        <div class="row">
            <?php echo CHtml::label('buyercontact: ', ''); ?>
            <?php echo CHtml::label($dataProvider["buyercontact"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('sellercontant: ', ''); ?>
            <?php echo CHtml::label($dataProvider["sellercontact"], ''); ?>
        </div>
    </div>

    <div class="topleft" style="margin:20px 0 15px 10px;">        

        <div class="row">
            <?php echo CHtml::label('Afsender', ''); ?>
            <?php echo CHtml::label($dataProvider["partner"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Partner id', ''); ?>
            <?php echo CHtml::label($dataProvider["partner_id"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('type', ''); ?>
            <?php echo CHtml::label($dataProvider["type"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Moms Sats', ''); ?>
            <?php echo CHtml::label($dataProvider["Momssats"], ''); ?>
        </div>
    </div>
    <div class="addressHolder">
        <div class="row" style="margin-top:7px;">
            <?php echo CHtml::label('Leverings addresse', '', array('style' => ' ;font-size:1.5em;font-wieght:bolder;')); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label($dataProvider["Leveringsadresse"]["Adresse1"], ''); ?>
        </div>
        <div class="row">

            <?php echo CHtml::label($dataProvider["Leveringsadresse"]["Adresse2"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label($dataProvider["Leveringsadresse"]["Adresse3"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label($dataProvider["Leveringsadresse"]["Bynavn"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Postnummer: ' . $dataProvider["Leveringsadresse"]["Postnummer"], ''); ?>
        </div>

        <div class="row">
            <?php echo CHtml::label('cvr: ' . $dataProvider["Leveringsadresse"]["cvr"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('eanno: ' . $dataProvider["eanno"]["cvr"], ''); ?>
        </div>
    </div>
    <div class="addressHolder">
        <div class="row" style="margin-top:7px;">
            <?php echo CHtml::label('Fakturerings addresse', '', array('style' => ' ;font-size:1.5em;font-wieght:bolder;')); ?>
        </div>
        <div class="row">

            <?php echo CHtml::label($dataProvider["Faktureringsadresse"]["Adresse1"], ''); ?>
        </div>
        <div class="row">

            <?php echo CHtml::label($dataProvider["Faktureringsadresse"]["Adresse2"], ''); ?>
        </div>
        <div class="row">

            <?php echo CHtml::label($dataProvider["Faktureringsadresse"]["Adresse3"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label($dataProvider["Faktureringsadresse"]["Bynavn"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Postnummer: ' . $dataProvider["Faktureringsadresse"]["Postnummer"], ''); ?>
        </div>

        <div class="row">
            <?php echo CHtml::label('cvr: ' . $dataProvider["Faktureringsadresse"]["cvr"], ''); ?>
        </div>
    </div> 
    <?php
    echo "<table style='padding-top: 5em;'><thead class='total'><tr>
        <th>Varenummer</th>
        <th>Navn</th>
        <th>antal</th>        
        <th>Kontering</th>
        <th>Pris</th>
        <th>beløb</th>
        <th>Ordrefradrag</th>
        <th>Betegnelse_for_nettoindhold</th>
        <th>Vat</th>
        <th>subtotal</th>
        </tr></thead>";
    $total = 0;
    foreach ($dataProvider["Fakturadata"] as $s) {
            
        echo "<tr>";
        if(isset($s["Varenummer"]))
            {echo "<th>" . CHtml::label($s["Varenummer"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
       if(isset($s["Varenavn"]))
            {echo "<th>" . CHtml::label($s["Varenavn"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
        if(isset($s["Antal"]))
            {echo "<th>" . CHtml::label($s["Antal"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
        if(isset($s["Kontering"]))
            {echo "<th>" . CHtml::label($s["Kontering"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
        if(isset($s["Pris"]))
            {echo "<th>" . CHtml::label($s["Pris"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
        if(isset($s["Varebeloeb"]))
            {echo "<th>" . CHtml::label($s["Varebeloeb"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
        if(isset($s["Ordrefradrag"]))
            {echo "<th>" . CHtml::label($s["Ordrefradrag"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
        if(isset($s["Betegnelse_for_nettoindhold"]))
            {echo "<th>" . CHtml::label($s["Betegnelse_for_nettoindhold"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}
     
        if(isset($s["ehf_vat"]))
            {echo "<th>" . CHtml::label($s["ehf_vat"],''). "</th>";}
            else{echo "<th>" . CHtml::label( '', '') . "</th>";}     
      /*  echo "<th>" . CHtml::label($s["Varenavn"], '') . "</th>";
        echo "<th>" . CHtml::label($s["Antal"], '') . "</th>";
        echo "<th>" . CHtml::label($s["Kontering"], '') . "</th>";
        echo "<th>" . CHtml::label($s["Pris"], '') . "</th>";
        echo "<th>" . CHtml::label($s["Varebeloeb"], '') . "</th>";
        echo "<th>" . CHtml::label($s["Ordrefradrag"], '') . "</th>";
        echo "<th>" . CHtml::label($s["Betegnelse_for_nettoindhold"],'')."</th>";
        echo "<th>" . CHtml::label($s["ehf_vat"], '') . "</th>";*/
        if (!isset($s["linie_total"])) {
            $res = ($s['Pris'] + ($s["ehf_vat"] / 100 * $s["Pris"])) * $s['Antal'];
            $total = $total + $res;
            echo "<th>" . CHtml::label($res, '') . "</th>";
        } else {
            $total += $s["linie_total"];
            echo "<th>" . Chtml::label($s["linie_total"], '') . "</th>";
        }

        echo '</tr>';
    }

    echo "<tr class='total'><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th>Total</th><th>" . $total . "</th></tr>";
    echo "</table>";
    ?> 
    
    <div class="row">
            <?php echo CHtml::label('Vare beløb: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Varebeloeb"], ''); ?>
    </div>
    <div class="row">
            <?php echo CHtml::label('Moms grundlag: ', ''); ?>
            <?php echo CHtml::label($dataProvider["momsgrundlag"], ''); ?>
    </div>
    
    <div class="row">
            <?php echo CHtml::label('Moms frit: ', ''); ?>
            <?php echo CHtml::label($dataProvider["momsfrit"], ''); ?>
    </div>
    <div class="row" style="float:right;">
          <?php 
           echo "<table style='width:250px;display:block;'><thead><th>MVA grunnlag</th><th>MVA</th><th>MVA beløb</th></thead>";
           if(isset($dataProvider["ehf_momsgrundlag"])){
           foreach($dataProvider["ehf_momsgrundlag"] as $t => $item){
               echo "<tr><th>".$t."</th><th>".$item."</th><th>".$dataProvider['ehf_moms'][$t]."</th></tr>"; 
           }           
           }
           echo "</table>";
           ?>
        <?php 
           echo "<table style='width:250px;display:block;'><thead><th>MVA grunnlag</th><th>MVA</th><th>MVA beløb</th></thead>";
           if(isset($dataProvider["ehf_moms"])){
           foreach($dataProvider["ehf_moms"] as $t => $item){
               echo "<tr><th>".$t."</th><th>".$item."</th><th>".$dataProvider['ehf_moms'][$t]."</th></tr>"; 
           }           
           }
           echo "</table>";
           ?>
        <div class="row" style="margin: 5px 0 8px 0;">
            <?php echo CHtml::label('Varetotal: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Varetotal"], ''); ?>
    </div>
        <div class="row">
            <?php echo CHtml::label('Total uden moms: ', ''); ?>
            <?php echo CHtml::label($dataProvider["linjetotal_eks_moms"], ''); ?>
    </div>
    </div>   
    <div class="row" style="clear:right;">
            <?php echo CHtml::label('Moms i alt: ', ''); ?>
            <?php echo CHtml::label($dataProvider["ehf_moms_total"].' nkr.', ''); ?>
    </div>
    <div class="betalingsinfo" style="border-top: 1px solid #bab9b9; border-bottom: 1px solid #bab9b9;padding:5px 0 0 5px;">
        <div class="row">
            <?php echo CHtml::label('Betalings type: ', ''); ?>
            <?php echo CHtml::label($dataProvider["paymenttype"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('invoice id: ', ''); ?>
            <?php echo CHtml::label($dataProvider["invoice_id"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Kortart', ''); ?>
            <?php echo CHtml::label($dataProvider["kortart"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Giro creditor: ', ''); ?>
            <?php echo CHtml::label($dataProvider["girocreditor"], ''); ?>
        </div> 
        <div class="row">
            <?php echo CHtml::label('Giro', ''); ?>
            <?php echo CHtml::label($dataProvider["giro"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Bank: ', ''); ?>
            <?php echo CHtml::label($dataProvider["bank"], ''); ?>
        </div> 
        <div class="row">
            <?php echo CHtml::label('Bank branch: ', ''); ?>
            <?php echo CHtml::label($dataProvider["bankbranch"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('registrerings nummer: ', ''); ?>
            <?php echo CHtml::label($dataProvider["regno"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('konto nummer: ', ''); ?>
            <?php echo CHtml::label($dataProvider["account"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('bic: ', ''); ?>
            <?php echo CHtml::label($dataProvider["bic"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('iban: ', ''); ?>
            <?php echo CHtml::label($dataProvider["iban"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Betales senest: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Seneste_rettidige_betalingsdato"], ''); ?>
        </div>
        <div class="row">
            <?php echo CHtml::label('Faktura dato: ', ''); ?>
            <?php echo CHtml::label($dataProvider["Fakturadato"], ''); ?>
        </div>
    </div>    
    <div class="row" style="margin:8px 0 5px 0; ">
        <?php echo CHtml::label('Shipping: ', ''); ?>
        <?php echo CHtml::label($dataProvider["Shipping"], ''); ?>
   
        <?php echo CHtml::label('Vat: ', '',array('style' => 'margin-left:75px;')); ?>
        <?php
        echo CHtml::label($dataProvider["vatyn"]["shipping"]
                . $dataProvider["vatyn"]["tax"]
                . $dataProvider["vatyn"]["duty"]
                . $dataProvider["vatyn"]["importchg"]
                . $dataProvider["vatyn"]["Tillaeg"]
                . $dataProvider["vatyn"]["Fradrag"], '');
        ?>
    
        <?php echo CHtml::label('skat: ', '',array('style' => 'margin-left:75px;')); ?>
        <?php echo CHtml::label($dataProvider["tax"], ''); ?>
   
        <?php echo CHtml::label('Moms: ', '',array('style' => 'margin-left:75px;')); ?>
        <?php echo CHtml::label($dataProvider["Moms"], ''); ?>
    </div> 
    <div class="row"> 
        <?php echo CHtml::label('duty: ', ''); ?>
        <?php echo CHtml::label($dataProvider["duty"], ''); ?>
    </div>
    <div class="row"> 
        <?php echo CHtml::label('importchg: ', ''); ?>
        <?php echo CHtml::label($dataProvider["importchg"], ''); ?>
    </div>
    <div class="row"> 
        <?php echo CHtml::label('Tillaeg: ', ''); ?>
        <?php echo CHtml::label($dataProvider["Tillaeg"], ''); ?>
    </div>
    <div class="row"> 
        <?php echo CHtml::label('Fradrag: ', ''); ?>
        <?php echo CHtml::label($dataProvider["Fradrag"], ''); ?>
    </div>
    <div class="row"> 
        <?php echo CHtml::label('Intern Kommentar: ', ''); ?>
        <?php echo CHtml::label($dataProvider["comment"], ''); ?>
    </div>
    <div class="row"> 
        <?php echo CHtml::label('status: ', ''); ?>
        <?php echo CHtml::label($dataProvider["status"], ''); ?>
    </div>
    <div class="row">
        <?php echo CHtml::label('Besked til kunden:', '', array("style" => "width: 50px;")); ?>
        <?php echo CHtml::label($dataProvider["Info_til_indkoeber"], ''); ?>
    </div>
    <div class="row">
        <?php echo CHtml::label('order_id:', '', array("style" => "width: 50px;")); ?>
        <?php echo CHtml::label($dataProvider["order_id"], ''); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('Behandler: ', ''); ?>
        <?php echo CHtml::label($dataProvider["behandler"], ''); ?>
    </div>
    <div class="row">
        <?php echo CHtml::label('Kunde: ', ''); ?>
        <?php echo CHtml::label($dataProvider["Kundenavn"], ''); ?>
    </div>
    


    <div class="row">
        <?php echo CHtml::label('Kreditnota nummer: ', ''); ?>
        <?php echo CHtml::label($dataProvider["Kreditnotanummer"], ''); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('sellersOrderID: ', ''); ?>
        <?php echo CHtml::label($dataProvider["sellersOrderID"], ''); ?>
    </div>


    <div class="row">
        <?php echo CHtml::label('KontantRabatSats: ', ''); ?>
        <?php echo CHtml::label($dataProvider["KontantRabatSats"], ''); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('KontantRabatDato: ', ''); ?>
        <?php echo CHtml::label($dataProvider["KontantRabatDato"], ''); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('StrafRenteSats: ', ''); ?>
        <?php echo CHtml::label($dataProvider["StrafRenteSats"], ''); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('StrafRenteDato: ', ''); ?>
        <?php echo CHtml::label($dataProvider["StrafRenteDato"], ''); ?>
    </div>
    <div class="row">
        <?php echo CHtml::label('Ordre kontakt: ', ''); ?>
        <?php echo CHtml::label($dataProvider["orderContactName"], ''); ?>
    </div>
    <div class="row">
        <?php echo CHtml::label('dimaccout: ', ''); ?>
        <?php echo CHtml::label($dataProvider["dimaccout"], ''); ?>
    </div>
    <?php echo var_dump($dataProvider);?> 
</div>