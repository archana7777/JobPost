<?php
session_start();
try
{
$dsn = "mysql:dbname=jobpost;host=localhost";
$uname = "root";
$pwd = "";
$conn = new PDO($dsn,$uname,$pwd,array(PDO::ATTR_AUTOCOMMIT=>false));
}
catch(Exception $ee)
{
die('could not connect'.$ee->getMessage());
}
?>