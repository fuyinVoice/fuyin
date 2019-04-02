<?php
session_start();
ignore_user_abort();
$time=2;
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$on = 0;
if(!$on) die('process abort');
if(!isset($_SESSION["id"])) $_SESSION["id"] = 1;

/*
    function
*/
$m = $_SESSION["id"]."|";
//$file_pointer = fopen("test.txt","w");
$file_pointer = fopen("test.txt","a");
fwrite($file_pointer,$m);
fclose($file_pointer);

$_SESSION["id"] =$_SESSION["id"] + 1;

sleep($time);
@file_get_contents($url);

?>
