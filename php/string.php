<?php
$name="tom";
$str='$name,let\'s go';
var_dump($str);
?>

<hr />
<?php
$str="{$name},let's go";
var_dump($str);
?>
<?php
$str = <<<HTML
<span style="color:red;background-color:black;">This is DJF[$&'"] </ span>
HTML;
?>