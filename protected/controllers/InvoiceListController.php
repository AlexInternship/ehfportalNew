<?php

class InvoiceListController extends Controller
{
    public function actionNewUser() {

        $model = new Users();
        $partner1 = new Partners();
        $partner2 = new Partners();
        $address1 = new Address();
        $address2 = new Address();
        //$document = new Document();
        $login = new LoginForm;
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
            $login->attributes = array('username' => $_POST['Users']['username'], 'password' => $password, 'rememberMe' => '1',);


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

                $orderId = $db->createInvoice();
                $serialized = $serializer->serializeDocument($invoiceArray, $partnerId1, $partnerId2, $orderId);
                $db->addSerializedDocument($serialized, $orderId);

                $mailService->sendNewUserMail($userArray['email'], $userArray['username'], $password);
                $login->login();
               //   $url=$this->createUrl('http://wwww.ehfportal.no/biztalksend.php',array('type'=>'','id'=>$orderId, 'channel'=>'ehfout', 'organisation'=>'0', 'run'=>'1', 'dump'=>'web')); 
               //  $this->redirect(Yii::app()->$url);
               //  $url = $this->createUrl('sdfsdfsdfsdfsd');
               //admin/index.php?pID=14&pnavn=Johan+Test&action=list
      //            $this->redirect('http://localhost/ehfportal2/ehfportal/biztalksend.php?type=inv&id='.$orderId.'&channel=ehfout&organisation=0&run=1');
                return;
            }   //
        }
        $this->render('newuser', array('model' => $model, 'partner1' => $partner1, 'partner2' => $partner2, 'address1' => $address1, 'address2' => $address2));
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
}