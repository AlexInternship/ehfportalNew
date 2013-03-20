<?php

class User extends CFormModel {

    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $language;


public function rules(){
        
        return array(
                        array('username', 'length', 'max'=>255),
			array('password', 'length', 'max'=>40),
			array('firstname, lastname, email', 'length', 'max'=>128),
                        array('email', 'email','message'=>"The email isn't correct"), 
			array('phone', 'length', 'max'=>16),
			array('language', 'length', 'max'=>2),
			array('deleteddate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, password, firstname, lastname, phone, email, language', 'safe', 'on'=>'search'),
		);
        }
}
?>
