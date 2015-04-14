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
		if (mysqli_query($conn, $sql)) {
			$success="Success!";
			send_email($email,sprintf("
			    <p>Dear %s,</p>
			    <p>We received a payment of $%s USD at %s.</p>
			    <p>Your Registration ID is %s.</p>
			    <p>Thanks.</p>
			    ", $email, time('Y-m-d H:i:s'), $priceusd, $orderno));
		}
		mysqli_close($conn);
	}

}

function send_email($email,$html){

include_once("register.config.php");
$url = 'https://api.sendgrid.com/';

$params = array(
    'api_user'  => $sendgrid_user,
    'api_key'   => $sendgrid_pass,
    'to'        => $email,
    'subject'   => 'Receipt for Your Payment to ICMR 2015',
    'html'      => $html,
    'from'      => 'admin@icmr2015.org',
  );


$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
//curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

// print everything out
//print_r($response);

}

?>