<?php


$test = "hello"; // scalar variable
$myStuff = array('test', 'test2', 'test3,');
$myStuff[] = 'test4';
print_r($myStuff . "\n"); // 'test', 'test2', 'test3,' ,'test4'

if($test !== "goodBye")
{
	print('not hello') ."\n";
}

for($i=0; $i < count(myStuff) ; $i++)
{
	echo 'item :'. $myStuff[$i] . "\n";
}

?>