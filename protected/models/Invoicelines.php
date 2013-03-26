<?php

/**
 * This is the model class for table "invoicelines".
 *
 * The followings are the available columns in table 'invoicelines':
 * @property integer $invoiceline_id
 * @property integer $invoice_id
 * @property double $invoiced
 * @property string $itemnumber
 */
class Invoicelines extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invoicelines the static model class
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
		return 'invoicelines';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoice_id', 'numerical', 'integerOnly'=>true),
			array('invoiced', 'numerical'),
			array('itemnumber', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('invoiceline_id, invoice_id, invoiced, itemnumber', 'safe', 'on'=>'search'),
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
			'invoiceline_id' => 'Invoiceline',
			'invoice_id' => 'Invoice',
			'invoiced' => 'Invoiced',
			'itemnumber' => 'Itemnumber',
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

		$criteria->compare('invoiceline_id',$this->invoiceline_id);
		$criteria->compare('invoice_id',$this->invoice_id);
		$criteria->compare('invoiced',$this->invoiced);
		$criteria->compare('itemnumber',$this->itemnumber,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}