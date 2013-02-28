<?php

/**
 * This is the model class for table "ourinvoicelines".
 *
 * The followings are the available columns in table 'ourinvoicelines':
 * @property integer $ourinvoiceline_id
 * @property integer $ourinvoice_id
 * @property string $description
 * @property string $quantity
 * @property string $price
 * @property string $vatyn
 * @property string $reminder
 */
class Ourinvoicelines extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ourinvoicelines the static model class
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
		return 'ourinvoicelines';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description', 'required'),
			array('ourinvoice_id', 'numerical', 'integerOnly'=>true),
			array('quantity, price', 'length', 'max'=>16),
			array('vatyn, reminder', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ourinvoiceline_id, ourinvoice_id, description, quantity, price, vatyn, reminder', 'safe', 'on'=>'search'),
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
			'ourinvoiceline_id' => 'Ourinvoiceline',
			'ourinvoice_id' => 'Ourinvoice',
			'description' => 'Description',
			'quantity' => 'Quantity',
			'price' => 'Price',
			'vatyn' => 'Vatyn',
			'reminder' => 'Reminder',
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

		$criteria->compare('ourinvoiceline_id',$this->ourinvoiceline_id);
		$criteria->compare('ourinvoice_id',$this->ourinvoice_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('vatyn',$this->vatyn,true);
		$criteria->compare('reminder',$this->reminder,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}