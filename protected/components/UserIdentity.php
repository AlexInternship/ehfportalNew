<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

   	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{

        $dataProvider = new CActiveDataProvider('Users', array(
         //   'criteria' => $criteria,
        ));
        
       $names = array();
       
       foreach($dataProvider->getData() as $record) {
            $names[$record->username] =$record->password ;
        }
           
        if (!array_key_exists($this->username, $names))
            $this->errorCode=self::ERROR_USERNAME_INVALID;
       
        elseif(array_key_exists($this->username, $names)&&                        
                        ($names[$this->username] == md5($this->password)) 
                        )
                            $this->errorCode = self::ERROR_NONE;
	else
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        return !$this->errorCode;
	}
}