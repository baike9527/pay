<?php

//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

$server = "1";	//当前服务器一共运行几个区、云机默认为1

$bili = "1000";	//比例 默认1：500

$id = "10001";	//商户id  www.ttfk.cc 获取

$apikey = "bh1vylpfbseef5m3n7q9aab6fcc99ydv";	//商户密钥  www.ttfk.cc 获取

$yxm ="剑来";	//你的游戏名字
//可以控制多个分区充值哦


//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑







//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下内容不懂技术不要修改↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓




$alipay_config['partner']		= $id ;
$alipay_config['key']			= $apikey;
//签名方式 不需修改
$alipay_config['sign_type']    = strtoupper('MD5');

//字符编码格式 目前支持 gbk 或 utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';
date_default_timezone_set("PRC");
$alipay_config['apiurl']    = 'https://www.ttfk.cc/';
?>