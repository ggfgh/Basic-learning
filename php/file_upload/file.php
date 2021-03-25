<html>
    <meta charset="utf-8">
    <h1>file import test</h1> 
    <form
        action=""
        method="post"
        enctype="multipart/form-data"
    >
        <input type="file" name="userUpFile">
        <input type="submit" name="userSubmit" value="上传">
    </form>
</html>
<hr />
<?php
echo "<pre>";
    if(isset($_POST['userSubmit']))
    {
        //var_dump($_FILES);
        $tmp_path=$_FILES['userUpFile']['tmp_name'];
        $path=__DIR__."\\".$_FILES['userUpFile']['name'];
        if(move_uploaded_file($tmp_path,$path))
        {
            echo "upfile success!";
            //echo "<br />".$_FILES['userUpFile']['name'];
            echo $path;
        }
        else
        {
            echo "upfile failed";
        }

    }
?>