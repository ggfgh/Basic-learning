<meta charset="utf-8">
<?php
if(setcookie('name',$_COOKIE['name'],time() - 3600,"/")){
    // echo "退出成功!<a href='./index.php'>返回首页</a>";
    //重定向到首页
    header("Location:./index.php");
}else{
    die("Error!");
}
?>