<?php
$stu1 = array("tom",24,true,89);
for($i = 0;$i < count($stu1);$i++)
{
	echo $stu1[$i]."<br />";
}
$stu2 = array(
	'name' => "MADONGMEI",
	'age' => "123",
	'sex' => false,
	'grade' =>  90
);
foreach($stu2 as $key => $value){

	echo $key." => ".$value;
	echo "<br />";

}
?>