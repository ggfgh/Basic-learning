<meta charset="utf-8">
<?php
if(isset($_POST['userSubmit'])){
        if(
            isset($_POST['userName']) && 
            $_POST['userName'] == "TOM" &&
            isset($_POST['userPass']) &&
            $_POST['userPass'] == "1"
        ){
            if(setcookie("name","TOM"))
            {
                echo "登录成功,<a href='./index.php'>返回首页</a>";
            }else{
                echo "cookie error";
            }
        }else{
            echo "用户名或密码错误,<a href='./login.php'>请重新登录</a>";
        }
}else{
$htm=<<<HTML
<form
    action=""
    method="post"
>
用户名:<input type="text" name="userName"><br />
密码:<input type="password" name="userPass"><br />
<input type="submit" name="userSubmit" value="登录">
</form>
HTML;
    echo $htm;
}
?>