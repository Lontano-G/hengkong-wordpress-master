<?php
session_start();
require(dirname(__FILE__).'/ChuanglanSMS.php');
$code = rand(100000,999999);
$pNum = $_POST["pNum"];

/* ========== 行业短信 ========== */
$sms=new ChuanglanSMS('N2873932','c8d6f032');
//发送短信
$_SESSION['verifyCode'] = "123456";
// $result=$sms->send($pNum,"您好，您的验证码是123456");
// 查询余额
// $result=$sms->queryBalance();
// var_dump($result);


?>