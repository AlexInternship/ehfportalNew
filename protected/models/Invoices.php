<?php

/**
 * This is the model class for table "invoices".
 *
 * The followings are the available columns in table 'invoices':
 * @property integer $invoice_id
 * @property integer $order_id
 * @property string $invoiceno
 * @property string $partner
 * @property integer $vendor_id
 * @property string $invoicedate
 * @property integer $customer_id
 * @property string $invoicetype
 * @property string $refno
 * @property string $type
 * @property string $total
 * @property string $creationtype
 * @property string $deleteddate
 * @property string $direction
 * @property string $pdfoption_id
 * @property string $statushack
 * @property string $lastupdatedby
 * @property string $lastupdated
 */
class Invoices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invoices the static model class
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
		return 'invoices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lastupdated', 'required'),
			array('order_id, vendor_id, customer_id', 'numerical', 'integerOnly'=>true),
			array('invoiceno, refno', 'length', 'max'=>64),
			array('partner', 'length', 'max'=>255),
			array('invoicetype', 'length', 'max'=>7),
			array('type, creationtype', 'length', 'max'=>9),
			array('total', 'length', 'max'=>16),
			array('direction', 'length', 'max'=>8),
			array('pdfoption_id', 'length', 'max'=>10),
			array('statushack, lastupdatedby', 'length', 'max'=>11),
			array('invoicedate, deleteddate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('invoice_id, order_id, invoiceno, partner, vendor_id, invoicedate, customer_id, invoicetype, refno, type, total, creationtype, deleteddate, direction, pdfoption_id, statushack, lastupdatedby, lastupdated', 'safe', 'on'=>'search'),
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
			'invoice_id' => 'Invoice',
			'order_id' => 'Order',
			'invoiceno' => 'Invoiceno',
			'partner' => 'Partner',
			'vendor_id' => 'Vendor',
			'invoicedate' => 'Invoicedate',
			'customer_id' => 'Customer',
			'invoicetype' => 'Invoicetype',
			'refno' => 'Refno',
			'type' => 'Type',
			'total' => 'Total',
			'creationtype' => 'Creationtype',
			'deleteddate' => 'Deleteddate',
			'direction' => 'Direction',
			'pdfoption_id' => 'Pdfoption',
			'statushack' => 'Statushack',
			'lastupdatedby' => 'Lastupdatedby',
			'lastupdated' => 'Lastupdated',
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

		$criteria->compare('invoice_id',$this->invoice_id);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('invoiceno',$this->invoiceno,true);
		$criteria->compare('partner',$this->partner,true);
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('invoicedate',$this->invoicedate,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('invoicetype',$this->invoicetype,true);
		$criteria->compare('refno',$this->refno,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('creationtype',$this->creationtype,true);
		$criteria->compare('deleteddate',$this->deleteddate,true);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('pdfoption_id',$this->pdfoption_id,true);
		$criteria->compare('statushack',$this->statushack,true);
		$criteria->compare('lastupdatedby',$this->lastupdatedby,true);
		$criteria->compare('lastupdated',$this->lastupdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}