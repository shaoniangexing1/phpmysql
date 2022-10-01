<?php
//获取数据库中的数据，进行网页显示
//加载数据库连接文件,conn.php
$link=require_once 'conn.php';//加载conn给了link
//sql代码
mysqli_select_db($link,'yangkaikai');
mysqli_set_charset($link,'utf8');
$sql='select * from student order by sno';
$res=mysqli_query($link,$sql);
$dataarr=mysqli_fetch_all($res,MYSQLI_ASSOC);//吧结果集转化成数组，传给dataarr
echo '<pre>';
//print_r($dataarr);
//前后端分离展示数据
require_once 'list.html';
mysqli_free_result($res);
mysqli_close($link);


