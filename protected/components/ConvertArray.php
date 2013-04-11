<?php

class ConvertArray {
    
     public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new CallDB();
        }
        return $inst;
    }
    
    public function validateArray($array){
            $error = null;

            if (!array_key_exists('fakturadata', $array)) {
                $array['fakturadata'] = '';
            }

            else if (!array_key_exists('0', $array)) {
                $error = 'there is no items selected';
            }

            else if (!array_key_exists('partner', $array)) {
                $array['partner'] = '';
            }

            else if (!array_key_exists('partner_id', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('info_til_indkøb', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('order_id', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('type', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('momssats', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('kortart', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('giro', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('girocreditor', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('girocreditor', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('paymenttype', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('invoice_id', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('bank', $array)) {
                $array['partner_id'] = '';
            }

             else if (!array_key_exists('bank_branch', $array)) {
                $array['partner_id'] = '';
            }

             else if (!array_key_exists('regno', $array)) {
                $array['partner_id'] = '';
            }

             else if (!array_key_exists('account', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('bic', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('iban', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('comment', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('status', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('behandler', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('fakturerings adresse', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('juridiskadresse', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Kundenavn', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('EANlokationsnr', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('kontraktReference', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Seneste_rettidige_betalingsdato', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Leveringsdato', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Ordrenummer', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Fakturanummer', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Kreditnotanummer', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('refno', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('buyercontact', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('sellercontact', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('orderContactName', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('sellersOrderID', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Ordredato', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('dimaccount', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('KontantRabatSats', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('KontantRabatDato', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('StrafRenteSats', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('StrafRenteDato', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('shipping', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('vatyn', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('tax', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('duty', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('importchg', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Tillaeg', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Fradrag', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Varetotal', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Varebeloeb', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('momsgrundlag', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('linjetotal_eks_moms', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('ehf_momsgrundlag', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('ehf_moms', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('ehf_moms_total', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Moms', $array)) {
                $array['partner_id'] = '';
            }

            else if (!array_key_exists('Attachment', $array)) {
                $array['partner_id'] = '';
            }
            
            if($error != null)
                return $error;
            else return $array;

        }
    
}
?>
