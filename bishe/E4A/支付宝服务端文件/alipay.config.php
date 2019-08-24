<?php

 
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//商户ID，以2088开头的16位纯数字
$alipay_config['partner'] = '2088093141231351'; //请改成你自己的商户ID

//商户的私钥（后缀是.pem）文件相对路径
$alipay_config['private_key_path'] = 'key/rsa_private_key.pem'; 

//支付宝公钥（后缀是.pem）文件相对路径
$alipay_config['ali_public_key_path'] = 'key/alipay_public_key.pem';


//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


//签名方式 不需修改
$alipay_config['sign_type'] = strtoupper('RSA');

//字符编码格式 目前支持 gbk 或 utf-8
$alipay_config['input_charset'] = strtolower('utf-8');

//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
$alipay_config['cacert'] = getcwd().'\\cacert.pem';

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport'] = 'http';
?>