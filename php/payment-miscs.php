<?php
include_once("netpayclient.php");

 //导入私钥文件, 返回值即为您的商户号，长度15位

$merid = buildKey("MerPrK_808080201306302_20140826180021.key");

//for test
$merid = buildKey("MerPrk.key");

if(!$merid) {
    echo "Payment Error";
    exit;
} 

//$merid = "808080201306302";
//生成订单号，定长16位，任意数字组合，一天内不允许重复，本例采用当前时间戳，必填
$ordid = $reg_longid;
//订单金额，定长12位，以分为单位，不足左补0，必填
$money = intval($price)*625;
//$money = 50;
$transamt = padstr($money,12);
//dump("amt::::::::::::".$transamt);
//货币代码，3位，境内商户固定为156，表示人民币，必填
$curyid = "156";
//订单日期，本例采用当前日期，必填
$transdate = date('Ymd');
//dump($transdate);
//交易类型，0001 表示支付交易，0002 表示退款交易
$transtype = "0001";
//接口版本号，境内支付为 20070129，必填
$version = "20070129";
//页面返回地址(您服务器上可访问的URL)，最长80位，当用户完成支付后，银行页面会自动跳转到该页面，并POST订单结果信息，可选
$pagereturl = 'http://www.icmr2015.org/callback';
//后台返回地址(您服务器上可访问的URL)，最长80位，当用户完成支付后，我方服务器会POST订单结果信息到该页面，必填
$bgreturl ='http://www.icmr2015.org/callback?b=0';
//$bgreturl = 'http://'.$_SERVER['HTTP_HOST'].__ROOT__.'/index.php?m=Payment&a=Chinapay';
/************************
	页面返回地址和后台返回地址的区别：
		 后台返回从我方服务器发出，不受用户操作和浏览器的影响，从而保证交易结果的送达。
************************/

//支付网关号，4位，上线时建议留空，以跳转到银行列表页面由用户自由选择，本示例选用0001农商行网关便于测试，可选
$gateid = "";
//备注，最长60位，交易成功后会原样返回，可用于额外的订单跟踪等，可选

$priv1 = $email."|".$reg_id."|".$price;

//按次序组合订单信息为待签名串
$plain = $merid . $ordid . $transamt . $curyid . $transdate . $transtype . $priv1;
//dump($plain);
//生成签名值，必填
$chkvalue = sign($plain);
//dump($chkvalue);
if (!$chkvalue) {
    echo "Payment Error";
    exit;
}

$def_url = "<input type=HIDDEN name='MerId' value='".$merid."'>\n";
$def_url .= "<input type=HIDDEN name='OrdId' value='".$ordid."'>\n";
$def_url .= "<input type=HIDDEN name='TransAmt'  value='".$transamt."'>\n";
$def_url .= "<input type=HIDDEN name='CuryId'  value='".$curyid."'>\n";
$def_url .= "<input type=HIDDEN name='TransDate' value='".$transdate."'>\n";
$def_url .= "<input type=HIDDEN name='TransType' value='".$transtype."'>\n";
$def_url .= "<input type=hidden name='Version' value='".$version."'/>\n";
$def_url .= "<input type=HIDDEN name='BgRetUrl' value='".$bgreturl."'>\n";
$def_url .= "<input type=HIDDEN name='PageRetUrl' value='".$pagereturl."'>\n";
$def_url .= "<input type=HIDDEN name='GateId' value='".$gateid."'>\n";
$def_url .= "<input type=HIDDEN name='Priv1' value='".$priv1."'>\n";
$def_url .= "<input type=HIDDEN name='ChkValue' value='".$chkvalue."'>\n";  

?>