<meta charset="utf-8">
<?php
include "../inc/dblink.inc.php";
?>
<?php
if(isset($_POST['userSubmit'])){
    // var_dump($_POST);
    if($_POST['vcode'] == $_COOKIE['vcode']){
        $userName=$_POST['userName'];
        $userPass=$_POST['userPass'];
        $sql="select * from users where name='".$userName."' and password = '".md5($userPass)."'";
        if($result = mysqli_query($link,$sql)){
            if(mysqli_num_rows($result)>0){
                setcookie('name',$userName,time()+3600*24,"/");
               header("Location:./index.php");
            }
            else{
                echo "用户名或密码错误,<a href='./login.php'>请重新登录</a>";
            }
        }else{
            die(mysqli_error($link));
        }
    }else{
        echo "验证码错误,<a href='./login.php'>请重新登录</a>";
    }
}else{
    $html=<<<HTML
    <form
        action=""
        method="POST"    
    >
    用户名:<input type="text" name="userName"><br />
    密码:<input type="password" name="userPass"><br />
    验证码:<input type="text" name="vcode"><img
    src="./vCode.php"><br />
    <input type="submit" name="userSubmit" value="登录">
    </form>
HTML;
    echo $html;
}
?>
<?php
mysqli_close($link);
?>