<?php
$file = fopen("C:\Users\Anubhav Gupta\Desktop\mandi.csv","r");
while(! feof($file))
  {
$x = fgetcsv($file);
	// print_r($x[1]);
	if($x[1]=='Khurda')
		print_r($x);
	// var_dump($x);
	}
fclose($file);
?>