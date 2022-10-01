<?php
//连接的每个参数定义成一个变量
$host='localhost';//主机名
$user='root';//用户名
$pasww='123456';//密码
$db='yangkaikai';//数据库名称
$link=mysqli_connect($host,$user,$pasww);
if (!$link){
    exit('数据库连接失败！'.'<br>'.mysqli_connect_error($link));
}
//把连接单独写成文件

return $link;//返回连接对象
mysqli_free_result($res);
mysqli_close($link);

