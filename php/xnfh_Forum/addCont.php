<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1><a href='./index.php'>刹那芳华BBS论坛</a></h1>
<?php
include "./inc/dblink.inc.php";
?>
<?php
if(isset($_COOKIE['name'])){
    $html=<<<HTML
    <form
        method="POST"
    >
    标题:<input type="text" name="userTitle"><br/>
    内容:<br />
    <textarea name = "userCont"></textarea>
    <input type = "submit" name="userSubmit" value="提交">
    </form>
HTML;
    echo $html."<br />";
    if(isset($_POST['userSubmit'])){
        $userName = $_COOKIE['name'];
        $title = mysqli_real_escape_string($link,$_POST['userTitle']);
        $cont = mysqli_real_escape_string($link,$_POST['userCont']);
        $sql = "insert into messages(uname,title,content) values('".
        $userName."','".$title."','".$cont."')";
        if(mysqli_query($link,$sql)){
            echo "留言成功,<a href='./'>返回首页</a>";
        }else{
            echo mysqli_error($link);
        }
    }else{
        echo "请提交留言";
    }
}else{
    echo "您还未登录,<a href='./number/'>请返回个人中心登录</a>";
}
?>
<?php
mysqli_close($link);
?>
</body>
</html>