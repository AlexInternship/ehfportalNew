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
     * Displays the contact page
     */
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

    public function actionNewinvoiceView() {
        $user = new Users;
        $address = new Address;
        
        if (isset($_POST['users'], $_POST['ourInvoicelines'])) {
            $user->attributes = $_POST['users'];
            $address->attributes = $_POST['address'];

            $valid = $user->validate();
            $valid = $address->validate() && $valid;

            if ($valid) {
                // form inputs are valid, do something here
                return;
            }
        }
        $this->render('newinvoiceView', array('users' => $user, 'address' => $address));
    }

    /**
     *  returns a random string to be used for passwords and usernames
     */
    public static function randomString() {
        $size = 6;
        $string = '';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        for ($i = 0; $i < $size; $i++)
            $string .= $characters[mt_rand(0, (strlen($characters) - 1))];
        return $string;
    }

    public function sendMail() {
        Yii::app()->mailer->AddAddress('jkristensen@gmail.com');
        Yii::app()->mailer->Subject = "your account has been created";
        Yii::app()->mailer->MsgHTML("<a href='http://site.com'>link to user</a>");
        Yii::app()->mailer->Send();
    }

    public function actionNewOurinvoicelinesView() {
        $model = new Ourinvoicelines;

        // uncomment the following code to enable ajax-based validation
        /*
          if(isset($_POST['ajax']) && $_POST['ajax']==='ourinvoicelines-NewOurinvoicelinesView-form')
          {
          echo CActiveForm::validate($model);
          Yii::app()->end();
          }
         */

        if (isset($_POST['Ourinvoicelines'])) {
            $model->attributes = $_POST['Ourinvoicelines'];
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }
        $this->render('NewOurinvoicelinesView', array('model' => $model));
    }
    
    public function actionmultiformView(){
        $NewOurinvoicelinesView = new Ourinvoicelines;
        $user = new Users;
        $address = new Address;
         $this->render('multiformView', 'newinvoiceView');
         $this->renderPartial('newinvoiceView', array('users' => $user, 'address' => $address));
         $this->renderPartial('NewOurinvoicelinesView', array('model' => $NewOurinvoicelinesView));
    } 

}
