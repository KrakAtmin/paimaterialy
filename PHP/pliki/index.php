<?php 
$handle = file("abc.txt");
// fseek($handle, filesize("abc.txt"));
// fwrite($handle, " do you know da wae ");
// echo file_get_contents("abc.txt");
// unlink("abc.txt")
foreach ($handle as $line) echo $line;







?>