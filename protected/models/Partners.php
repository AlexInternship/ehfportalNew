<?php

/**
 * This is the model class for table "partners".
 *
 * The followings are the available columns in table 'partners':
 * @property integer $partner_id
 * @property string $type
 * @property string $name
 * @property string $email
 * @property string $createddate
 * @property string $deleteddate
 * @property string $partnerno
 * @property string $internalpartnerno
 * @property string $girotype
 * @property string $giro
 * @property string $bank
 * @property string $bankbranch
 * @property string $regno
 * @property string $account
 * @property string $creation
 * @property string $girocreditor
 * @property string $doctype
 * @property string $docdestination
 * @property string $expectinvoice
 * @property string $username
 * @property string $oexusername
 * @property string $fsc
 * @property string $contact
 * @property string $validcvr
 * @property string $errormail
 * @property string $scanmail
 * @property string $password
 * @property string $bic
 * @property string $iban
 * @property string $paymenttype
 * @property string $cvr_sent
 * @property string $cvr_ok
 * @property string $info_to_purchaser
 * @property integer $retailer_id
 * @property string $mailcomment
 * @property string $identificationtype
 * @property string $recorderformat
 * @property string $recinvoiceformat
 * @property string $news
 * @property string $edimapfunction
 * @property string $version
 * @property string $priceraise
 * @property string $cpr
 * @property string $priceraise2008
 * @property string $ediprice
 * @property string $danfoss_ext
 * @property string $danfoss_deb
 * @property string $site
 * @property string $product
 */
class Partners extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Partners the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'partners';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			/*array('partnerno, validcvr, scanmail, info_to_purchaser, mailcomment', 'required'),*/
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
			array('username, oexusername, cpr, ediprice', 'length', 'max'=>16),
			array('contact, errormail, scanmail', 'length', 'max'=>100),
			array('password', 'length', 'max'=>40),
			array('bic, iban', 'length', 'max'=>64),
			array('paymenttype, priceraise, product', 'length', 'max'=>4),
			array('recinvoiceformat', 'length', 'max'=>12),
			array('edimapfunction', 'length', 'max'=>50),
			array('danfoss_ext, danfoss_deb', 'length', 'max'=>20),
			array('site', 'length', 'max'=>18),
			array('createddate, deleteddate, cvr_sent, cvr_ok', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('partner_id, type, name, email, createddate, deleteddate, partnerno, internalpartnerno, girotype, giro, bank, bankbranch, regno, account, creation, girocreditor, doctype, docdestination, expectinvoice, username, oexusername, fsc, contact, validcvr, errormail, scanmail, password, bic, iban, paymenttype, cvr_sent, cvr_ok, info_to_purchaser, retailer_id, mailcomment, identificationtype, recorderformat, recinvoiceformat, news, edimapfunction, version, priceraise, cpr, priceraise2008, ediprice, danfoss_ext, danfoss_deb, site, product', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'partner_id' => 'Partner',
			'type' => 'Type',
			'name' => 'Name',
			'email' => 'Email',
			'createddate' => 'Createddate',
			'deleteddate' => 'Deleteddate',
			'partnerno' => 'Partnerno',
			'internalpartnerno' => 'Internalpartnerno',
			'girotype' => 'Girotype',
			'giro' => 'Giro',
			'bank' => 'Bank',
			'bankbranch' => 'Bankbranch',
			'regno' => 'Regno',
			'account' => 'Account',
			'creation' => 'Creation',
			'girocreditor' => 'Girocreditor',
			'doctype' => 'Doctype',
			'docdestination' => 'Docdestination',
			'expectinvoice' => 'Expectinvoice',
			'username' => 'Username',
			'oexusername' => 'Oexusername',
			'fsc' => 'Fsc',
			'contact' => 'Contact',
			'validcvr' => 'Validcvr',
			'errormail' => 'Errormail',
			'scanmail' => 'Scanmail',
			'password' => 'Password',
			'bic' => 'Bic',
			'iban' => 'Iban',
			'paymenttype' => 'Paymenttype',
			'cvr_sent' => 'Cvr Sent',
			'cvr_ok' => 'Cvr Ok',
			'info_to_purchaser' => 'Info To Purchaser',
			'retailer_id' => 'Retailer',
			'mailcomment' => 'Mailcomment',
			'identificationtype' => 'Identificationtype',
			'recorderformat' => 'Recorderformat',
			'recinvoiceformat' => 'Recinvoiceformat',
			'news' => 'News',
			'edimapfunction' => 'Edimapfunction',
			'version' => 'Version',
			'priceraise' => 'Priceraise',
			'cpr' => 'Cpr',
			'priceraise2008' => 'Priceraise2008',
			'ediprice' => 'Ediprice',
			'danfoss_ext' => 'Danfoss Ext',
			'danfoss_deb' => 'Danfoss Deb',
			'site' => 'Site',
			'product' => 'Product',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('partner_id',$this->partner_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('createddate',$this->createddate,true);
		$criteria->compare('deleteddate',$this->deleteddate,true);
		$criteria->compare('partnerno',$this->partnerno,true);
		$criteria->compare('internalpartnerno',$this->internalpartnerno,true);
		$criteria->compare('girotype',$this->girotype,true);
		$criteria->compare('giro',$this->giro,true);
		$criteria->compare('bank',$this->bank,true);
		$criteria->compare('bankbranch',$this->bankbranch,true);
		$criteria->compare('regno',$this->regno,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('creation',$this->creation,true);
		$criteria->compare('girocreditor',$this->girocreditor,true);
		$criteria->compare('doctype',$this->doctype,true);
		$criteria->compare('docdestination',$this->docdestination,true);
		$criteria->compare('expectinvoice',$this->expectinvoice,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('oexusername',$this->oexusername,true);
		$criteria->compare('fsc',$this->fsc,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('validcvr',$this->validcvr,true);
		$criteria->compare('errormail',$this->errormail,true);
		$criteria->compare('scanmail',$this->scanmail,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('bic',$this->bic,true);
		$criteria->compare('iban',$this->iban,true);
		$criteria->compare('paymenttype',$this->paymenttype,true);
		$criteria->compare('cvr_sent',$this->cvr_sent,true);
		$criteria->compare('cvr_ok',$this->cvr_ok,true);
		$criteria->compare('info_to_purchaser',$this->info_to_purchaser,true);
		$criteria->compare('retailer_id',$this->retailer_id);
		$criteria->compare('mailcomment',$this->mailcomment,true);
		$criteria->compare('identificationtype',$this->identificationtype,true);
		$criteria->compare('recorderformat',$this->recorderformat,true);
		$criteria->compare('recinvoiceformat',$this->recinvoiceformat,true);
		$criteria->compare('news',$this->news,true);
		$criteria->compare('edimapfunction',$this->edimapfunction,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('priceraise',$this->priceraise,true);
		$criteria->compare('cpr',$this->cpr,true);
		$criteria->compare('priceraise2008',$this->priceraise2008,true);
		$criteria->compare('ediprice',$this->ediprice,true);
		$criteria->compare('danfoss_ext',$this->danfoss_ext,true);
		$criteria->compare('danfoss_deb',$this->danfoss_deb,true);
		$criteria->compare('site',$this->site,true);
		$criteria->compare('product',$this->product,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
      function autocompleteInfo(){
          
          
          return Array('heeee', 'meeeee','test');
      }
        
}