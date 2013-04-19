<?php

class InvoiceData extends CFormModel {
    public $Momsfri;
    public $Antal;
    public $pris;
    public $dimaacount;
    public $varebeloeb;
    public $betegnelse_for_nettoindhold;
    public $ehf_vat;
    public $skaffevare;
    public $ordrefradrag;
    public $varenavn;
    public $varenummer;
    
    public function rules() {
        return array(
            array('Momsfri, Antal, pris, varebeloeb, betegnelse_for_nettoindhold, ehf_vat, varenavn, varenumme','requred'),
            array('Antal, pris, varebeloeb','numerical', 'integerOnly'=>true)
        );
    }
    
    public function getData() {
        return array('Momsfri'=>$this->Momsfri,'Antal'=>$this->Antal,'pris'=>$this->pris,
                    'dimaacount'=>$this->dimaacount,'varebeloeb'=>$this->varebeloeb,'betegnelse_for_nettoindhold'=>$this->betegnelse_for_nettoindhold,
                    'ehf_vat'=>$this->ehf_vat,'skaffevare'=>$this->skaffevare,'ordrefradrag'=>$this->ordrefradrag,'varenavn'=>$this->varenavn,'varenummer'=>$this->varenummer);
    }
    
}

?>
