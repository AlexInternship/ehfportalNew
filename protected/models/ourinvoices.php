<?php

/**
 * This is the model class for table "ourinvoices".
 *
 * The followings are the available columns in table 'ourinvoices':
 * @property integer $ourinvoice_id
 * @property string $invoicedate
 * @property string $duedate
 * @property string $paiddate
 * @property string $invoiced
 * @property integer $subscription_id
 * @property string $type
 * @property integer $ref_id
 * @property string $vatpaid
 * @property string $pdkpaid
 * @property string $invoicenumber
 * @property string $warningdate
 * @property string $deleteddate
 */
class ourinvoices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ourinvoices the static model class
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
		return 'ourinvoices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subscription_id, ref_id', 'numerical', 'integerOnly'=>true),
			array('invoiced, vatpaid, pdkpaid', 'length', 'max'=>3),
			array('type', 'length', 'max'=>7),
			array('invoicenumber', 'length', 'max'=>20),
			array('invoicedate, duedate, paiddate, warningdate, deleteddate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ourinvoice_id, invoicedate, duedate, paiddate, invoiced, subscription_id, type, ref_id, vatpaid, pdkpaid, invoicenumber, warningdate, deleteddate', 'safe', 'on'=>'search'),
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
			'ourinvoice_id' => 'Ourinvoice',
			'invoicedate' => 'Invoicedate',
			'duedate' => 'Duedate',
			'paiddate' => 'Paiddate',
			'invoiced' => 'Invoiced',
			'subscription_id' => 'Subscription',
			'type' => 'Type',
			'ref_id' => 'Ref',
			'vatpaid' => 'Vatpaid',
			'pdkpaid' => 'Pdkpaid',
			'invoicenumber' => 'Invoicenumber',
			'warningdate' => 'Warningdate',
			'deleteddate' => 'Deleteddate',
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

		$criteria->compare('ourinvoice_id',$this->ourinvoice_id);
		$criteria->compare('invoicedate',$this->invoicedate,true);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('paiddate',$this->paiddate,true);
		$criteria->compare('invoiced',$this->invoiced,true);
		$criteria->compare('subscription_id',$this->subscription_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('ref_id',$this->ref_id);
		$criteria->compare('vatpaid',$this->vatpaid,true);
		$criteria->compare('pdkpaid',$this->pdkpaid,true);
		$criteria->compare('invoicenumber',$this->invoicenumber,true);
		$criteria->compare('warningdate',$this->warningdate,true);
		$criteria->compare('deleteddate',$this->deleteddate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}