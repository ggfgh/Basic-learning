<meta charset="utf-8">
<h1>刹那芳华论坛</h1>
<a href="./login.php">请登录</a>
<?php
if($_COOKIE['name']){
    echo "欢迎您，{$_COOKIE['name']}";
}else{
    echo "<a href='./login.php'>请登录< /a>";
}
?>