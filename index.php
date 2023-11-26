<?php
require 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link type="text/css" rel="stylesheet" href="./img/css/style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>赞助中心</title>
</head>
<body >
<center class="top_center" ><?php echo $yxm?></center>
<form method="post" action="api.php" role="form">

<div class="text-center">

<select  class="qu" name='qu'  onchange="outputSelect()" >
<?php
	for($i=1;$i<=$server;$i++){
		echo "<option value ='".$i."'>当前充值 ".$i." 区</option>";
	}
?>
</select>
<p><input type="text" class="game_name" id="game_name" autocomplete="off" placeholder="请输入游戏昵称" name="game_name"/></p>
<ul  id="autoBox">
</ul>

</div>
<div class="content">
<input type="hidden" name="pid" value="<?php echo $id?>" />
<input class="form-control" placeholder="商户订单号" type="hidden" value="<?php echo date("YmdHis").mt_rand(100,999); ?>" name="WIDout_trade_no" type="text" readonly="readonly">
<a class="aaa" money="30" style="margin-left:3.5%;" href="javascript:void(0);">30元</a>
<a class="aaa" money="50" href="javascript:void(0);">50元</a>
<a class="aaa" money="100" href="javascript:void(0);">100元</a>
<a class="aaa" money="200" style="margin-left:3.5%;" href="javascript:void(0);">200元</a>
<a class="aaa" money="500" href="javascript:void(0);">500元</a>
<a class="aaaa" href="javascript:void(0);"><input type="text" class="aaamoney"  autocomplete="off" value="" placeholder="自定义" name="money"/></a>
</div>
<div class="bottom">
<p><button type="radio" value="wxpay" name="type" class="btn wxpay btn-success my-3"></button></p>
<p><button type="radio" value="alipay" name="type" class="btn alipay btn-success my-3"></button></p>
</div>
</form>
<div class="footer">
	<p ><a class="copy" href="https://www.ttfk.cc">www.ttfk.cc</a></p>
	<p ><a href="https://www.ttfk.cc">天天支付平台</a></p>
</div>
<script src="./img/script/pay.js?2"></script>


</body>


</html>