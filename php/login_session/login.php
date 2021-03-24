<?php
session_start();
echo "<meta charset='utf-8'>";
?>
<?php
if(isset($_POST['userSubmit'])){
    if(
        isset($_POST['userName']) &&
        isset($_POST['userPass']) &&
        $_POST['userName'] == 'Tom'&&
        $_POST['userPass'] == "1"
    ){
    $_SESSION['userName'] = $_POST['userName'];
    echo "登陆成功，<a href='./index.php'>返回首页</a>";
    }else{
            echo "用户名密码错误,<a href=./login.php>请重新登录</a>";
         }
}else{
    $html=<<<HTML
<form
    action=""
    method="post"
>
用户名:<input type="text" name="userName"><br />
密码:<input type="password" name="userPass"><br />
<input type="submit" name="userSubmit" value="登录">
</form>
HTML;
echo $html;
}
?>
