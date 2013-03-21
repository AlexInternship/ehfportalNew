<?php

class User extends CFormModel {

    public $username;
    public $password;
    public $firstname;
    public $lastname;
   /* public $phone;*/
    public $email;
    public $language;
   /* public $address1;
    public $address2;
    public $address3;
    public $zip;
    public $city;*/


public function rules(){
        
        return array(
                        array('username', 'length', 'max'=>255),
			array('password', 'length', 'max'=>40),
			array('firstname, lastname, email', 'length', 'max'=>128),
                        array('email', 'email','message'=>"The email isn't correct"), 
			array('phone', 'length', 'max'=>16),
			/*array('language', 'length', 'max'=>2),*/
			array('deleteddate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, password, firstname, lastname, phone, email, language', 'safe', 'on'=>'search'),
		);
        }
        
        
        public function search(){
                $criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('partner_id',$this->partner_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('deleteddate',$this->deleteddate,true);
		$criteria->compare('language',$this->language,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));

        }
}
?>
