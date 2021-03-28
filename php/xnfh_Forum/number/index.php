<html>
<head>
<meta charset="utf-8">
<title>首页--个人中心</title>
</head>
<body>
    <h1><a href='../index.php'>刹那芳华BBS论坛</a></h1>
<?php
include "../inc/dblink.inc.php";
?>
<?php
if(isset($_COOKIE['name'])){
    $userName=$_COOKIE['name'];
    $sql="select * from users where name='".$userName."'";
    if($results=mysqli_query($link,$sql)){
        if(mysqli_num_rows($results) > 0){
            $result = mysqli_fetch_assoc($results);
            echo "<hr />";
            echo "欢迎您,".$result['name']."! "."<a href=./logout.php>退出登录</a>";
            echo "<hr />";
            echo "您的头像是<img src='".$result['photo']."'>";
            echo "<a href='./update.php'>修改头像</a>";
            echo "<hr />";
            echo "账户余额：".$result['money']."<span
            style='color:red;'>请联系管理员</span>";
        }else{
            die("该用户不存在,<a
            href='./register.php'>请注册</a>或者<a
            href='../index.php'>返回首页</a>");
        }
    }else{
        die(mysqli_error());
    }
}else{
    echo "<a href='./register.php'>注册</a>";
    echo "<br />";
    echo "<a href='./login.php'>登录</a>";
}
?>
<?php
mysqli_close($link);
?>
</body>
</html>
