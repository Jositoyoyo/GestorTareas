<?php

$time = date("G:i:s");
$entry = "Información guardada a las $time.\n";
$file = "test.cron.txt";
$open = fopen($file,"a");
 
if ( $open ) {
	fwrite($open,$entry);
	fclose($open);
}
