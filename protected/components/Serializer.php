<?php

class Serializer {

    public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new Serializer();
        }
        return $inst;
    }

    public function serializeDocument($invoiceArray, $senderId, $receiverId) {
        $serializeArray = array();

        if ($invoiceArray['Fakturadata'] != null) {
            foreach ($invoiceArray['Fakturadata'] as $key => $value) {
                $serializeArray['Fakturadata'][$key] = $value;
            };
                
        } else
            $serializeArray['Fakturadata'] = '';
        if ($invoiceArray['FakturaDato'] != null) {
            $serializeArray['FakturaDato'] = $invoiceArray['FakturaDato'];
        } else
            $serializeArray['FakturaDato'] = '';
        if ($invoiceArray['Patners'] != null) {
            $serializeArray['partner'] = $invoiceArray['Patners']['1']['name'];
        } else
            $serializeArray['partner'] = '';
        if ($senderId != null) {
            $serializeArray['partner_id'] = $senderId;
        } else
            $serializeArray['partner_id'] = '';
        if ($invoiceArray['Info_til_indkoeber'] != null) {
            $serializeArray['Info_til_indkoeber'] = $invoiceArray['Info_til_indkoeber'];
        } else
            $serializeArray['Info_til_indkoeber'] = '';
        if ($invoiceArray['order_id'] != null) {
            $serializeArray['order_id'] = $invoiceArray['order_id'];
        } else
            $serializeArray['order_id'] = '';
        if ($invoiceArray['type'] != null) {
            $serializeArray['type'] = $invoiceArray['type'];
        } else
            $serializeArray['type'] = '';
        if ($invoiceArray['Momssats'] != null) {
            $serializeArray['Momssats'] = $invoiceArray['Momssats'];
        } else
            $serializeArray['Momssats'] = '';
        if ($invoiceArray['kortart'] != null) {
            $serializeArray['kortart'] = $invoiceArray['kortart'];
        } else
            $serializeArray['kortart'] = '';
        if ($invoiceArray['giro'] != null) {
            $serializeArray['giro'] = $invoiceArray['giro'];
        } else
            $serializeArray['giro'] = '';
        if ($invoiceArray['girocreditor'] != null) {
            $serializeArray['girocreditor'] = $invoiceArray['girocreditor'];
        } else
            $serializeArray['girocreditor'] = '';
        if ($invoiceArray['paymenttype'] != null) {
            $serializeArray['paymenttype'] = $invoiceArray['paymenttype'];
        } else
            $serializeArray['paymenttype'] = '';
        if ($invoiceArray['invoice_id'] != null) {
            $serializeArray['invoice_id'] = $invoiceArray['invoice_id'];
        } else
            $serializeArray['invoice_id'] = '';
        if ($invoiceArray['bank'] != null) {
            $serializeArray['bank'] = $invoiceArray['bank'];
        } else
            $serializeArray['bank'] = '';
        if ($invoiceArray['bankbranch'] != null) {
            $serializeArray['bankbranch'] = $invoiceArray['bankbranch'];
        } else
            $serializeArray['bankbranch'] = '';
        if ($invoiceArray['regno'] != null) {
            $serializeArray['regno'] = $invoiceArray['regno'];
        } else
            $serializeArray['regno'] = '';
        if ($invoiceArray['account'] != null) {
            $serializeArray['account'] = $invoiceArray['account'];
        } else
            $serializeArray['account'] = '';
        if ($invoiceArray['bic'] != null) {
            $serializeArray['bic'] = $invoiceArray['bic'];
        } else
            $serializeArray['bic'] = '';
        if ($invoiceArray['iban'] != null) {
            $serializeArray['iban'] = $invoiceArray['iban'];
        } else
            $serializeArray['iban'] = '';
        if ($invoiceArray['comment'] != null) {
            $serializeArray['comment'] = $invoiceArray['comment'];
        } else
            $serializeArray['comment'] = '';
        if ($invoiceArray['status'] != null) {
            $serializeArray['status'] = $invoiceArray['status'];
        } else
            $serializeArray['status'] = '';
        if ($invoiceArray['behandler'] != null) {
            $serializeArray['behandler'] = $invoiceArray['behandler'];
        } else
            $serializeArray['behandler'] = '';
        if ($invoiceArray['Address'][1] != null) {
            
                $serializeArray['Leveringsadresse']['0'] = $invoiceArray['Address'][1];
         
        } else
            $serializeArray['Address'] = '';

        if ($invoiceArray['Address'][2] != null) {
                $serializeArray['Faktureringsadresse']['0'] = $invoiceArray['Address'][2];       
        } else
            $serializeArray['Address'] = '';
        if ($invoiceArray['Address'][3] != null) {
                $serializeArray['Faktureringsadresse']['0'] = $invoiceArray['Address'][3]; 
        } else
            $serializeArray['Juridiskeadresse']['0'] = array('adresse1'=>'','adresse2'=>'', 'adresse3'=>'','zip'=>'', 'city'=>'');
        if ($invoiceArray['Kundenavn'] != null) {
            $serializeArray['Kundenavn'] = $invoiceArray['Kundenavn'];
        } else
        {$serializeArray['Kundenavn'] = '';}

        if ($invoiceArray['EANlokationsnr'] != null) {
            $serializeArray['EANlokationsnr'] = $invoiceArray['EANlokationsnr'];
        } else
            $serializeArray['EANlokationsnr'] = '';

        if ($invoiceArray['kontraktReference'] != null) {
            $serializeArray['kontraktReference'] = $invoiceArray['kontraktReference'];
        } else
            $serializeArray['kontraktReference'] = '';

        if ($invoiceArray['Seneste_rettidige_betalingsdato'] != null) {
            $serializeArray['Seneste_rettidige_betalingsdato'] = $invoiceArray['Seneste_rettidige_betalingsdato'];
        } else
            $serializeArray['Seneste_rettidige_betalingsdato'] = '';
        if ($invoiceArray['Leveringsdato'] != null) {
            $serializeArray['Leveringsdato'] = $invoiceArray['Leveringsdato'];
        } else
            $serializeArray['Leveringsdato'] = '';
        if ($invoiceArray['Ordrenummer'] != null) {
            $serializeArray['Ordrenummer'] = $invoiceArray['Ordrenummer'];
        } else
            $serializeArray['Ordrenummer'] = '';
        if ($invoiceArray['Fakturanummer'] != null) {
            $serializeArray['Fakturanummer'] = $invoiceArray['Fakturanummer'];
        } else
            $serializeArray['Fakturanummer'] = '';
        if ($invoiceArray['Kreditnotanummer'] != null) {
            $serializeArray['Kreditnotanummer'] = $invoiceArray['Kreditnotanummer'];
        } else
            $serializeArray['Kreditnotanummer'] = '';
        if ($invoiceArray['refno'] != null) {
            $serializeArray['refno'] = $invoiceArray['refno'];
        } else
            $serializeArray['refno'] = '';
        if ($invoiceArray['buyercontact'] != null) {
            $serializeArray['buyercontact'] = $invoiceArray['buyercontact'];
        } else
            $serializeArray['buyercontact'] = '';
        if ($invoiceArray['sellercontact'] != null) {
            $serializeArray['sellercontact'] = $invoiceArray['sellercontact'];
        } else
            $serializeArray['sellercontact'] = '';
        if ($invoiceArray['orderContactName'] != null) {
            $serializeArray['orderContactName'] = $invoiceArray['orderContactName'];
        } else
            $serializeArray['orderContactName'] = '';
        if ($invoiceArray['sellersOrderID'] != null) {
            $serializeArray['sellersOrderID'] = $invoiceArray['sellersOrderID'];
        } else
            $serializeArray['sellersOrderID'] = '';
        if ($invoiceArray['Ordredato'] != null) {
            $serializeArray['Ordredato'] = $invoiceArray['Ordredato'];
        } else
            $serializeArray['Ordredato'] = '';
        if ($invoiceArray['dimaccount'] != null) {
            $serializeArray['dimaccount'] = $invoiceArray['dimaccount'];
        } else
            $serializeArray['dimaccount'] = '';
        if ($invoiceArray['KontantRabatSats'] != null) {
            $serializeArray['KontantRabatSats'] = $invoiceArray['KontantRabatSats'];
        } else
            $serializeArray['KontantRabatSats'] = '';
        if ($invoiceArray['KontantRabatDato'] != null) {
            $serializeArray['KontantRabatDato'] = $invoiceArray['KontantRabatDato'];
        } else
            $serializeArray['KontantRabatDato'] = '';
        if ($invoiceArray['StrafRenteSats'] != null) {
            $serializeArray['StrafRenteSats'] = $invoiceArray['StrafRenteSats'];
        } else
            $serializeArray['StrafRenteSats'] = '';
        if ($invoiceArray['StrafRenteDato'] != null) {
            $serializeArray['StrafRenteDato'] = $invoiceArray['StrafRenteDato'];
        } else
            $serializeArray['StrafRenteDato'] = '';
        if ($invoiceArray['shipping'] != null) {
            $serializeArray['shipping'] = $invoiceArray['shipping'];
        } else
            $serializeArray['shipping'] = '';
        if ($invoiceArray['vatyn'] != null) {
                $serializeArray['vatyn'][0]=$invoiceArray['vatyn'][0];
        } else
             $serializeArray['vatyn'][0] =array('shipping' => '','tax'=>'', 'duty'=> '', 'importchg'=>'', 'Tillaeg' => '', 'Fradrag'=> '' );
        /*if ($invoiceArray['tax'] != null) {
            $serializeArray['tax'] = $invoiceArray['tax'];
        } else
            $serializeArray['tax'] = '';
        if ($invoiceArray['duty'] != null) {
            $serializeArray['duty'] = $invoiceArray['duty'];
        } else
            $serializeArray['duty'] = '';
        if ($invoiceArray['importchg'] != null) {
            $serializeArray['importchg'] = $invoiceArray['importchg'];
        } else
            $serializeArray['importchg'] = '';
        if ($invoiceArray['Tillaeg'] != null) {
            $serializeArray['Tillaeg'] = $invoiceArray['Tillaeg'];
        } else
            $serializeArray['Tillaeg'] = '';
        if ($invoiceArray['Fradrag'] != null) {
            $serializeArray['Fradrag'] = $invoiceArray['Fradrag'];
        } else
            $serializeArray['Fradrag'] = '';*/
        if ($invoiceArray['Varetotal'] != null) {
            $serializeArray['Varetotal'] = $invoiceArray['Varetotal'];
        } else
            $serializeArray['Varetotal'] = '';
        if ($invoiceArray['Varebeloeb'] != null) {
            $serializeArray['Varebeloeb'] = $invoiceArray['Varebeloeb'];
        } else
            $serializeArray['Varebeloeb'] = '';
        if ($invoiceArray['momsgrundlag'] != null) {
            $serializeArray['momsgrundlag'] = $invoiceArray['momsgrundlag'];
        } else
            $serializeArray['momsgrundlag'] = '';
        if ($invoiceArray['linjetotal_eks_moms'] != null) {
            $serializeArray['linjetotal_eks_moms'] = $invoiceArray['linjetotal_eks_moms'];
        } else
            $serializeArray['linjetotal_eks_moms'] = '';
        if ($invoiceArray['ehf_momsgrundlag'] != null) {
            foreach ($invoiceArray as $key => $value) {
                $serializeArray['ehf_momsgrundlag'][$key] = $value;
            };
        } else
            $serializeArray['ehf_momsgrundlag'] = '';
        if ($invoiceArray['ehf_moms'] != null) {
            foreach ($invoiceArray as $key => $value) {
                $serializeArray['ehf_moms'][$key] = $value;
            };
        } else
            $serializeArray['ehf_moms'] = '';
        if ($invoiceArray['ehf_moms_total'] != null) {
            $serializeArray['ehf_moms_total'] = $invoiceArray['ehf_moms_total'];
        } else
            $serializeArray['ehf_moms_total'] = '';
        if ($invoiceArray['Moms'] != null) {
            $serializeArray['Moms'] = $invoiceArray['Moms'];
        } else
            $serializeArray['Moms'] = '';
        if ($invoiceArray['Attachment'] != null) {
            foreach ($invoiceArray as $key => $value) {
                $serializeArray['Attachment'][$key] = $value;
            };
        } else
            $serializeArray['Attachment'] = '';

      return $serializeArray;
    }

}

?>
