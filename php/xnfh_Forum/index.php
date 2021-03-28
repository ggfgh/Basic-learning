<?php
include "./inc/dblink.inc.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>注册--刹那芳华</title>
    </head>
<body>
    <h1>刹那芳华BBS论坛</h1>
<?php
if(isset($_COOKIE['name'])){
    echo "欢迎您,<a href='./number/'>".$_COOKIE['name']."</a>";
}else{
    echo "<a href='./number'>会员中心</a><br />";
}
echo "<a href='./addCont.php'>|欢迎留言</a>";
echo "<hr />";
$sql="select * from messages";
if($results=mysqli_query($link,$sql)){
    if(mysqli_num_rows($results) > 0){
        echo "<table border = 2>";
        echo "<tr>
        <td>ID</td>
        <td>title</td>
        <td>author</td>
        </tr>"; 
      while($result = mysqli_fetch_assoc($results)){
        echo "<tr>
        <td>{$result['id']}</td>
        <td>
        <a href='showmsg.php?id={$result['id']}' target='_blank'>{$result['title']}</a>
        </td>
        <td>{$result['uname']}</td>
        </tr>";
        //var_dump($result);
      }
      echo "</table>";
    }else{
        echo "暂无留言内容";
    }
}else{
    echo mesqli_error($link);
}
?>
<?php
mysqli_close($link);
?>

</body>
</html>