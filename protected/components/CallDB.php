<?php

 class CallDB {
     
     public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new CallDB();
        }
        return $inst;
    }
     
     public function addInvoice($serialized) {
           $invoice = new serializedocuments();
           $invoice->document=$serialized;
           $invoice->save();

         }
         
      public function deserialize($id) {
          
          $item = Yii::app()->db->createCommand()
            ->select('document')
            ->from('serializedocuments')
            ->where('serializedocument_id=:id', array(':id'=>$id))
            ->queryRow();
          
          return unserialize($item['document']);
         /* 
          $criteria=new CDbCriteria;
          $criteria->select='document';  // only select the 'title' column
          $criteria->condition='serializedocument_id=:serializedocument_id';
          $criteria->params=array(':serializedocument_id'=>$id);
          $item = SerializeDocument::find($criteria); 
          $deitem =deserialize($item);
          return $deitem;
          * 
          */
      }   
         
      public function returnInvoice($id) {
          $criteria=new CDbCriteria;
          $criteria->select='title';  // only select the 'title' column
          $criteria->condition='postID=:postID';
          $criteria->params=array(':postID'=>10);
          $invoice=  Axform::model()->find($condition,$params);

          }
          
          public function newUser($array, $password, $partnerId, $phone) {
              
           $newUser = new Users();
           $newUser->partner_id = $partnerId; 
           $newUser->username = $array['username'];
           $newUser->password = md5($password);
           $newUser->email = $array['email'];
           $newUser->firstname = $array['firstname'];
           $newUser->lastname = $array['lastname'];
           $newUser->phone = $phone;
           $newUser->language = 'NO';
           $newUser->type = 'user';
         //  $newUser->partner_id = '9999'; //needs to be generated 
     
           $newUser->save();
         }
         
         
         public function newAdress($array, $partnerID, $cvr) {
             $newAdress = new Address();
             $newAdress->address1 = $array['address1'];
             // ekstra adresser hvor?
             // id?
             $newAdress->zip = $array['zip'];
             $newAdress->city = $array['city'];
             $newAdress->partner_id = $partnerID;
             $newAdress->cvr = $cvr;
             $newAdress->save();
         }
         
         public function newPartner($userArray,$partnerArray, $password) {
             
             $newPartner = new Partners();
             
             if($userArray != null) {
                 
                $newPartner->email=$userArray['email'];
                $newPartner->name=$partnerArray['name'];
                $newPartner->type = 'vendor';
                $newPartner->contact = $userArray['firstname'].null.$userArray['lastname'];
                $newPartner->errormail = $userArray['email'];
                $newPartner->password = md5($password);
                $newPartner->validcvr = $partnerArray['validcvr'];
                $newPartner->partnerno = null;
                $newPartner->scanmail = null;
                $newPartner->info_to_purchaser = null;
                $newPartner->mailcomment = null;
                $newPartner->save();
                } else {
                 
                    $newPartner->name=$partnerArray['name'];
                    $newPartner->email=$partnerArray['email'];
                    $newPartner->validcvr=$partnerArray['validcvr'];
                    $newPartner->type = 'private';
                    $newPartner->partnerno = null;
                    $newPartner->scanmail = null;
                    $newPartner->info_to_purchaser = null;
                    $newPartner->mailcomment = null;
                    $newPartner->save();
                    }            
         }
         
        public function getPartnerId($name) {

            $partnerId = Yii::app()->db->createCommand()
              ->select('partner_id')
              ->from('partners')
              ->where('name=:name', array(':name'=>$name))
              ->queryRow();

            return $partnerId['partner_id']; 
       }
             
 }
?>
