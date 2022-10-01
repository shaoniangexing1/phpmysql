<?php
header("conntent-type:text/html;charset=utf-8");
if(!empty($_GET)){
    $id=$_GET["id"];
    $link=require_once 'conn.php';
    mysqli_select_db($link,'yangkaikai');
    mysqli_set_charset($link,'utf8');
    $sql1="delete from `student` where id=$id";
    $res=mysqli_query($link,$sql1);
    if($res){
        echo "<script>alert('删除成功!');location.href='list.php'</script>";
        mysqli_free_result($res);
        mysqli_close($link);
    }
}
else{
    echo 1;
}