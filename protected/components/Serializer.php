<?php

class Serializer {
    
    public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new Serializer();
        }
        return $inst;
    }
    
    public function serializeDocument($invoiceArray){
        $serializeArray = array('Fakturadata'=> '');
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['Fakturadata'][$key] =$value;
        };
        
        array_push($serializeArray, $invoiceArray['FakturaDato']);
        array_push($serializeArray, $invoiceArray['partner']);
        array_push($serializeArray, $invoiceArray['partner_id']);
        array_push($serializeArray, $invoiceArray['Info_til_indkoeber']);
        array_push($serializeArray, $invoiceArray['order_id']);
        array_push($serializeArray, $invoiceArray['type']);
        array_push($serializeArray, $invoiceArray['Momssats']);
        array_push($serializeArray, $invoiceArray['kortart']);
        array_push($serializeArray, $invoiceArray['giro']);
        array_push($serializeArray, $invoiceArray['girocreditor']);
        array_push($serializeArray, $invoiceArray['paymenttype']);
        array_push($serializeArray, $invoiceArray['invoice_id']);
        array_push($serializeArray, $invoiceArray['bank']);
        array_push($serializeArray, $invoiceArray['bankbranch']);
        array_push($serializeArray, $invoiceArray['regno']);
        array_push($serializeArray, $invoiceArray['account']);
        array_push($serializeArray, $invoiceArray['bic']);
        array_push($serializeArray, $invoiceArray['iban']);
        array_push($serializeArray, $invoiceArray['comment']);
        array_push($serializeArray, $invoiceArray['status']);
        array_push($serializeArray, $invoiceArray['behandler']);
        
        foreach ($addresseArray1 as $key =>  $value) {            
            $serializeArray['Leveringsadresse'][$key] =$value;
        };
        
        foreach ($addresseArray2 as $key =>  $value) {            
            $serializeArray['Faktureringsadresse'][$key] =$value;
        };
        
        foreach ($addresseArray3 as $key =>  $value) {            
            $serializeArray['Juridiskadresse'][$key] =$value;
        };

        array_push($serializeArray, $invoiceArray['Kundenavn']);
        array_push($serializeArray, $invoiceArray['EANlokationsnr']);
        array_push($serializeArray, $invoiceArray['kontraktReference']);
        array_push($serializeArray, $invoiceArray['Seneste_rettidige_betalingsdato']);
        array_push($serializeArray, $invoiceArray['Leveringsdato']);
        array_push($serializeArray, $invoiceArray['Ordrenummer']);
        array_push($serializeArray, $invoiceArray['Fakturanummer']);
        array_push($serializeArray, $invoiceArray['Kreditnotanummer']);
        array_push($serializeArray, $invoiceArray['refno']);
        array_push($serializeArray, $invoiceArray['buyercontact']);
        array_push($serializeArray, $invoiceArray['sellercontact']);
        array_push($serializeArray, $invoiceArray['orderContactName']);
        array_push($serializeArray, $invoiceArray['sellersOrderID']);
        array_push($serializeArray, $invoiceArray['Ordredato']);
        array_push($serializeArray, $invoiceArray['dimaccount']);
        array_push($serializeArray, $invoiceArray['KontantRabatSats']);
        array_push($serializeArray, $invoiceArray['KontantRabatDato']);
        array_push($serializeArray, $invoiceArray['StrafRenteSats']);
        array_push($serializeArray, $invoiceArray['StrafRenteDato']);
        array_push($serializeArray, $invoiceArray['shipping']);

         foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['vatyn'][$key] =$value;
        };

        array_push($serializeArray, $invoiceArray['tax']);
        array_push($serializeArray, $invoiceArray['duty']);
        array_push($serializeArray, $invoiceArray['importchg']);
        array_push($serializeArray, $invoiceArray['Tillaeg']);
        array_push($serializeArray, $invoiceArray['Fradrag']);
        array_push($serializeArray, $invoiceArray['Varetotal']);
        array_push($serializeArray, $invoiceArray['Varebeloeb']);
        array_push($serializeArray, $invoiceArray['momsgrundlag']);
        array_push($serializeArray, $invoiceArray['linjetotal_eks_moms']);

        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['ehf_momsgrundlag'][$key] =$value;
        };
        
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['ehf_moms'][$key] =$value;
        };
        
        array_push($serializeArray, $invoiceArray['ehf_moms_total']);
        array_push($serializeArray, $invoiceArray['Moms']);

        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['Attachment'][$key] =$value;
        };
        
        return serialize($serializeArray);
    }
}
?>
