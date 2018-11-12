<?php
session_start();
$_SESSION["log"]=1;

$so1 = $_POST["so1"];
$so2 = $_POST["so2"];
echo $so1 + $so2;

sleep(5);

?>
