<?PHP

$part = iconv("UTF-8","gbk//TRANSLIT",trim($_POST['keywords'])); 

$qu = $_POST['qu'];
if(preg_match("/[\'.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$part)){  //不允许特殊字符
				  exit();
      }
require '../../conn.php';
function strToUtf8($str){
    $encode = mb_detect_encoding($str, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
    if($encode == 'UTF-8'){
        return $str;
    }else{
        return mb_convert_encoding($str, 'UTF-8', $encode);
    }
}		

function Gbk2Utf8($data){
    if(is_array($data)){
        foreach($data as $key => $value){
            $data[$key]=call_user_func(__FUNCTION__,$value);
        }
        return $data;
    }
    return iconv("gbk","utf-8",$data);
}



//exit($qu);

 
// 创建连接
if(!empty($part)){
	$conn = mysqli_connect($server_name[$qu]['host'],$server_name[$qu]['root'],$server_name[$qu]['pass'], "mir3");

mysqli_query($conn,"SET NAMES 'LATIN1'");

if (!$conn) {
    die("数据库连接失败" );
}
$sql = "SELECT `ChrName` FROM `user_index` WHERE  ChrName LIKE '%".$part."%' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // 输出数据
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
       $array[] = Gbk2Utf8($row);
       
    }
	echo(json_encode($array));

} else {

    exit();
}
$conn->close();
}


?>