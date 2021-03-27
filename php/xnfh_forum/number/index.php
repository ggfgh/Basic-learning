<html>
<head>
<meta charset="utf-8">
<title>首页--个人中心</title>
</head>
<body>
    <h1>刹那芳华BBS论坛</h1>
<?php
if(isset($_COOKIE['name'])){
    echo "欢迎您, ".$_COOKIE['name'];
}else{
    echo "请登录";
}
?>
<hr />
</body>
</html>
