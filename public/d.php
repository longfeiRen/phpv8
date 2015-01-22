<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
function p($value='')
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}
//phpinfo();

$connect = new Memcached;  //声明一个新的memcached链接
$connect->setOption(Memcached::OPT_COMPRESSION, false); //关闭压缩功能
$connect->setOption(Memcached::OPT_BINARY_PROTOCOL, true); //使用binary二进制协议
$connect->addServer('0622aa050be911e4.m.cnqdalicm9pub001.ocs.aliyuncs.com', 11211,100); //添加OCS实例地址及端口号
//$connect->setSaslAuthData('0622aa050be911e4', 'MYc9ju581cuXX5mP6'); //设置OCS帐号密码进行鉴权
for ($i=0; $i < 10000; $i++) { 
	$connect->set("hellomd5($i)", "world$i");
}

echo 'hello: ',$connect->get("hello");
$connect->quit();

