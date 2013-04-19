<?php

class Serializer {

     public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new Serializer();
        }
        return $inst;
    }

    public function serializeDocument($invoice, $invoiceArray, $senderId, $receiverId, $orderId) {
        $serializeArray = array();
        if (array_key_exists('Fakturadata', $invoice)) {
            foreach ($invoice as $key => $value) {
                $serializeArray['Fakturadata'][$key] = $value;
            };
        } else
            $serializeArray['Fakturadata'] = '';
        if (array_key_exists('FakturaDato', $invoiceArray)) {
            $serializeArray['FakturaDato'] = $invoiceArray['FakturaDato'];
        } else
            $serializeArray['FakturaDato'] = '';
        if (array_key_exists('Partners', $invoiceArray)) {
            $serializeArray['partner'] = $invoiceArray['Partners']['1']['name'];
        } else
            $serializeArray['partner'] = '';
        if ($senderId != null) {
            $serializeArray['partner_id'] = $senderId;
        } else
            $serializeArray['partner_id'] = '';
        if (array_key_exists('Info_til_indkoeber', $invoiceArray)) {
            $serializeArray['Info_til_indkoeber'] = $invoiceArray['Info_til_indkoeber'];
        } else
            $serializeArray['Info_til_indkoeber'] = '';
        if ($orderId != null) {
            $serializeArray['order_id'] = $orderId;
        } else
            $serializeArray['order_id'] = '';
        if (array_key_exists('type', $invoiceArray)) {
            $serializeArray['type'] = $invoiceArray['type'];
        } else
            $serializeArray['type'] = '';
        if (array_key_exists('Momssats', $invoiceArray)) {
            $serializeArray['Momssats'] = $invoiceArray['Momssats'];
        } else
            $serializeArray['Momssats'] = '';
        if (array_key_exists('kortart', $invoiceArray)) {
            $serializeArray['kortart'] = $invoiceArray['kortart'];
        } else
            $serializeArray['kortart'] = '';
        if (array_key_exists('giro', $invoiceArray)) {
            $serializeArray['giro'] = $invoiceArray['giro'];
        } else
            $serializeArray['giro'] = '';
        if (array_key_exists('girocreditor', $invoiceArray)) {
            $serializeArray['girocreditor'] = $invoiceArray['girocreditor'];
        } else
            $serializeArray['girocreditor'] = '';
        if (array_key_exists('paymenttype', $invoiceArray)) {
            $serializeArray['paymenttype'] = $invoiceArray['paymenttype'];
        } else
            $serializeArray['paymenttype'] = '';
        if (array_key_exists('invoice_id', $invoiceArray)) {
            $serializeArray['invoice_id'] = $invoiceArray['invoice_id'];
        } else
            $serializeArray['invoice_id'] = '';
        if (array_key_exists('bank', $invoiceArray)) {
            $serializeArray['bank'] = $invoiceArray['bank'];
        } else
            $serializeArray['bank'] = '';
        if (array_key_exists('bankbranch', $invoiceArray)) {
            $serializeArray['bankbranch'] = $invoiceArray['bankbranch'];
        } else
            $serializeArray['bankbranch'] = '';
        if (array_key_exists('regno', $invoiceArray)) {
            $serializeArray['regno'] = $invoiceArray['regno'];
        } else
            $serializeArray['regno'] = '';
        if (array_key_exists('account', $invoiceArray)) {
            $serializeArray['account'] = $invoiceArray['account'];
        } else
            $serializeArray['account'] = '';
        if (array_key_exists('bic', $invoiceArray)) {
            $serializeArray['bic'] = $invoiceArray['bic'];
        } else
            $serializeArray['bic'] = '';
        if (array_key_exists('iban', $invoiceArray)) {
            $serializeArray['iban'] = $invoiceArray['iban'];
        } else
            $serializeArray['iban'] = '';
        if (array_key_exists('comment', $invoiceArray)) {
            $serializeArray['comment'] = $invoiceArray['comment'];
        } else
            $serializeArray['comment'] = '';
        if (array_key_exists('status', $invoiceArray)) {
            $serializeArray['status'] = $invoiceArray['status'];
        } else
            $serializeArray['status'] = '';
        if (array_key_exists('behandler', $invoiceArray)) {
            $serializeArray['behandler'] = $invoiceArray['behandler'];
        } else
            $serializeArray['behandler'] = '';

        if (array_key_exists('Address', $invoiceArray)) {
            if (array_key_exists('1', $invoiceArray['Address']))
                $serializeArray['Leveringsadresse'] = 
                    array('Adresse1' => $invoiceArray['Address'][1]['addresse1'], 'adresse2' => $invoiceArray['Address'][1]['addresse2'], 'adresse3' => $invoiceArray['Address'][1]['addresse3'], 
                                        'Postnummer' => $invoiceArray['Address'][1]['zip'], 'ByNavn' => $invoiceArray['Address'][1]['city'],'cvr' => $invoiceArray['Address'][1]['cvr'], 'eanno' => $invoiceArray['Address'][1]['eanno']);
        } else
            $serializeArray['Address'] = '';

        if (array_key_exists('Address', $invoiceArray)) {
            if (array_key_exists('2', $invoiceArray['Address']))
                array('Adresse1' => $invoiceArray['Address'][2]['addresse1'], 'adresse2' => $invoiceArray['Address'][2]['addresse2'], 'adresse3' => $invoiceArray['Address'][2]['addresse3'], 
                                        'Postnummer' => $invoiceArray['Address'][2]['zip'], 'ByNavn' => $invoiceArray['Address'][2]['city'],'cvr' => $invoiceArray['Address'][2]['cvr'], 'eanno' => $invoiceArray['Address'][2]['eanno']);
        } else
            $serializeArray['Address'] = '';
        if (array_key_exists('Address', $invoiceArray)) {
            if (array_key_exists('3', $invoiceArray['Address']))
                array('Adresse1' => $invoiceArray['Address'][3]['addresse1'], 'adresse2' => $invoiceArray['Address'][3]['addresse2'], 'adresse3' => $invoiceArray['Address'][3]['addresse3'], 
                                        'Postnummer' => $invoiceArray['Address'][3]['zip'], 'ByNavn' => $invoiceArray['Address'][3]['city'],'cvr' => $invoiceArray['Address'][3]['cvr'], 'eanno' => $invoiceArray['Address'][3]['eanno']);
        } else
            $serializeArray['Juridiskeadresse']['0'] = array('adresse1' => '', 'adresse2' => '', 'adresse3' => '', 'zip' => '', 'city' => '');
        if (array_key_exists('Kundenavn', $invoiceArray)) {
            $serializeArray['Kundenavn'] = $invoiceArray['Kundenavn'];
        } else {
            $serializeArray['Kundenavn'] = '';
        }

        if (array_key_exists('EANlokationsnr', $invoiceArray)) {
            $serializeArray['EANlokationsnr'] = $invoiceArray['EANlokationsnr'];
        } else
            $serializeArray['EANlokationsnr'] = '';

        if (array_key_exists('kontraktReference', $invoiceArray)) {
            $serializeArray['kontraktReference'] = $invoiceArray['kontraktReference'];
        } else
            $serializeArray['kontraktReference'] = '';

        if (array_key_exists('Seneste_rettidige_betalingsdato', $invoiceArray)) {
            $serializeArray['Seneste_rettidige_betalingsdato'] = $invoiceArray['Seneste_rettidige_betalingsdato'];
        } else
            $serializeArray['Seneste_rettidige_betalingsdato'] = '';
        if (array_key_exists('Leveringsdato', $invoiceArray)) {
            $serializeArray['Leveringsdato'] = $invoiceArray['Leveringsdato'];
        } else
            $serializeArray['Leveringsdato'] = '';
        if (array_key_exists('Ordrenummer', $invoiceArray)) {
            $serializeArray['Ordrenummer'] = $invoiceArray['Ordrenummer'];
        } else
            $serializeArray['Ordrenummer'] = '';
        if (array_key_exists('Fakturanummer', $invoiceArray)) {
            $serializeArray['Fakturanummer'] = $invoiceArray['Fakturanummer'];
        } else
            $serializeArray['Fakturanummer'] = '';
        if (array_key_exists('Kreditnotanummer', $invoiceArray)) {
            $serializeArray['Kreditnotanummer'] = $invoiceArray['Kreditnotanummer'];
        } else
            $serializeArray['Kreditnotanummer'] = '';
        if (array_key_exists('refno', $invoiceArray)) {
            $serializeArray['refno'] = $invoiceArray['refno'];
        } else
            $serializeArray['refno'] = '';
        if (array_key_exists('buyercontact', $invoiceArray)) {
            $serializeArray['buyercontact'] = $invoiceArray['buyercontact'];
        } else
            $serializeArray['buyercontact'] = '';
        if (array_key_exists('sellercontact', $invoiceArray)) {
            $serializeArray['sellercontact'] = $invoiceArray['sellercontact'];
        } else
            $serializeArray['sellercontact'] = '';
        if (array_key_exists('orderContactName', $invoiceArray)) {
            $serializeArray['orderContactName'] = $invoiceArray['orderContactName'];
        } else
            $serializeArray['orderContactName'] = '';
        if (array_key_exists('sellersOrderID', $invoiceArray)) {
            $serializeArray['sellersOrderID'] = $invoiceArray['sellersOrderID'];
        } else
            $serializeArray['sellersOrderID'] = '';
        if (array_key_exists('Ordredato', $invoiceArray)) {
            $serializeArray['Ordredato'] = $invoiceArray['Ordredato'];
        } else
            $serializeArray['Ordredato'] = '';
        if (array_key_exists('dimaccount', $invoiceArray)) {
            $serializeArray['dimaccount'] = $invoiceArray['dimaccount'];
        } else
            $serializeArray['dimaccount'] = '';
        if (array_key_exists('KontantRabatSats', $invoiceArray)) {
            $serializeArray['KontantRabatSats'] = $invoiceArray['KontantRabatSats'];
        } else
            $serializeArray['KontantRabatSats'] = '';
        if (array_key_exists('KontantRabatDato', $invoiceArray)) {
            $serializeArray['KontantRabatDato'] = $invoiceArray['KontantRabatDato'];
        } else
            $serializeArray['KontantRabatDato'] = '';
        if (array_key_exists('StrafRenteSats', $invoiceArray)) {
            $serializeArray['StrafRenteSats'] = $invoiceArray['StrafRenteSats'];
        } else
            $serializeArray['StrafRenteSats'] = '';
        if (array_key_exists('StrafRenteDato', $invoiceArray)) {
            $serializeArray['StrafRenteDato'] = $invoiceArray['StrafRenteDato'];
        } else
            $serializeArray['StrafRenteDato'] = '';
        if (array_key_exists('shipping', $invoiceArray)) {
            $serializeArray['shipping'] = $invoiceArray['shipping'];
        } else
            $serializeArray['shipping'] = '';
        if (array_key_exists('vatyn', $invoiceArray)) {
            $serializeArray['vatyn'][0] = $invoiceArray['vatyn'][0];
        } else
            $serializeArray['vatyn'][0] = array('shipping' => '', 'tax' => '', 'duty' => '', 'importchg' => '', 'Tillaeg' => '', 'Fradrag' => '');
        if (array_key_exists('tax', $invoiceArray)) {
            $serializeArray['tax'] = $invoiceArray['tax'];
        } else
            $serializeArray['tax'] = '';
        if (array_key_exists('duty', $invoiceArray)) {
            $serializeArray['duty'] = $invoiceArray['duty'];
        } else
            $serializeArray['duty'] = '';
        if (array_key_exists('importchg', $invoiceArray)) {
            $serializeArray['importchg'] = $invoiceArray['importchg'];
        } else
            $serializeArray['importchg'] = '';
        if (array_key_exists('Tillaeg', $invoiceArray)) {
            $serializeArray['Tillaeg'] = $invoiceArray['Tillaeg'];
        } else
            $serializeArray['Tillaeg'] = '';
        if (array_key_exists('Fradrag', $invoiceArray)) {
            $serializeArray['Fradrag'] = $invoiceArray['Fradrag'];
        } else
            $serializeArray['Fradrag'] = '';
        if (array_key_exists('Varetotal', $invoiceArray)) {
            $serializeArray['Varetotal'] = $invoiceArray['Varetotal'];
        } else
            $serializeArray['Varetotal'] = '';
        if (array_key_exists('Varebeloeb', $invoiceArray)) {
            $serializeArray['Varebeloeb'] = $invoiceArray['Varebeloeb'];
        } else
            $serializeArray['Varebeloeb'] = '';
        if (array_key_exists('momsgrundlag', $invoiceArray)) {
            $serializeArray['momsgrundlag'] = $invoiceArray['momsgrundlag'];
        } else
            $serializeArray['momsgrundlag'] = '';
        if (array_key_exists('linjetotal_eks_moms', $invoiceArray)) {
            $serializeArray['linjetotal_eks_moms'] = $invoiceArray['linjetotal_eks_moms'];
        } else
            $serializeArray['linjetotal_eks_moms'] = '';
        if (array_key_exists('ehf_momsgrundlag', $invoiceArray)) {
            foreach ($invoiceArray as $key => $value) {
                $serializeArray['ehf_momsgrundlag'][$invoiceArray['ehf_momsgrundlag']] = $invoiceArray['Varebeloeb'];
            };
        } else
            $serializeArray['ehf_momsgrundlag']['0'] = array('' => '');
        if (array_key_exists('ehf_moms', $invoiceArray)) {
            foreach ($invoiceArray as $key => $value) {
                $serializeArray['ehf_moms'][$invoiceArray['ehf_moms']] = $invoiceArray['ehf_moms_total'];
            };
        } else
            $serializeArray['ehf_moms']['0'] = array('' => '');
        if (array_key_exists('ehf_moms_total', $invoiceArray)) {
            $serializeArray['ehf_moms_total'] = $invoiceArray['ehf_moms_total'];
        } else
            $serializeArray['ehf_moms_total'] = '';
        if (array_key_exists('Moms', $invoiceArray)) {
            $serializeArray['Moms'] = $invoiceArray['Moms'];
        } else
            $serializeArray['Moms'] = '';
        if (array_key_exists('Attachment', $invoiceArray)) {
            foreach ($invoiceArray as $key => $value) {
                $serializeArray['Attachment'][$key] = $value;
            };
        } else
            $serializeArray['Attachments']['0'] = array('' => '');;;
     
        return serialize($serializeArray);
    }

}

?>
