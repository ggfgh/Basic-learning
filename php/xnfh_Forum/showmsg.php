<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1><a href='./index.php'>刹那芳华BBS论坛</a></h1>
<?php
include "./inc/dblink.inc.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="select * from messages where id=".$id;
    echo $sql;
    if($results=mysqli_query($link,$sql)){
        $result = mysqli_fetch_assoc($results);
        echo $result['uname'].":".$result['title']."<hr />";
        echo $result['content'];
    }else{
        echo mysqli_error($link);
    }
}else{
    echo "id Error";
}
mysqli_close($link);
?>
</body>
</html>