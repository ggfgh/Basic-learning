<?php
if(isset($_GET['userSubmit'])){
    if(isset($_GET['userName']) && $_GET['userName'] == "admin" && isset($_GET['userPass']) && $_GET['userPass'] == "123456")
    {
        echo "Welcom ".$_GET['userName'];
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