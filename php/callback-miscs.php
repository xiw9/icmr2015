<?php
include_once("register.config.php");
include_once("netpayclient.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//$pgid = buildKey("PgPubk.key");
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
	echo ".....".$flag;
	if($flag && ($status == '1001')){
		echo ".....".$flag;
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		  die("Mysql Connection Error");
		} 
		$sql = sprintf("INSERT INTO `icmr2015`.`transaction` (`registration_id`, `transaction_id`, `amount`, `usd`) 
			VALUES ('%s', '%s', '%s' , '%s')",  $reg_id, $orderno, $amount, $priceusd);
		if (mysqli_query($conn, $sql)) {
			$success="Success!";
		}
		mysqli_close($conn);
	}

}

?>