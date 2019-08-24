<?php
/*
	支付宝移动快捷支付异步通知服务端
	有问题可联系QQ: 1024257847
*/
require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

 /*-----------------开始验证数据-----------------*/
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();
if($verify_result) {	
	$out_trade_no = $_POST['out_trade_no'];//订单号	
	$trade_no = $_POST['trade_no'];//支付宝交易号	
	$trade_status = $_POST['trade_status'];//交易状态	
	$total_fee = $_POST['total_fee'];//交易金额

    $sqlhost = ""; //数据库地址，改成你自己的
    $sqluser = ""; //数据库用户，改成你自己的
    $sqlpass = ""; //数据库密码，改成你自己的
    $sqldata = ""; //数据库名字，改成你自己的
    
	$connect = mysql_connect($sqlhost,$sqluser,$sqlpass);
	if(!$connect){
        exit('链接数据库失败!');
	}
	mysql_select_db($sqldata,$connect);
	mysql_query("set names 'utf8'");

/////////////////////////////////////////////////////
///////////////////业务处理过程/////////////////////
/////////把自己业务处理代码写在这里////////////////
//////比如给用户增加积分、增加金币什么的//////////
/////////////////////////////////////////////////

}else{
    //支付宝数据验证失败
    echo "fail";
}
/*
$stream = fopen("pay.txt", "w+");
fwrite($stream, 'ddh='.$out_trade_no.'&zt='.$trade_status.'&je='.$total_fee);
*/
?>