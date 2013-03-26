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
        }
        
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
        }
        
        foreach ($addresseArray2 as $key =>  $value) {            
            $serializeArray['Faktureringsadresse'][$key] =$value;
        }
        
        foreach ($addresseArray3 as $key =>  $value) {            
            $serializeArray['Juridiskadresse'][$key] =$value;
        }

       
                
        
    }
}


     /*   
               
                'Kundenavn' => 'Norges Forskningsråd',
                'EANlokationsnr' => '970141669',
                'kontraktReference' => '',
                'Seneste_rettidige_betalingsdato' => '19/01/2013',
                'Leveringsdato' => '20/12/2012',
                'Ordrenummer' => '',
                'Fakturanummer' => '155690',
                'Kreditnotanummer' => '',
                'refno' => '',
                'buyercontact' => 'Trude Hauge',
                'sellercontact' => 'Terje Sivertsen',
                'orderContactName' => '',
                'sellersOrderID' => '',
                'Ordredato' => '',
                'dimaccount' => '',
                'KontantRabatSats' => '', 
                'KontantRabatDato' => '',
                'StrafRenteSats' => '',
                'StrafRenteDato' => '',
                'shipping' => '0',
                'vatyn' => Array
                    (
                        'shipping' => '', 
                        'tax' => '',
                        'duty' => '',
                        'importchg' => '', 
                        'Tillaeg' => '',
                        'Fradrag' => '',
                    ),

                'tax' => '0',
                'duty' => '0',
                'importchg' => '0',
                'Tillaeg' => '0',
                'Fradrag' => '0',
                'Varetotal' => '109262.5',
                'Varebeloeb' => '87410',
                'momsgrundlag' => '0.00',
                'linjetotal_eks_moms' => '87410',
                'ehf_momsgrundlag' => Array
                    (
                        '25' => '87410'
                    ),

                'ehf_moms' => Array
                    (
                        '25' => '21852.5'
                    ),

                'ehf_moms_total' => '21852.5',
                'Moms' => '0',
                'Attachment' => Array
                    (
                        '0' => Array
                            (
                                'Embedded' => Array
                            (
                                'Filnavn' => '0802_001.pdf',
                                'Mime' => 'application/pdf',
                                'id' => 'Fakturagrunnlag',
                            )
                         )

                    )

            );
             return $array;
      * 
      */

?>
