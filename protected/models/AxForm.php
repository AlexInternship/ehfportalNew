<?php

class Axform extends CFormModel{
    
    public $momsfri;
    public $antal;
    public $pris;
    public $kontering;
    public $dimaccount;
 /*   public $varebeloeb;
    public $betegnelse_for_nettoindhold;
    public $ehf_vat;
    public $skaffevare;
    public $ordrefradrag;
    public $linietotal;
    public $varenavn;
    public $varenummer;
    
    public $fakturadato;
    public $partner;
    public $partner_id;
    public $info_til_indkoeber;
    public $ordre_id;
    public $type;
    public $momssats;
    public $kortart;
    public $giro;
    public $girocreditor;
    public $paymenttype;
    public $invoce_id;
    public $bank;
    public $bankbranch;
    public $regno;
    public $account;
    public $bic;
    public $iban;
    public $comment;
    public $status;
    public $behandler;
    
    public $leveringsaddresse = array(
        'adresse1' =>'',
        'adresse2' =>'',
        'adresse3' =>'',
        'postnummer' =>'',
        'bynavn' =>'',
        'cvr' =>'',
        'eanno' =>'',      
    );
    
    
    public $juridiskadresse= array(
        'adresse1' =>'',
        'adresse2' =>'',
        'adresse3' =>'',
        'postnummer' =>'',
        'bynavn' =>'',
        'cvr' =>'',
        'eanno' =>'',      
    );
    
    public $kundenavn;
    public $eanlokationsnr;
    public $kontraktreference;
    public $seneste_rettidige_betalingsdato;
    public $leveringsdato;
    public $ordrenummer;
    public $fakturanummer;
    public $kreditnotanummer;
    public $refno;
    public $buyercontact;
    public $sellercontact;
    public $ordercontactname;
    public $sellersorderid;
    public $ordredato;
    public $dimaccount;
    public $kontantrabatsats;
    public $kontantrabatdato;
    public $strafrentesats;
    public $strarentedato;
    public $shipping;
    public $vatyn = Array(
         'shipping' => '', 
                        'tax' => '',
                        'duty' => '',
                        'importchg' => '', 
                        'Tillaeg' => '',
                        'Fradrag' => ''
    ) ;
    public $tax;
    public $duty;
    public $importing;
    public $tillaeg;
    public $fradrag;
    public $varetotal;
    public $varebeloeb;
    public $momsgrundlag;
    public $linjetotal_eksmoms;
    public $ehf_momsgrundlag = Array(
                        '25' => '',
                    );

    public $ehf_moms = Array
                    (
                        '25' => '',
                    );
    
     public $ehf_moms_total;
     public $moms;
     public $attachment =  Array
                            (
                                'Embedded' => Array
                            (
                                'Filnavn' => '0802_001.pdf',
                                'Mime' => 'application/pdf',
                                'id' => 'Fakturagrunnlag',
                            )
                         );*/
    
    public function rules(){
        
        return array(
            array('momsfri, antal, pris,kontering,dimaccount', 'required'),
            );
    }
    public function attributeLabels()
	{
		return array(
		);
	}
    
}
