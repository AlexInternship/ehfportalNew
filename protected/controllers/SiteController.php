<?php



class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /** Original Contact action
     * Displays the contact page

      public function actionContact() {
      $model = new ContactForm;
      if (isset($_POST['ContactForm'])) {
      $model->attributes = $_POST['ContactForm'];
      if ($model->validate()) {
      $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
      $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
      $headers = "From: $name <{$model->email}>\r\n" .
      "Reply-To: {$model->email}\r\n" .
      "MIME-Version: 1.0\r\n" .
      "Content-type: text/plain; charset=UTF-8";

      mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
      Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
      $this->refresh();
      }
      }
      $this->render('contact', array('model' => $model));
      }
     */

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionInvoiceView() {
        $ourInvoices = new Ourinvoices;
        $ourInvoicelines = new Ourinvoicelines;


        // uncomment the following code to enable ajax-based validation
        /*
          if(isset($_POST['ajax']) && $_POST['ajax']==='ourinvoices-invoiceView-form')
          {
          echo CActiveForm::validate($model);
          Yii::app()->end();
          }
         */

        if (isset($_POST['ourInvoices'], $_POST['ourInvoicelines'])) {
            $ourInvoices->attributes = $_POST['ourinvoices'];
            $ourInvoicelines->attributes = $_POST['ourInvoicelines'];

            $valid = $ourInvoices->validate();
            $valid = $ourInvoicelines->validate() && $valid;


            if ($valid) {
                // use false parameter to disable validation
                $ourInvoices->save(false);
                $ourInvoicelines->save(false);
                // ...redirect to another page
            }
        }
        $this->render('invoiceView', array('ourinvoices' => $ourInvoices, 'ourinvoicelines' => $ourInvoicelines));
    }

    public function actionOurinvoicesView() {
        $ourInvoices = new Ourinvoices;
        $ourInvoicelines = new Ourinvoicelines;
        $partners = new Partners;
        $adress = new Address;

        if (isset($_POST['ourInvoices'], $_POST['ourInvoicelines'], $_POST['partners'], $_POST['address'])) {
            $ourInvoices->attributes = $_POST['ourinvoices'];
            $ourInvoicelines->attributes = $_POST['ourInvoicelines'];
            $partners->attributes = $_POST['partners'];
            $address->attributes = $_POST['address'];

            $valid = $ourInvoices->validate();
            $valid = $ourInvoicelines->validate() && $valid;
            $valid = $partners->validate() && $valid;
            $valid = $address->validate() && $valid;

            if ($valid) {
                return;
                // use false parameter to disable validation
                //$ourInvoices->save(false);
                //$ourInvoicelines->save(false);
                // ...redirect to another page
            }
        }
        $this->render('ourinvoicesView', array('ourinvoices' => $ourInvoices, 'ourInvoicelines' => $ourInvoicelines, 'partners' => $partners, 'address' => $address));
    }

    public function actionPartnersView() {
        $model = new Partners;

        // uncomment the following code to enable ajax-based validation
        /*
          if(isset($_POST['ajax']) && $_POST['ajax']==='partners-partnersView-form')
          {
          echo CActiveForm::validate($model);
          Yii::app()->end();
          }
         */

        if (isset($_POST['partners'])) {
            $model->attributes = $_POST['partners'];
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }
        $this->render('partnersView', array('model' => $model));
    }
    
    public function actionAddressView() {
        $model = new Address;

        // uncomment the following code to enable ajax-based validation
        /*
          if(isset($_POST['ajax']) && $_POST['ajax']==='address-addressView-form')
          {
          echo CActiveForm::validate($model);
          Yii::app()->end();
          }
         */

        if (isset($_POST['address'])) {
            $model->attributes = $_POST['address'];
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }
        $this->render('addressView', array('model' => $model));
    }

    
    public function actionAxForm()
    {
        //
       $model = new Axform(); 
        
       if (isset($_POST['Axform'])) {
            $model->attributes = $_POST['Axform'];
            if ($model->validate()) {
                
                // form inputs are valid, do something here
                $safe_string_to_store = serialize($_POST['Axform']);
                CallDB::addInvoice($safe_string_to_store);
                return;
            }
        }
        $this->render('axForm', array('model' => $model));
    }
    
     public function actionNewUser()
    {
        //
       $model = new Users(); 
        
       if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            if ($model->validate()) {
                $userArray = $_POST['Users'];
                $password = RandomPassword::generatePassword();
                //CallDB::newUser($userArray, $password);
                SendMail::sendNewUserMail($userArray['email'] ,$userArray['username'], $password);
                return;
            }
        }
        $this->render('newuser', array('model' => $model));
    }

/*
    public function actionnewinvoiceView() {

        $ourinvoices = New Ourinvoices();

        if (isset($_POST['Users'], $_POST['Address'], $_POST['Ourinvoices'])) {
            $users->attributes = $_POST['Users'];
            $address->attributes = $_POST['Address'];
            /*$address_1->attributes = $_POST['Address'][1];
            $address_2->attributes = $_POST['Address'][2];
            $address_3->attributes = $_POST['Address'][3];
            $ourinvoices->attributes = $_POST['Ourinvoices'];
            $valid = $users->validate();
            $valid = $address->validate() && $valid;


             
            if($valid)
            {
            if ($valid) {
                // form inputs are valid, do something here

            /*$valid = $address_1->validate() && $valid;
            $valid = $address_2->validate() && $valid;
            $valid = $address_3->validate() && $valid;
            $valid = $ourinvoices->validate() && $valid;
            if ($valid) {
                $users->save(false);
                $address->save(false);
             /*   $address_1->save(false);
                $address_2->save(false);
                $address_3->save(false);
                $ourinvoices->save(false);
                $this->redirect('index');
                return;
            }
            }
            $this->render('newinvoiceView', array('users' => $user, 'address' => $address));
        }

    
    }
    
    
    public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
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
					Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				} else {
					Yii::app()->user->setFlash('error','Error while sending email: '.$mail->ErrorInfo);
				}
				
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

    

        $this->render('newinvoiceView', array('Users' => $users, 'Address' => $address, 'Ourinvoices'=>$ourinvoices));
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
*/
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
 

    /**
     *  returns a random string to be used for passwords and usernames
     */
   
}

