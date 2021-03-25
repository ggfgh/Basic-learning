<?php
$dbHost="127.0.0.1";
$dbUser="root";
$dbPass="root";
$dbName="cnfh";
$link = @mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$link)
{
   die(mysqli_connect_error());
}
$sql="select * from users";
if($results = mysqli_query($link,$sql))
{
    while($result = mysqli_fetch_assoc($results))
    {
        var_dump($result);
    }
}
else
{
    die(mysqli_error($link));
}
mysqli_close($link);
?>
