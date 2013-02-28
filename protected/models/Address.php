<?php

/**
 * This is the model class for table "address".
 *
 * The followings are the available columns in table 'address':
 * @property integer $address_id
 * @property integer $partner_id
 * @property string $type
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $zip
 * @property string $city
 * @property string $countrycode
 * @property string $cvr
 * @property string $phone
 * @property string $fax
 * @property string $deleteddate
 * @property string $partnerno
 * @property string $eanno
 */
class Address extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Address the static model class
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
		return 'address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('partner_id', 'numerical', 'integerOnly'=>true),
                        array('cvr', 'length',  'min' => 9, 'max'=>9, 
                        'tooShort'=>Yii::t("translation", "{attribute} is too short."),
                        'tooLong'=>Yii::t("translation", "{attribute} is too long.")),
                        array('cvr', 'unique','message'=>'cvr already exists!'),            
                       	array('zip', 'numerical', 'integerOnly'=>true),
                        array('zip', 'length',  'min' => 4, 'max'=>4, 
                        'tooShort'=>Yii::t("translation", "{attribute} is too short."),
                        'tooLong'=>Yii::t("translation", "{attribute} is too long.")),
			array('type', 'length', 'max'=>8),
			array('address1, address2, address3, city, partnerno', 'length', 'max'=>255),
			array('countrycode', 'length', 'max'=>3),
			array('cvr', 'length', 'max'=>64),
			array('phone, fax', 'length', 'max'=>30),
			array('eanno', 'length', 'max'=>15),
			array('deleteddate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('address_id, partner_id, type, address1, address2, address3, zip, city, countrycode, cvr, phone, fax, deleteddate, partnerno, eanno', 'safe', 'on'=>'search'),
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
			'address_id' => 'Address',
			'partner_id' => 'Partner',
			'type' => 'Type',
			'address1' => 'Address',
			'address2' => 'Address2',
			'address3' => 'Address3',
			'zip' => 'Zip',
			'city' => 'City',
			'countrycode' => 'Countrycode',
			'cvr' => 'Cvr',
			'phone' => 'Phone',
			'fax' => 'Fax',
			'deleteddate' => 'Deleteddate',
			'partnerno' => 'Partnerno',
			'eanno' => 'Eanno',
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

		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('partner_id',$this->partner_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('address3',$this->address3,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('countrycode',$this->countrycode,true);
		$criteria->compare('cvr',$this->cvr,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('deleteddate',$this->deleteddate,true);
		$criteria->compare('partnerno',$this->partnerno,true);
		$criteria->compare('eanno',$this->eanno,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}