<?php
/*
 * array(5) { 
 * ["Users"]=> array(4) { 
 * ["username"]=> string(6) "asdasd" 
 * ["firstname"]=> string(6) "asdasd" 
 * ["lastname"]=> string(6) "asdasd" 
 * ["email"]=> string(16) "asdasd@sdogb.com" } 
 * ["Address"]=> array(2) { 
 * [1]=> array(6) { 
 * ["phone"]=> string(6) "asdasd" 
 * ["address1"]=> string(6) "asdasd" 
 * ["address2"]=> string(6) "asdasd" 
 * ["address3"]=> string(5) "adasd" 
 * ["zip"]=> string(4) "3523" 
 * ["city"]=> string(6) "asdasd" } 
 * [2]=> array(5) { 
 * ["address1"]=> string(6) "asdasd" 
 * ["address2"]=> string(5) "asdad" 
 * ["address3"]=> string(6) "asdasd" 
 * ["zip"]=> string(4) "1111" 
 * ["city"]=> string(6) "asdasd" } } 
 * ["Partners"]=> array(2) { 
 * [1]=> array(2) { 
 * ["validcvr"]=> string(6) "asdasd" 
 * ["name"]=> string(6) "asdasd" } 
 * [2]=> array(3) { 
 * ["name"]=> string(6) "asdasd" 
 * ["email"]=> string(15) "asdasd@fwes.com" 
 * ["validcvr"]=> string(6) "asdasd" } } 
 * ["Ourinvoicelines"]=> array(3) { 
 * [1]=> array(1) { 
 * ["description"]=> string(6) "asdasd" } 
 * [2]=> array(1) { 
 * ["description"]=> string(6) "asdasd" } 
 * [3]=> array(1) { 
 * ["description"]=> string(6) "asdasd" } } 
 * ["yt2"]=> string(6) "Submit" }
 * 
 */
/*
 * array(5) { 
 * ["Users"]=> array(4) { 
 * ["username"]=> string(7) "qweqweq" 
 * ["firstname"]=> string(6) "qweqwe" 
 * ["lastname"]=> string(6) "qweqwe" 
 * ["email"]=> string(11) "qweqwe@e.co" } 
 * ["Address"]=> array(2) { 
 * [1]=> array(6) 
 * { 
 * ["phone"]=> string(6) "qweqwe" 
 * ["address1"]=> string(3) "asd" 
 * ["address2"]=> string(6) "qweqwe" 
 * ["address3"]=> string(6) "qweqwe" 
 * ["zip"]=> string(4) "1234" 
 * ["city"]=> string(4) "qweq" 
 * } 
 * [2]=> array(5) 
 * { 
 * ["address1"]=> string(5) "qweqw" 
 * ["address2"]=> string(5) "qweqe" 
 * ["address3"]=> string(5) "qweqw" 
 * ["zip"]=> string(5) "12313" 
 * ["city"]=> string(4) "qweq" } 
 * } 
 * ["Partners"]=> array(2) 
 * { 
 * [1]=> array(2) { 
 * ["validcvr"]=> string(5) "qweqe" 
 * ["name"]=> string(4) "qweq" 
 * } 
 * [2]=> array(3) { 
 * ["name"]=> string(6) "qweqwe" 
 * ["email"]=> string(10) "qweqe@f.cm" 
 * ["validcvr"]=> string(5) "qwqwe" 
 * } 
 * } 
 * ["Ourinvoicelines"]=> array(2) { 
 * [1]=> array(4) { 
 * ["description"]=> string(4) "qweq" 
 * ["quantity"]=> string(10) "1.00000000" 
 * ["price"]=> string(10) "1.00000000" 
 * ["vatyn"]=> string(3) "yes" 
 * } 
 * [2]=> array(2) { 
 * ["description"]=> string(6) "qweqwe" 
 * ["quantity"]=> string(10) "1.00000000" } } [
 * ["yt2"]=> string(6) "Submit" }
 * 
 * 
 */

/*   SENDT FRA MORTEN BOAS
$q = "
INSERT INTO partners (type, name, contact, email, errormail, partnerno, validcvr, username, password, fsc, cvr_sent, cvr_ok, createddate, retailer_id, mailcomment,identificationtype,cpr,danfoss_ext,danfoss_deb,site)
VALUES ('vendor', '". $company ."', '". $contact ."', '". $email ."',
'". $errormail ."', '". $lever_id ."', '". $validcvr ."',
'". $username ."', '". md5($password) ."', '". $fsc ."',
'".$cvr_sent."', '".$cvr_ok."', NOW(), '".$retailer_id."', '". $mailcomment ."', '".$identificationtype."', '".$cprident."', '".$danfoss_ext."', '".$danfoss_deb."', 'aksesspunkt.no')
";
mysql_query($q);
$pID = mysql_insert_id();
$q = "
INSERT INTO address (partner_id, type, address1, address2, address3, cvr, zip, city, phone) VALUES
('". $pID ."', 'order', '". $address1 ."',  '". $address2 ."',
'". $address3 ."', '". $cvr ."', '". $zip ."',
'". $city ."','".$phoneident."')
";
mysql_query($q);

$user_type = $fsc != '' ? 'integration' : 'admin';

//Create user
//      if ($user_username != '' and $user_password != '') {
$q = "
INSERT INTO users (partner_id, username, password, firstname, lastname, phone, email, type, deleteddate, language) VALUES
('". $pID ."', '". $user_username ."', '". md5($user_password) ."',
'". $user_firstname ."', '". $user_lastname ."', '". $user_phone ."',
'". $user_email ."', '$user_type', NULL, 'DA')
";
mysql_query($q);
$uID = mysql_insert_id();


$q = "
INSERT INTO invoices (order_id, invoiceno, customer_id, invoicedate, vendor_id, partner, type, invoicetype, pdfoption_id)
VALUES ('".$_SESSION['doc'][$dType]['order_id']."',
'',
'". $_SESSION['doc'][$dType]['partner_id'] ."',
NOW(),
'". $_SESSION['partner_id'] ."',
'". $_SESSION['doc'][$dType]['partner'] ."',
'". $_SESSION['doc'][$dType]['type'] ."',
'". $_SESSION['newtype']."',
".$pdfOptID.")
";
$qLines = "INSERT INTO invoicelines (invoiceline_id, invoice_id, invoiced, itemnumber)
SELECT '' AS invoiceline_id, '".$newID."', invoiced, itemnumber
FROM invoicelines
WHERE invoice_id='".$_GET['edit']."'";

$q = "
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
 * 
 * 
 */
/*
Array ( [Users] => Array ( [username] => [firstname] => [lastname] => [email] => ) [Address] => Array ( [1] => Array ( [phone] => [address1] => [address2] => [address3] => [zip] => [city] => ) [2] => Array ( [address1] => [address2] => [address3] => [zip] => [city] => ) ) [Partners] => Array ( [1] => Array ( [validcvr] => [name] => ) [2] => Array ( [name] => [email] => [validcvr] => ) ) [Invoicelines] => Array ( [1] => Array ( [itemnumber] => [invoiced] => 0.00000000 ) ) [Moms] => 
[Fakturadata] => Array ( 
[FakturaDato] => 
[Info_til_indkoeber] => 
[momssats] => 
[kortart] => 
[giro] => 
[girocreditor] => 
[paymenttype] => 
[bank] => 
[bankbranch] => 
[regno] => 
[account] => 
[bic] => 
[iban] => 
[comment] => 
[status] => 
[behandler] => ) 

[fakturadata] => Array ( 
[order_id] => 
[type] => ) 
[EANlokationsnr] => 
[kontraktReference] => 
[Seneste_rettidige_betalingsdato] => 
[Leveringsdato] => 
[Ordrenummer] => 
[Fakturanummer] => 
[Kreditnotanummer] => 
[refno] => 
[buyercontact] => 
[sellercontact] => 
[orderContactName] => 
[sellersOrderID] => 
[Ordredato] => 
[dimaccount] => 
[KontantRabatSats] => 
[KontantRabatDato] => 
[StrafRenteDato] => 
[shipping] => 
[tax] => 
[duty] => 
[importchg] => 
[Tillaeg] => 
[Fradrag] => 
[Varetotal] => 
[Varebeloeb] => 
[momsgrundlag] => 
[linjetotal_eks_moms] =>
[yt2] => Submit ) 1*/

/*
 array(52) { 
["Fakturadata"]=> 
		array(2) { 
			[0]=> array(11) 
			{ 
				["Momsfri"]=> string(2) "Ja" 
				["Antal"]=> float(10) 
				["Pris"]=> float(100) 
				["dimaccount"]=> NULL
				["Varebeloeb"]=> float(1000) 
				["Betegnelse_for_nettoindhold"]=> string(2) "EA" 
				["ehf_vat"]=> string(2) "15" 
				["Skaffevare"]=> string(2) "Ja" 
				["Ordrefradrag"]=> string(3) "Nej" 
				["Varenavn"]=> string(7) "Linie 1" 
				["Varenummer"]=> string(1) "1" 

			} 

			[1]=> array(11) 
			{ 
				["Momsfri"]=> string(2) "Ja" 
				["Antal"]=> float(200) 
				["Pris"]=> float(200) 
				["dimaccount"]=> NULL 
				["Varebeloeb"]=> float(40000) 
				["Betegnelse_for_nettoindhold"]=> string(2) "EA" 
				["Skaffevare"]=> string(2) "Ja" 
				["Ordrefradrag"]=> string(3) "Nej" 
				["Varenavn"]=> string(7) "Linie 2" 
				["Varenummer"]=> string(1) "2" 
				["ehf_vat"]=> string(1) "5" 
			} 

		} 
["Fakturadato"]=> string(10) "18/05/2012" 
["partner"]=> NULL 
["partner_id"]=> string(1) "3" 
["Info_til_indkoeber"]=> string(16) "Her er fakturaen" 
["order_id"]=> NULL ["type"]=> string(3) "ehf" 
["Momssats"]=> float(0) 
["kortart"]=> NULL 
["giro"]=> string(7) "1234561" 
["girocreditor"]=> NULL 
["paymenttype"]=> NULL 
["invoice_id"]=> int(35) 
["bank"]=> string(0) "" 
["bankbranch"]=> string(0) "" 
["regno"]=> string(0) "" 
["account"]=> string(2) "23" 
["bic"]=> string(0) "" 
["iban"]=> string(0) "" 
["comment"]=> string(25) "Intern kommentar was here" 
["status"]=> string(4) "open" 
["behandler"]=> string(11) "Morten Boas" 
	["Leveringsadresse"]=> array(7) 
	{ 
		["Adresse1"]=> string(14) "Sønderengen 94" 
		["Adresse2"]=> string(0) "" 
		["Adresse3"]=> NULL 
		["Postnummer"]=> string(4) "2870" 
		["Bynavn"]=> string(9) "Dyssegård" 
		["cvr"]=> string(9) "998082471" 
		["eanno"]=> string(0) "" 
	} 
	["Faktureringsadresse"]=> array(7) 
	{ 
		["Adresse1"]=> string(14) "Sønderengen 94" 
		["Adresse2"]=> string(0) "" 
		["Adresse3"]=> NULL 
		["Postnummer"]=> string(4) "2870" 
		["Bynavn"]=> string(9) "Dyssegård" 
		["cvr"]=> string(9) "998082471" 
		["eanno"]=> string(0) "" 
	} 
	["Juridiskadresse"]=> array(7) 
	{ 
		["Adresse1"]=> string(0) "" 
		["Adresse2"]=> string(0) "" 
		["Adresse3"]=> NULL 
		["Postnummer"]=> string(0) "" 
		["Bynavn"]=> string(0) "" 
		["cvr"]=> string(9) "998082471" 
		["eanno"]=> string(0) "" 
	} 
["Kundenavn"]=> string(9) "EHF kunde" 
["EANlokationsnr"]=> string(9) "998082471" 
["Seneste_rettidige_betalingsdato"]=> string(10) "24/05/2012" 
["Ordrenummer"]=> NULL 
["Fakturanummer"]=> string(1) "1"
["Kreditnotanummer"]=> NULL 
["buyercontact"]=> string(15) "Kirsten Poulsen" 
["sellersOrderID"]=> string(2) "12" 
["Ordredato"]=> bool(false) 
["dimaccount"]=> NULL 
["KontantRabatSats"]=> NULL 
["KontantRabatDato"]=> bool(false) 
["StrafRenteSats"]=> NULL 
["StrafRenteDato"]=> bool(false) 
["shipping"]=> float(0)
 
	["vatyn"]=> array(6) 
	{ 
		["shipping"]=> NULL 
		["tax"]=> NULL 
		["duty"]=> NULL 
		["importchg"]=> NULL 
		["Tillaeg"]=> NULL 
		["Fradrag"]=> NULL 
	} 
["tax"]=> float(0) 
["duty"]=> float(0) 
["importchg"]=> float(0) 
["Tillaeg"]=> float(0) 
["Fradrag"]=> float(0) 
["Varebeloeb"]=> float(41000) 
["Varetotal"]=> float(41000) 
["Moms"]=> float(0) 
["Leveringsdato"]=> string(10) "19/05/2012" 
["ordreReference"]=> string(8) "MB ordre" 
["kontraktReference"]=> string(11) "MB kontrakt" 

}
 */