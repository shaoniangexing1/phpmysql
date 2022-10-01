<?php
header("conntent-type:text/html;charset=utf-8");
$link=require_once 'conn.php';
mysqli_select_db($link,'yangkaikai');
mysqli_set_charset($link,'utf8');
$id=$_GET['id'];
$sql="select * from `student` where id=$id";
$result=mysqli_query($link,$sql);
$datarr=mysqli_fetch_assoc($result);
require_once 'modifiy.html';
//print_r($datarr);
//echo $datarr['sno'];
if(!empty($_POST)){
    $sno=$_POST["sno"];
    $sname=$_POST["sname"];
    $sclass=$_POST["sclass"];
    $sgrade=$_POST["sgrade"];
    $sql1="update `student` set `sno`='$sno',`sname`='$sname',`sclass`='$sclass',`sgrade`='$sgrade' where id=13";
    $res=mysqli_query($link,$sql1);
    if($res){
        echo "<script>alert('修改成功!');location.href='list.php'</script>";
    }else{
        echo "修改失败！".mysqli_error($link);
    }
//   mysqli_free_result($res);
    mysqli_close($link);
}