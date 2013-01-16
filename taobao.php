<?php

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');

//include('includes/taobaosdk/request/UsersGetRequest.php');
//include('includes/taobaosdk/taobaosdk/TopClient.php');
require dirname(__FILE__) . '/includes/taobaosdk/request/UsersGetRequest.php';
require dirname(__FILE__) . '/includes/taobaosdk/TopClient.php';

//实例化TopClient类
$c = new TopClient;
$c->appkey = "21319081";
$c->secretKey = "35b5c9280ae73d4d805845e0bcc7e0cb";

//实例化具体API对应的Request类
$req = new UserGetRequest;
//$req = new UserGetRequest();
$req->setFields("nick,sex,uid,created");
$req->setNick("sandbox_c_1");

//执行API请求并打印结果
$resp = $c->execute($req);
echo "result:";
print_r($resp);
echo "<br>";
echo "nick:".$req->getNick();

echo 'end';

?>