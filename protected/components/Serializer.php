<?php

class Serializer {
    
    public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new Serializer();
        }
        return $inst;
    }
    
    public function serializeDocument($invoiceArray, $senderId, $receiverId, $orderId){
        $serializeArray = array();
        
        print_r($invoiceArray); die;
        
        if ($invoiceArray['Fakturadata'] != null) {
        foreach ($invoiceArray['Fakturadata'] as $key =>  $value) {
            $serializeArray['Fakturadata'][$key] =$value;
        };         
        } else if ($invoiceArray['invoicedate'] != null) {    
        $serializeArray['FakturaDato'] = $invoiceArray['invoicedate'];
        } else if ($invoiceArray['Patners'] != null) {
        $serializeArray['partner'] =$invoiceArray['Patners']['1']['name'];
        } else if ($senderId != null) {
        $serializeArray['partner_id'] =$senderId;
        } else if ($invoiceArray['Info_til_indkoeber'] != null) {
        $serializeArray['Info_til_indkoeber'] =$invoiceArray['Info_til_indkoeber'];
        } else if ($invoiceArray['order_id'] != null) {
        $serializeArray['order_id'] =$invoiceArray['order_id'];
        } else if ($invoiceArray['type'] != null) {
        $serializeArray['type'] =$invoiceArray['type'];
        } else if ($invoiceArray['Momssats'] != null) {
        $serializeArray['Momssats'] =$invoiceArray['Momssats'];
        } else if ($invoiceArray['kortart'] != null) {
        $serializeArray['kortart'] =$invoiceArray['kortart'];
        } else if ($invoiceArray['giro'] != null) {
        $serializeArray['giro'] =$invoiceArray['giro'];
        } else if ($invoiceArray['girocreditor'] != null) {
        $serializeArray['girocreditor'] =$invoiceArray['girocreditor'];
        } else if ($invoiceArray['paymenttype'] != null) {
        $serializeArray['paymenttype'] =$invoiceArray['paymenttype'];
        } else if ($invoiceArray['invoice_id'] != null) {
        $serializeArray['invoice_id'] =$invoiceArray['invoice_id'];
        } else if ($invoiceArray['bank'] != null) {
        $serializeArray['bank'] =$invoiceArray['bank'];
        } else if ($invoiceArray['bankbranch'] != null) {
        $serializeArray['bankbranch'] =$invoiceArray['bankbranch'];
        } else if ($invoiceArray['regno'] != null) {
        $serializeArray['regno'] =$invoiceArray['regno'];
        } else if ($invoiceArray['account'] != null) {
        $serializeArray['account'] =$invoiceArray['account'];
        } else if ($invoiceArray['bic'] != null) {
        $serializeArray['bic'] =$invoiceArray['bic'];
        } else if ($invoiceArray['iban'] != null) {
        $serializeArray['iban'] =$invoiceArray['iban'];
        } else if ($invoiceArray['comment'] != null) {
        $serializeArray['comment'] =$invoiceArray['comment'];
        } else if ($invoiceArray['status'] != null) {
        $serializeArray['status'] =$invoiceArray['status'];
        } else if ($invoiceArray['behandler'] != null) {
        $serializeArray['behandler'] =$invoiceArray['behandler'];
        }
        else if ($invoiceArray['Address'] != null) {
            foreach ($invoiceArray as $key =>  $value) {            
                $serializeArray['Leveringsadresse'][$key] =$value;
            };
        } else if ($invoiceArray['Address'] != null) {
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['Faktureringsadresse'][$key] =$value;
        };
        } else if ($invoiceArray['Address'] != null) {
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['Juridiskeadresse'][$key] =$value;
        };
        } else if ($invoiceArray['Kundenavn'] != null) {
        $serializeArray['Kundenavn'] =$invoiceArray['Kundenavn'];
        } else if ($invoiceArray['EANlokationsnr'] != null) {
        $serializeArray['EANlokationsnr'] =$invoiceArray['EANlokationsnr'];
        } else if ($invoiceArray['kontraktReference'] != null) {
        $serializeArray['kontraktReference'] =$invoiceArray['kontraktReference'];
        } else if ($invoiceArray['Seneste_rettidige_betalingsdato'] != null) {
        $serializeArray['Seneste_rettidige_betalingsdato'] =$invoiceArray['Seneste_rettidige_betalingsdato'];
        } else if ($invoiceArray['Leveringsdato'] != null) {
        $serializeArray['Leveringsdato'] =$invoiceArray['Leveringsdato'];
        } else if ($invoiceArray['Ordrenummer'] != null) {
        $serializeArray['Ordrenummer'] =$invoiceArray['Ordrenummer'];
        } else if ($invoiceArray['Fakturanummer'] != null) {
        $serializeArray['Fakturanummer'] =$invoiceArray['Fakturanummer'];
        } else if ($invoiceArray['Kreditnotanummer'] != null) {
        $serializeArray['Kreditnotanummer'] =$invoiceArray['Kreditnotanummer'];
        } else if ($invoiceArray['refno'] != null) {
        $serializeArray['refno'] =$invoiceArray['refno'];
        } else if ($invoiceArray['buyercontact'] != null) {
        $serializeArray['buyercontact'] =$invoiceArray['buyercontact'];
        } else if ($invoiceArray['sellercontact'] != null) {
        $serializeArray['sellercontact'] =$invoiceArray['sellercontact'];
        } else if ($invoiceArray['orderContactName'] != null) {
        $serializeArray['orderContactName'] =$invoiceArray['orderContactName'];
        } else if ($invoiceArray['sellersOrderID'] != null) {
        $serializeArray['sellersOrderID'] =$invoiceArray['sellersOrderID'];
        } else if ($invoiceArray['Ordredato'] != null) {
        $serializeArray['Ordredato'] =$invoiceArray['Ordredato'];
        } else if ($invoiceArray['dimaccount'] != null) {
        $serializeArray['dimaccount'] =$invoiceArray['dimaccount'];
        } else if ($invoiceArray['KontantRabatSats'] != null) {
        $serializeArray['KontantRabatSats'] =$invoiceArray['KontantRabatSats'];
        } else if ($invoiceArray['KontantRabatDato'] != null) {
        $serializeArray['KontantRabatDato'] =$invoiceArray['KontantRabatDato'];
        } else if ($invoiceArray['StrafRenteSats'] != null) {
        $serializeArray['StrafRenteSats'] =$invoiceArray['StrafRenteSats'];
        } else if ($invoiceArray['StrafRenteDato'] != null) {
        $serializeArray['StrafRenteDato'] =$invoiceArray['StrafRenteDato'];
        } else if ($invoiceArray['shipping'] != null) {
        $serializeArray['shipping'] =$invoiceArray['shipping'];
        } else if ($invoiceArray['vatyn'] != null) {
         foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['vatyn'][$key] =$value;
        };
        } else if ($invoiceArray['tax'] != null) {
        $serializeArray['tax'] =$invoiceArray['tax'];
        } else if ($invoiceArray['duty'] != null) {
        $serializeArray['duty'] =$invoiceArray['duty'];
        } else if ($invoiceArray['importchg'] != null) {
        $serializeArray['importchg'] =$invoiceArray['importchg'];
        } else if ($invoiceArray['Tillaeg'] != null) {
        $serializeArray['Tillaeg'] =$invoiceArray['Tillaeg'];
        } else if ($invoiceArray['Fradrag'] != null) {
        $serializeArray['Fradrag'] =$invoiceArray['Fradrag'];
        } else if ($invoiceArray['Varetotal'] != null) {
        $serializeArray['Varetotal'] =$invoiceArray['Varetotal'];
        } else if ($invoiceArray['Varebeloeb'] != null) {
        $serializeArray['Varebeloeb'] =$invoiceArray['Varebeloeb'];
        } else if ($invoiceArray['momsgrundlag'] != null) {
        $serializeArray['momsgrundlag'] =$invoiceArray['momsgrundlag'];
        } else if ($invoiceArray['linjetotal_eks_moms'] != null) {
        $serializeArray['linjetotal_eks_moms'] =$invoiceArray['linjetotal_eks_moms'];
        } else if ($invoiceArray['ehf_momsgrundlag'] != null) {
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['ehf_momsgrundlag'][$key] =$value;
        }; 
        } else if ($invoiceArray['ehf_moms'] != null) {
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['ehf_moms'][$key] =$value;
        };
        } else if ($invoiceArray['ehf_moms_total'] != null) {
        $serializeArray['ehf_moms_total'] =$invoiceArray['ehf_moms_total'];
        } else if ($invoiceArray['Moms'] != null) {
        $serializeArray['Moms'] =$invoiceArray['Moms'];
        } else if ($invoiceArray['Attachment'] != null) {
        foreach ($invoiceArray as $key =>  $value) {            
            $serializeArray['Attachment'][$key] =$value;
        };
        return serialize($serializeArray);
        }
        
        return false;
        
    }
}
?>
