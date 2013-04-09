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

            print_r($_POST['LoginForm']);
            die;
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
                  $this->redirect('http://localhost/ehfportal2/ehfportal/biztalksend.php?type=inv&id='.$orderId.'&channel=ehfout&organisation=0&run=1');
                return;
            }   //
        }
        $this->render('newuser', array('model' => $model, 'partner1' => $partner1, 'partner2' => $partner2, 'address1' => $address1, 'address2' => $address2));
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

    function actionTestView() {
        $model = new Users();
        
        $this->render('testview', array('model' => $model));
    }

    function actionAC() {


        return $ar = array(
            Fakturadata => array
                (0 => array
                    (
                    Momsfri => 'Ja',
                    Antal => 20,
                    Pris => 10,
                    Kontering => 'Konteringsstreng',
                    dimaccount => '',
                    Varebeloeb => 200,
                    Betegnelse_for_nettoindhold => 'EA',
                    ehf_vat => 25,
                    Skaffevare => 'Ja',
                    Ordrefradrag => 'Nej',
                    linetotal => '200',
                    Varenavn => 'Beskrivelse',
                    Varenummer => 'Varenr',
                )
            ),
            FakturaDato => '27/03/2013',
            partner => '',
            partner_i => 318,
            Info_til_indkoeber => 'Beskjed',
            order_id => '',
            type => 'ehf',
            Momssats => 0,
            kortart => '',
            giro => 1111,
            girocreditor => '',
            paymenttype => 'bank',
            invoice_id => 2029,
            bank => '',
            bankbranch => '',
            regno => '',
            account => 123456789,
            bic => '',
            iban => '',
            comment => 'intern kommentar',
            status => '',
            behandler => '',
            Leveringsadresse => Array
                (
                Adresse1 => 'Testveien 88',
                Adresse2 => '',
                Adresse3 => '',
                Postnummer => 1111,
                Bynavn => 'Vevelstad',
                cvr => 999999999,
                eanno => ''
            ),
            Faktureringsadresse => Array
                (
                Adresse1 => 'Testveien 88',
                Adresse2 => '',
                Adresse3 => '',
                Postnummer => 1111,
                Bynavn => 'Vevelstad',
                cvr => 999999999,
                eanno => ''
            ),
            Juridiskadresse => Array
                (
                Adresse1 => '',
                Adresse2 => '',
                Adresse3 => '',
                Postnummer => '',
                Bynavn => '',
                cvr => 999999999,
                eanno => '',
            ),
            Kundenavn => 'Egen Konto',
            EANlokationsnr => 999999999,
            kontraktReference => 'Kontrakt',
            Seneste_rettidige_betalingsdato => 29 / 03 / 2013,
            Leveringsdato => 30 / 03 / 2013,
            Ordrenummer => 'Kjøpsordrenr',
            Fakturanummer => 'Fakturanummer',
            Kreditnotanummer => '',
            refno => '',
            buyercontact => 'Deres ref.',
            sellercontact => 'Vår ref.',
            orderContactName => '',
            sellersOrderID => '',
            Ordredato => '',
            dimaccount => '',
            KontantRabatSats => '',
            KontantRabatDato => '',
            StrafRenteSats => '',
            StrafRenteDato => '',
            shipping => 0,
            vatyn => Array
                (
                shipping => '',
                tax => '',
                duty => '',
                importchg => '',
                Tillaeg => '',
                Fradrag => ''
            ),
            tax => 0,
            duty => 0,
            importchg => 0,
            Tillaeg => 0,
            Fradrag => 0,
            Varetotal => 250,
            Varebeloeb => 200,
            momsgrundlag => 0.00,
            linjetotal_eks_moms => 200,
            ehf_momsgrundlag => Array
                (
                25 => 200
            ),
            ehf_moms => Array
                (
                25 => 50
            ),
            ehf_moms_total => 50,
            Attachment => '',
            Moms => 0
        );
    }

}
