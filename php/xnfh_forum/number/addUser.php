<meta charset="utf-8">

<?php
include "../inc/dblink.inc.php";
?>
h6  
<?php
    var_dump($_POST);
    echo "<hr />";
    if(isset($_POST['userSubmit']))
    {  
        $userName=$_POST['userName'];
        $userPass1=$_POST['userPass1'];
        $userPass2=$_POST['userPass2'];  
        if(
            isset($userName) && isset($userPass1) && isset($userPass2)
            && $userPass1 === $userPass2
        )
        {
            $sql = "insert into users(name,password) values('".
            $userName."','".md5($userPass1)."')";
            echo $sql."<br />";
            if(!mysqli_query($link,$sql))
            {
                die("sql语句有误");
            }
            else
            {
                echo "注册成功，<a href=./index.php>返回个人中心</a>";
                setcookie("name",$userName,time()+3600,"/");
            }
        }
        else
        {
            echo "注册信息有误，<a
            href='./register.php'>请重新注册</a>";
        }
    }
    else
    {
        header("Location:./register.php");
    }
?>
<?php
mysqli_close($link);
?>