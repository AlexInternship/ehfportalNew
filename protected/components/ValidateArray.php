<?php

class ValidateArray {
    
    public function validateArray($array){
            $validated = true;

            if (array_key_exists('fakturadata', $array)) {
                $validated = 'fakturadata doesnt exist';
            }

            else if (array_key_exists('0', $array)) {
                $validated = 'items doesnt exist';
            }

            else if (array_key_exists('partner', $array)) {
                $validated = 'partner doesnt exist';
            }

            else if (array_key_exists('partner_id', $array)) {
                $validated = 'partner_id doesnt exist';
            }

            else if (array_key_exists('info_til_indkøb', $array)) {
                $validated = 'info_til_indkøb doesnt exist';
            }

            else if (array_key_exists('order_id', $array)) {
                $validated = 'order_id doesnt exist';
            }

            else if (array_key_exists('type', $array)) {
                $validated = 'type doesnt exist';
            }

            else if (array_key_exists('momssats', $array)) {
                $validated = 'momssats doesnt exist';
            }

            else if (array_key_exists('kortart', $array)) {
                $validated = 'kortart doesnt exist';
            }

            else if (array_key_exists('giro', $array)) {
                $validated = 'giro doesnt exist';
            }

            else if (array_key_exists('girocreditor', $array)) {
                $validated = 'girocreditor doesnt exist';
            }

            else if (array_key_exists('girocreditor', $array)) {
                $validated = 'girocreditor doesnt exist';
            }

            else if (array_key_exists('paymenttype', $array)) {
                $validated = 'paymenttype doesnt exist';
            }

            else if (array_key_exists('invoice_id', $array)) {
                $validated = 'invoice_id doesnt exist';
            }

            else if (array_key_exists('bank', $array)) {
                $validated = 'bank doesnt exist';
            }

             else if (array_key_exists('bank_branch', $array)) {
                $validated = 'bank_branch doesnt exist';
            }

             else if (array_key_exists('regno', $array)) {
                $validated = 'regno doesnt exist';
            }

             else if (array_key_exists('account', $array)) {
                $validated = 'account doesnt exist';
            }

            else if (array_key_exists('bic', $array)) {
                $validated = 'bic doesnt exist';
            }

            else if (array_key_exists('iban', $array)) {
                $validated = 'iban doesnt exist';
            }

            else if (array_key_exists('comment', $array)) {
                $validated = 'comment doesnt exist';
            }

            else if (array_key_exists('status', $array)) {
                $validated = 'status doesnt exist';
            }

            else if (array_key_exists('behandler', $array)) {
                $validated = 'behandler doesnt exist';
            }

            else if (array_key_exists('fakturerings adresse', $array)) {
                $validated = 'fakturerings adresse doesnt exist';
            }

            else if (array_key_exists('juridiskadresse', $array)) {
                $validated = 'juridiskadresse doesnt exist';
            }

            else if (array_key_exists('Kundenavn', $array)) {
                $validated = 'Kundenavn doesnt exist';
            }

            else if (array_key_exists('EANlokationsnr', $array)) {
                $validated = 'EANlokationsnr doesnt exist';
            }

            else if (array_key_exists('kontraktReference', $array)) {
                $validated = 'kontraktReference doesnt exist';
            }

            else if (array_key_exists('Seneste_rettidige_betalingsdato', $array)) {
                $validated = 'Seneste_rettidige_betalingsdato doesnt exist';
            }

            else if (array_key_exists('Leveringsdato', $array)) {
                $validated = 'Leveringsdato doesnt exist';
            }

            else if (array_key_exists('Ordrenummer', $array)) {
                $validated = 'Ordrenummer doesnt exist';
            }

            else if (array_key_exists('Fakturanummer', $array)) {
                $validated = 'Fakturanummer doesnt exist';
            }

            else if (array_key_exists('Kreditnotanummer', $array)) {
                $validated = 'Kreditnotanummer doesnt exist';
            }

            else if (array_key_exists('refno', $array)) {
                $validated = 'refno doesnt exist';
            }

            else if (array_key_exists('buyercontact', $array)) {
                $validated = 'buyercontact doesnt exist';
            }

            else if (array_key_exists('sellercontact', $array)) {
                $validated = 'sellercontact doesnt exist';
            }

            else if (array_key_exists('orderContactName', $array)) {
                $validated = 'orderContactName doesnt exist';
            }

            else if (array_key_exists('sellersOrderID', $array)) {
                $validated = 'sellersOrderID doesnt exist';
            }

            else if (array_key_exists('Ordredato', $array)) {
                $validated = 'Ordredato doesnt exist';
            }

            else if (array_key_exists('dimaccount', $array)) {
                $validated = 'dimaccount doesnt exist';
            }

            else if (array_key_exists('KontantRabatSats', $array)) {
                $validated = 'KontantRabatSats doesnt exist';
            }

            else if (array_key_exists('KontantRabatDato', $array)) {
                $validated = 'KontantRabatDato doesnt exist';
            }

            else if (array_key_exists('StrafRenteSats', $array)) {
                $validated = 'StrafRenteSats doesnt exist';
            }

            else if (array_key_exists('StrafRenteDato', $array)) {
                $validated = 'StrafRenteDato doesnt exist';
            }

            else if (array_key_exists('shipping', $array)) {
                $validated = 'shipping doesnt exist';
            }

            else if (array_key_exists('vatyn', $array)) {
                $validated = 'vatyn doesnt exist';
            }

            else if (array_key_exists('tax', $array)) {
                $validated = 'tax doesnt exist';
            }

            else if (array_key_exists('duty', $array)) {
                $validated = 'duty doesnt exist';
            }

            else if (array_key_exists('importchg', $array)) {
                $validated = 'importchg doesnt exist';
            }

            else if (array_key_exists('Tillaeg', $array)) {
                $validated = 'Tillaeg doesnt exist';
            }

            else if (array_key_exists('Fradrag', $array)) {
                $validated = 'Fradrag doesnt exist';
            }

            else if (array_key_exists('Varetotal', $array)) {
                $validated = 'Varetotal doesnt exist';
            }

            else if (array_key_exists('Varebeloeb', $array)) {
                $validated = 'Varebeloeb doesnt exist';
            }

            else if (array_key_exists('momsgrundlag', $array)) {
                $validated = 'momsgrundlag doesnt exist';
            }

            else if (array_key_exists('linjetotal_eks_moms', $array)) {
                $validated = 'linjetotal_eks_moms doesnt exist';
            }

            else if (array_key_exists('ehf_momsgrundlag', $array)) {
                $validated = 'ehf_momsgrundlag doesnt exist';
            }

            else if (array_key_exists('ehf_moms', $array)) {
                $validated = 'ehf_moms doesnt exist';
            }

            else if (array_key_exists('ehf_moms_total', $array)) {
                $validated = 'ehf_moms_total doesnt exist';
            }

            else if (array_key_exists('Moms', $array)) {
                $validated = 'Moms doesnt exist';
            }

            else if (array_key_exists('Attachment', $array)) {
                $validated = 'Attachment doesnt exist';
            }
            
            return $validated;

        }
}

?>
