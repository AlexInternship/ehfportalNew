<?php   

class Stub {
    
    public static function getXML() {
       /*
        $dir = dirname(__FILE__).'/testXml.xml';    
        $loadedXML = simplexml_load_file($dir);
        * 
        */
        $xml = new DOMDocument(); 
        $xml->load(dirname(__FILE__).'/testXml.xml');
        return $xml;
        
        echo $xml->getName() . "<br>";
        
        foreach($xml->children() as $child)
          {
            echo $child->getName()." : ". $child."<br>";
          }
          
          return $xml;
        }
        
        public function getStandardArray(){
            $array = array('Fakturadata' => Array
                    (
                        '0' => Array
                            (
                                'Momsfri' => 'Ja',
                                'Antal' => '1',
                                'Pris' => '87410',
                                'Kontering' =>  '',
                                'dimaccount' => '',
                                'Varebeloeb' => '87410',
                                'Betegnelse_for_nettoindhold' => 'EA',
                                'ehf_vat' => '25',
                                'Skaffevare' => 'Ja',
                                'Ordrefradrag' => 'Nej',
                                'linetotal' => '87410',
                                'Varenavn' => 'Nysgjerrigper-blad nr. 1 - 2013',
                                'Varenummer' => '1',
                            )

                    ),

                'FakturaDato' => '20/12/2012',
                'partner' => '',
                'partner_id' => '534',
                'Info_til_indkoeber' => '', 
                'order_id' => '',
                'type' => 'ehf',
                'Momssats' => '0',
                'kortart' => '',
                'giro' => '',
                'girocreditor' => '', 
                'paymenttype' => '',
                'invoice_id' => '1227',
                'bank' => '',
                'bankbranch' => '', 
                'regno' => '',
                'account' => '15030157580',
                'bic' => '',
                'iban' =>  '',
                'comment' => '',
                'status' => '',
                'behandler' => '',
                'Leveringsadresse' => Array
                    (
                        'Adresse1' => 'Stensberggata 26-28',
                        'Adresse2' => '',
                        'Adresse3' => '',
                        'Postnummer' => '0170',
                        'Bynavn' => 'Oslo',
                        'cvr' => '970141669',
                        'eanno' => '',
                    ),

                'Faktureringsadresse' => Array
                    (
                        'Adresse1' => 'Postboks 2700 St. Hanshaugen',
                        'Adresse2' => '',
                        'Adresse3' => '',
                        'Postnummer' => '0131',
                        'Bynavn' => 'Oslo',
                        'cvr' => '970141669',
                        'eanno' => '',
                    ),

                'Juridiskadresse' => Array
                    (
                        'Adresse1' => '',
                        'Adresse2' => '',
                        'Adresse3' => '',
                        'Postnummer' =>'',
                        'Bynavn' => '',
                        'cvr' => '970141669',
                        'eanno' => '',
                    ),

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
        }
    
}
?>
