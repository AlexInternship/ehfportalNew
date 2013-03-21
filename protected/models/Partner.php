<?php

class Partner extends CFormModel{
    
    public $type;
    public $name;
    public $email;
    public $createddate;
    public $deleteddate;
    public $partnerno;
    public $internalpartnerno;
    public $girotype;
    public $giro;
    public $bank;
    public $bankbranch;
    public $regno;
    public $account;
    public $creation;
    public $girocreditor;
    public $doctype;
    public $docdestination;
    public $expectinvoice;
    public $username;
    public $oexusername;
    public $fsc;
    public $contact;
    public $validcvr;
    public $errormail;
    public $scanmail;
    public $password;
    public $bic;
    public $iban;
    public $paymenttype;
    public $cvr_sent;
    public $cvr_ok;
    public $info_to_purchaser;
    public $retailer_id;
    public $mailcomment;
    public $identificationtype;
    public $recorderformat;
    public $recinvoiceformat;
    public $news;
    public $edimapfunction;
    public $version;
    public $priceraise2008;
    public $ediprice;
    public $danfoss_ext;
    public $danfoss_deb;
    public $site;
    public $product;
    
    public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array( /*array('partnerno, validcvr, scanmail, info_to_purchaser, mailcomment', 'required'),*/
			array('name', 'required'),
		 	array('partnerno,retailer_id', 'numerical', 'integerOnly'=>true),
                        array('partnerno', 'length',  'min' => 4, 'max'=>4, 
                        'tooShort'=>Yii::t("translation", "{attribute} is too short."),
                        'tooLong'=>Yii::t("translation", "{attribute} is too long.")),
			array('type, identificationtype, version', 'length', 'max'=>10),
			array('name, email, internalpartnerno, docdestination', 'length', 'max'=>255),
                        array('email','email'),
			array('girotype', 'length', 'max'=>2),
			array('giro, girocreditor', 'length', 'max'=>26),
			array('bank, bankbranch, regno, account', 'length', 'max'=>128),
			array('creation, fsc, recorderformat', 'length', 'max'=>9),
			array('doctype', 'length', 'max'=>7),
			array('expectinvoice, news, priceraise2008', 'length', 'max'=>3),
			array('username, oexusername, ediprice', 'length', 'max'=>16),
			array('contact, errormail, scanmail', 'length', 'max'=>100),
			array('password', 'length', 'max'=>40),
			array('bic, iban', 'length', 'max'=>64), /*priceraise, cpr, cpr, priceraise2008, ediprice,*/ 
			array('paymenttype, product', 'length', 'max'=>4),
			array('recinvoiceformat', 'length', 'max'=>12),
			array('edimapfunction', 'length', 'max'=>50),
			array('danfoss_ext, danfoss_deb', 'length', 'max'=>20),
			array('site', 'length', 'max'=>18),
			array('createddate, deleteddate, cvr_sent, cvr_ok', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('partner_id, type, name, email, createddate, deleteddate, partnerno, internalpartnerno, girotype, giro, bank, bankbranch, regno, account, creation, girocreditor, doctype, docdestination, expectinvoice, username, oexusername, fsc, contact, validcvr, errormail, scanmail, password, bic, iban, paymenttype, cvr_sent, cvr_ok, info_to_purchaser, retailer_id, mailcomment, identificationtype, recorderformat, recinvoiceformat, news, edimapfunction, version,danfoss_ext, danfoss_deb, site, product', 'safe', 'on'=>'search'),
		);
	}

    
}?>
