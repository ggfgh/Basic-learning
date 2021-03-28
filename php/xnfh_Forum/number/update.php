<meta charset = "utf-8">
<?php
include "../inc/dblink.inc.php";
?>
<?php
if(isset($_POST['userSubmit'])){
    $userName = $_COOKIE['name'];
    $tmp_path = $_FILES['up']["tmp_name"];
    $path=".//images//".$_FILES['up']['name'];
    if(move_uploaded_file($tmp_path,$path)){
        $path = mysqli_real_escape_string($link,$path);
        $sql = "update users set photo='".$path."' where
        name = '".$userName."'";
        echo $sql."<br />";
        if(mysqli_query($link,$sql)){
            echo "图片上传成功,<a
            href='./index.php'>返回个人中心</a>";
        }else{
            die(mysqli_error($link));
        }
    }else{
        echo "图片上传失败";
    }
}else{
$html=<<<HTML

<form
    method="POST"
    enctype="multipart/form-data"
>
<input type="file" name="up"><br />
<input type="submit" name="userSubmit" value="提交">
</form>
HTML;
echo $html;
}
?>