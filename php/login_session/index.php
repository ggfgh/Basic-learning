<?php
session_start();
?>

<meta charset="utf-8">
<h1>莎娜芳华论坛</h1>
<?php
if(isset($_SESSION['userName']) && $_SESSION['userName'] == 'Tom'){
    echo "welcome login ".$_SESSION['userName']."!<a
     href='./logout.php'>注销</a>";
}else{
    echo "<a href='./login.php'>请登录</a>";
}
?>