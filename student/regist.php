<?php
//根据regist.html中的表单提交的数据（$_POST）来进行的操作
//设置文档编码格式
header("conntent-type:text/html;charset=utf-8");
if(!empty($_POST)){
    //获取添加学生的信息
    $sno=$_POST["sno"];
    $sname=$_POST["sname"];
    $sclass=$_POST["sclass"];
    $sgrade=$_POST["sgrade"];
    $link=require_once 'conn.php';
    mysqli_select_db($link,'yangkaikai');
    mysqli_set_charset($link,'utf8');
    $sql="insert into student(sname,sno,sclass,sgrade) values ('$sname','$sno','$sclass','$sgrade')";
    $res=mysqli_query($link,$sql);
    if($res){
        echo "<script>alert('添加成功!');location.href='list.php'</script>";
    }else{
        echo "添加失败！".mysqli_error($link);
    }
    mysqli_free_result($res);
    mysqli_close($link);
}
else{
    //重新加载插入表单也regist.html输入要添加的信息
    require_once 'regist.html';
}
