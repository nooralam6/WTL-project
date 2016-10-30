<?php

//Database information 
$host="localhost";
$admin="root";
$passkey="root";
$db="pentest";

$conn=mysql_connect($host,$admin,$passkey);

if(!$conn){
    die("failed to connect network ".mysql_error);
}

mysql_select_db("pentest",$conn);
?>

