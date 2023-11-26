<?php
  function loggedIn(){ 
    if(!$_SESSION['user_info']){
		Header("Location:login.php");
		exit;
    }
} 
error_reporting(E_ALL^E_WARNING^E_NOTICE);
session_start();

  $user = $_SESSION['user'];
$reg = "/zc/index.php";
$agm = "admin";	//默认代理
//代理数据库链接

//$database_conn = "web_wan";

$dbip = "127.0.0.1";
$username_conn = "root";
$password_conn = "www.gowlom2.com";//改为你的密码 在D:\Mud2.0\DBServer\DBService.ini 16行里面看

$my_conn = mysqli_connect($dbip, $username_conn, $password_conn);
date_default_timezone_set("PRC"); 

mysqli_query($my_conn,"SET NAMES 'LATIN1'");
if (!$my_conn)
{
    die("连接错误: " . mysqli_connect_error());
}
		
		
		
		//分区设置
$server_name = array(
						1=>array(
							"name"=>"一区",				//显示名称
							"host"=>"127.0.0.1",		//服务器IP	一区如果是和代理在一个机器上不用改		
							"root"=>"root",				//数据库用户名
							"pass"=>"www.gowlom2.com",	//数据库密码在DBService.ini16行里面看
							),
						2=>array(
							"name"=>"二区",
							"host"=>"106.75.250.21",		//服务器数据库要开放外部访问权限 二区需要在另外的服务器放权限 待会单独教学
							"root"=>"root",
							"pass"=>"www.gowlom2.com",
							),
					);
					
					
$dbdata1 = "mir3";
$dbdata2 = "gamedata";

function curl_get($url){
	$url = "http://ttfk.cc/s/api.php?url=".$url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
curl_setopt($ch, CURLOPT_TIMEOUT, 5); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

$notice = curl_exec($ch);

 return $notice;
}
function checkPassword($password){
    return preg_match('/^[_0-9a-zA-Z]{5,12}$/i', $password);
}



?>