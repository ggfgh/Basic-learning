<?php
if(isset($_POST['userSubmit'])){
    if(isset($_POST['userName']) && $_POST['userName'] == "admin" && isset($_POST'userPass']) && $_POST['userPass'] == "123456")
    {
        echo "Welcome ".$_POST['userName'];
    }
    else
    {
        echo "login error,login again<a href='./login.html'>login again</a>";
    }
}
else{
    echo "Error!<a href='./login.html'></a>please login again";
}

?>