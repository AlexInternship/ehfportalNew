<?php

 class CallDB {
     public static function addInvoice($serialized) {
           $invoice = new SerializeDocument();
           $invoice->document=$serialized;
           $invoice->type='invoice';
           $invoice->id = 55;
           $invoice->version = 3.0;
           $invoice->outbox = 'no';
           $invoice->save();

         }
         
      public static function deserialize($id) {
          
          $item = Yii::app()->db->createCommand()
            ->select('document')
            ->from(' serializedocuments')
            ->where('serializedocument_id=:id', array(':id'=>$id))
            ->queryRow();
          
          return $item;
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
         
      public static function returnInvoice($id) {
          $criteria=new CDbCriteria;
          $criteria->select='title';  // only select the 'title' column
          $criteria->condition='postID=:postID';
          $criteria->params=array(':postID'=>10);
          $invoice=  Axform::model()->find($condition,$params);

          }
          
          public static function newUser($array, $password, $partnerId) {
           $newUser = new User();
           $newUser->partnerID = $partnerId; 
           $newUser->username = $array['username'];
           $newUser->password = md5($password);
           $newUser->email = $array['email'];
           $newUser->firstname = $array['firstname'];
           $newUser->lastname = $array['lastname'];
           $newUser->phone = $array['phone'];
           $newUser->language = 'NO';
           $newUser->type = 'user';
         //  $newUser->partner_id = '9999'; //needs to be generated 
     
           $newUser->save();
         }
         
         
         public static function newAdress($array, $partnerID) {
             $newAdress = new Address();
             $newAdress->address1 = $array['adress'];
             // ekstra adresser hvor?
             // id?
             $newAdress->zip = $array['zip'];
             $newAdress->city = $array['city'];
             $newAdress->partner_id = $partnerID;
             $newAdress->save();
         }
         
         public static function newPartner($array, $type, $password) {
             // partner id, type, name, email(må godt være null), partnerNo(måske), account, username, contact, cvr, error mail, password
             $newPartner = new Partner();
             $newPartner->type = $type;
             $newPartner->name=$array['name'];
             $newPartner->name=$array['email'];
             $newPartner->account=$array['account'];
             $newPartner->username=$array['username'];
             $newPartner->contact=$array['contact'];
             $newPartner->validcvr=$array['validcvr'];
             $newPartner->errormail=$array['email'];
             $newPartner->password = md5($password);
             $newPartner->save();
         }
         
           public static function getPartnerId($name) {
          $partnerId = Yii::app()->db->createCommand()
            ->select('partner_id')
            ->from(' serializedocuments')
            ->where('name=:name', array(':name'=>$name))
            ->queryRow();
          
          return $partnerId; 

          }
             
 }
?>
