<?php
/* @var $this SiteController */
/* @var $users Users */
/* @var $Address Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Users-form',
        /*'focus'=>array($users,'partnerno'),*/
        'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($Users)); ?>
        <div class="box"> 
        <div class="row">Afsender</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'antal'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'Pris'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'Kontering'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'Varebeløb'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'ehf_vat'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        </div>
        <div class="box">
        <div class="row">
		<?php echo $form->labelEx($Users,'Faktura dato'); ?>
		 <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                       'model' => $Users,
                       'attribute' => 'email',
                       'htmlOptions' => array(
        // textField maxlength
         ),
));     ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'Partner id'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Users,'account'); ?>
		<?php echo $form->textField($Users,'firstname'); ?>
		<?php echo $form->error($Users,'firstname'); ?>
	</div>
     
<div class="row buttons">
<?php echo CHtml::submitButton($Users->isNewRecord ? 'Send faktura' : 'Save'); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php/* 
 * $q = "
INSERT INTO serializedocuments (type, document, id, outbox)
VALUES ('".$_SESSION['tab']."', '". addslashes(serialize($d)) ."', '". mysql_real_escape_string($_GET['edit']) ."', '$outbox')
";


document i serializeddocuments

Array
(
    [Fakturadata] => Array
        (
            [0] => Array
                (
                    [Momsfri] => Ja
                    [Antal] => 1
                    [Pris] => 87410
                    [Kontering] => 
                    [dimaccount] => 
                    [Varebeloeb] => 87410
                    [Betegnelse_for_nettoindhold] => EA
                    [ehf_vat] => 25
                    [Skaffevare] => Ja
                    [Ordrefradrag] => Nej
                    [linetotal] => 87410
                    [Varenavn] => Nysgjerrigper-blad nr. 1 - 2013
                    [Varenummer] => 1
                )

        )

    [FakturaDato] => 20/12/2012
    [partner] => 
    [partner_id] => 534
    [Info_til_indkoeber] => 
    [order_id] => 
    [type] => ehf
    [Momssats] => 0
    [kortart] => 
    [giro] => 
    [girocreditor] => 
    [paymenttype] => 
    [invoice_id] => 1227
    [bank] => 
    [bankbranch] => 
    [regno] => 
    [account] => 15030157580
    [bic] => 
    [iban] => 
    [comment] => 
    [status] => 
    [behandler] => 
    [Leveringsadresse] => Array
        (
            [Adresse1] => Stensberggata 26-28
            [Adresse2] => 
            [Adresse3] => 
            [Postnummer] => 0170
            [Bynavn] => Oslo
            [cvr] => 970141669
            [eanno] => 
        )

    [Faktureringsadresse] => Array
        (
            [Adresse1] => Postboks 2700 St. Hanshaugen
            [Adresse2] => 
            [Adresse3] => 
            [Postnummer] => 0131
            [Bynavn] => Oslo
            [cvr] => 970141669
            [eanno] => 
        )

    [Juridiskadresse] => Array
        (
            [Adresse1] => 
            [Adresse2] => 
            [Adresse3] => 
            [Postnummer] => 
            [Bynavn] => 
            [cvr] => 970141669
            [eanno] => 
        )

    [Kundenavn] => Norges Forskningsråd
    [EANlokationsnr] => 970141669
    [kontraktReference] => 
    [Seneste_rettidige_betalingsdato] => 19/01/2013
    [Leveringsdato] => 20/12/2012
    [Ordrenummer] => 
    [Fakturanummer] => 155690
    [Kreditnotanummer] => 
    [refno] => 
    [buyercontact] => Trude Hauge
    [sellercontact] => Terje Sivertsen
    [orderContactName] => 
    [sellersOrderID] => 
    [Ordredato] => 
    [dimaccount] => 
    [KontantRabatSats] => 
    [KontantRabatDato] => 
    [StrafRenteSats] => 
    [StrafRenteDato] => 
    [shipping] => 0
    [vatyn] => Array
        (
            [shipping] => 
            [tax] => 
            [duty] => 
            [importchg] => 
            [Tillaeg] => 
            [Fradrag] => 
        )

    [tax] => 0
    [duty] => 0
    [importchg] => 0
    [Tillaeg] => 0
    [Fradrag] => 0
    [Varetotal] => 109262.5
    [Varebeloeb] => 87410
    [momsgrundlag] => 0.00
    [linjetotal_eks_moms] => 87410
    [ehf_momsgrundlag] => Array
        (
            [25] => 87410
        )

    [ehf_moms] => Array
        (
            [25] => 21852.5
        )

    [ehf_moms_total] => 21852.5
    [Moms] => 0
    [Attachment] => Array
        (
            [0] => Array
                (
                    [Embedded] => JVBERi0xLjQKJeLjz9MNCjEgMCBvYmoKPDwgCi9DcmVhdG9yIChDYW5vbiBpUi1BRFYgQzUwNDUg
IFBERikKL0NyZWF0aW9uRGF0ZSAoRDoyMDEyMTIyMDA5MDY1NyswMScwMCcpCi9Qcm9kdWNlciAo
XDM3NlwzNzdcMDAwQVwwMDBkXDAwMG9cMDAwYlwwMDBlXDAwMCBcMDAwUFwwMDBTXDAwMExcMDAw
IFwwMDAxXDAwMC5cMDAwXAoxXDAwMGVcMDAwIFwwMDBmXDAwMG9cMDAwclwwMDAgXDAwMENcMDAw
YVwwMDBuXDAwMG9cMDAwblwwMDBcMDAwKQo+PiAKZW5kb2JqCjIgMCBvYmoKPDwgCi9QYWdlcyAz
.
.
.
MDAwMDQyODgxIDAwMDAwIG4gCjAwMDAwNDMwNDIgMDAwMDAgbiAKdHJhaWxlcgo8PAovU2l6ZSAy
MQovSW5mbyAxIDAgUgovUm9vdCAyIDAgUgovSURbPDkxZTdjMWNhZjJkZjU1NDkxNWQzY2JlYTRj
MzhkMjEyPjw5MWU3YzFjYWYyZGY1NTQ5MTVkM2NiZWE0YzM4ZDIxMj5dCj4+CnN0YXJ0eHJlZgo0
MzMyNwolJUVPRgo=

                    [Filnavn] => 0802_001.pdf
                    [Mime] => application/pdf
                    [id] => Fakturagrunnlag
                )

        )

)
 * 
 * 
 * 
 * 
 */?>