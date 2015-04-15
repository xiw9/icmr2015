<?php
include_once("register.config.php");
include_once("netpayclient.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$pgid = buildKey("PgPubk.key");
	$pgid = buildKey("PgPubk-test.key");
	if(!$pgid) {
		echo "Payment Error";
		exit;
	} 

	$merid = $_POST["merid"];
	$orderno = $_POST["orderno"];
	$transdate = $_POST["transdate"];
	$amount = $_POST["amount"];
	$currencycode = $_POST["currencycode"];
	$transtype = $_POST["transtype"];
	$status = $_POST["status"];
	$checkvalue = $_POST["checkvalue"];
	$gateId = $_POST["GateId"];
	$priv1 = $_POST["Priv1"];
	$data1 = explode("|", $priv1);
	$email = $data1[0];
	$reg_id = intval($data1[1]);
	$priceusd = intval($data1[2]);
	$flag = verifyTransResponse($merid, $orderno, $amount, $currencycode, $transdate, $transtype, $status, $checkvalue);
	$success="Failure, please contact xwang10@fudan.edu.cn!";
	if($flag && ($status == '1001')){
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		  die("Mysql Connection Error");
		} 
		$sql = sprintf("INSERT INTO `icmr2015`.`transaction` (`registration_id`, `transaction_id`, `amount`, `usd`) 
			VALUES ('%s', '%s', '%s' , '%s')",  $reg_id, $orderno, $amount, $priceusd);
		if (mysqli_query($conn, $sql) && $_GET["b"]=='0') {
			$success="Success!";
			send_email($sendgrid_user,$sendgrid_pass,$email,sprintf("
			    <p>Dear %s,</p>
			    <p>We received your payment of $%s USD at %s.</p>
			    <p>Your Registration ID is %s.</p>
			    <p>Best Regards.</p>
			    ", $email, $priceusd, date('Y-m-d H:i:s',time()), $orderno));
		}
		mysqli_close($conn);
	}

}

function send_email($sendgrid_user,$sendgrid_pass,$email,$html){

require 'phpMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $sendgrid_user;                 // SMTP username
$mail->Password = $sendgrid_pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'admin@icmr2015.org';
$mail->FromName = 'ICMR 2015';
$mail->addAddress($email);    
$mail->addReplyTo('xwang10@fudan.edu.cn', 'ICMR 2015 Web Chair');

$mail->isHTML(true); 
$mail->Subject = 'Receipt for Your Payment to ICMR 2015';
$mail->Body    = $html;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

}

?>