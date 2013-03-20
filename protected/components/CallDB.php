<?php

 class CallDB {
     public static function addInvoice($serialized) {
           $invoice = new serializedocuments();
           $invoice->document=$serialized;
           $invoice->type='invoice';
           $invoice->serializedocument_id =12;
           $invoice->id = 55;
           $invoice->version = 3.0;
           $invoice->outbox = 'no';
           $invoice->save();

         }
         
      public static function returnInvoice($id) {
          $criteria=new CDbCriteria;
          $criteria->select='title';  // only select the 'title' column
          $criteria->condition='postID=:postID';
          $criteria->params=array(':postID'=>10);
          $invoice=  Axform::model()->find($condition,$params);

          }
          
          public static function newUser($array, $password) {
           $newUser = new Users();
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
         }
         
         
             
 }
?>
