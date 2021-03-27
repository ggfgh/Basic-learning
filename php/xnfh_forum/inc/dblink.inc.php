<?php
$dbHost="127.0.0.1";
$dbUser="root";
$dbPass="root";
$dbName="cnfh";

if(!$link=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName)){
    die(mysqli_connect_error());
}
?>