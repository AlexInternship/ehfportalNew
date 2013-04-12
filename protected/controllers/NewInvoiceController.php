<?php

class NewInvoiceController extends Controller
{
    public function actionNewUser() {

        
        $model = new Users();
        $partner1 = new Partners();
        $partner2 = new Partners();
        $address1 = new Address();
        $address2 = new Address();
        //$document = new Document();
        $login = new LoginForm();
        $db = CallDB::Instance();
        $mailService = SendMail::Instance();
        $generator = RandomPassword::Instance();
        $serializer = Serializer::Instance();
        $password = $generator->generatePassword();

        $invoiceArray = array();
        $valid = true;
        /* if (isset($_POST['User'], $_POST['Partner1'], $_POST['Partner2'], $_POST['Address1'], $_POST['Address2'])) { */
        if (!empty($_POST)) {

            //var_dump($_POST);die;
            $model->attributes = $_POST['Users'];
            $partner1->attributes = $_POST['Partners'][1];
            $partner2->attributes = $_POST['Partners'][2];
            $address1->attributes = $_POST['Address'][1];
            $address2->attributes = $_POST['Address'][2];

            //$document->attributes = $_POST;
            // print_r($serializer->serializeDocument($_POST, 1, 1));
            $valid = $address1->validate() && $valid;
            $valid = $address2->validate() && $valid;
            $valid = $partner1->validate() && $valid;
            $valid = $partner2->validate() && $valid;
            $valid = $model->validate() && $valid;
            //$valid=$login->validate() && $valid;

            if ($valid) {

                $userArray = $_POST['Users'];
                $partner1Array = $_POST['Partners'][1];
                $partner2Array = $_POST['Partners'][2];
                $address1Array = $_POST['Address'][1];
                $address2Array = $_POST['Address'][2];
                $invoiceArray = $_POST;
                
                $db->newPartner($userArray, $partner1Array, $password);
                $db->newPartner(null, $partner2Array, '');
                $partnerId1 = $db->getPartnerId($partner1Array['name']);
                $partnerId2 = $db->getPartnerId($partner2Array['name']);
                $db->newAdress($address1Array, $partnerId1, $partner1Array['validcvr']);
                $db->newAdress($address2Array, $partnerId2, $partner2Array['validcvr']);
                $db->newUser($userArray, $password, $partnerId1, $address1Array['phone']);
               
                $login->attributes = array('username'=>$userArray['username'],'password'=>$password, 'rememberMe'=>'1');
                

                $orderId = $db->createInvoice();
                $serialized = $serializer->serializeDocument($invoiceArray, $partnerId1, $partnerId2, $orderId);
                $db->addSerializedDocument($serialized, $orderId);
                $mailService->sendNewUserMail($userArray['email'], $userArray['username'], $password);
                $login->validate();
                $login->login();
                
               //$url=$this->createUrl('http://wwww.ehfportal.no/biztalksend.php',array('type'=>'','id'=>$orderId, 'channel'=>'ehfout', 'organisation'=>'0', 'run'=>'1', 'dump'=>'web')); 
               //$this->redirect(Yii::app()->$url);
               //$url = $this->createUrl('sdfsdfsdfsdfsd');
               //admin/index.php?pID=14&pnavn=Johan+Test&action=list
               //$this->redirect('http://localhost/ehfportal2/ehfportal/biztalksend.php?type=inv&id='.$orderId.'&channel=ehfout&organisation=0&run=1');
                  Yii::app()->request->cookies['newestinvoice'] = new CHttpCookie('newestinvoice', $orderId);
                  $url = Yii::app()->createUrl('newinvoice/viewcreatedinvoice');
                  $this->redirect($url);
            }   //
        }
        $this->render('newuser', array('model' => $model, 'partner1' => $partner1, 'partner2' => $partner2, 'address1' => $address1, 'address2' => $address2));
    }
    
    public function actionTestView() {
        $model = new Users;
        $this->render('testView', array('model'=>$model));
    }
    
     public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                //use 'contact' view from views/mail
                $mail = new YiiMailer('contact', array('message' => $model->body, 'name' => $model->name, 'description' => 'Contact form'));
                //render HTML mail, layout is set from config file or with $mail->setLayout('layoutName')
                $mail->render();
                //set properties as usually with PHPMailer
                $mail->From = $model->email;
                $mail->FromName = $model->name;
                $mail->Subject = $model->subject;
                $mail->AddAddress(Yii::app()->params['adminEmail']);
                //send
                if ($mail->Send()) {
                    $mail->ClearAddresses();
                    Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                } else {
                    Yii::app()->user->setFlash('error', 'Error while sending email: ' . $mail->ErrorInfo);
                }

                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }
    // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
    
    function actionViewinvoice(){
        $db = CallDB::Instance();
        $serialized_id = Yii::app()->request->cookies['newestinvoice']->value;
        $s = $db->deserialize($serialized_id);
        $this->renderPartial('viewinvoice',array('dataProvider' => $s),'');
    }
    function actionviewcreatedinvoice(){
        $this->render('viewcreatedinvoice','');
    }  
}