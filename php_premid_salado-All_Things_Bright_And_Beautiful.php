
<?php
$myfile = fopen('all_things_bright_and_beautiful.txt', "r")  or die("Unable to open file!");

$content = fread($myfile, filesize('all_things_bright_and_beautiful.txt')) or die("Unable to open file!");
$lines = explode( "\n",$content);
fclose($myfile);
echo '<pre>',var_dump($lines), '<pre>';



?>
