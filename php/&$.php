<?php
$a  = 10;
$b = $a;
$b = $b + 1;
echo $a;
echo "|";
echo $b;
echo "<hr />";
$c = &$a;
$c = $c + 1;
echo "|";
echo $c;
echo "<hr />";
?>