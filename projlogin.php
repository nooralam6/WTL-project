<?php
session_start();

require_once 'projectconnect.php';

$username=strtolower($_POST["uname"]);
$_SESSION['username']=$username;
$hash=md5($username);
$_SESSION['hash']=$hash;
$password=md5($_POST["password"]);

$sql1=mysql_query("select username,password from membersecure where username='$username' and password='$password'");

$count=mysql_num_rows($sql1);
if($count==1){
    header("Location:http://localhost/WTL project/projhomehtml.php?id=$hash");
//        header("projhomehtml.php");

}
else
{
    echo "<script>alert('invalid! password or username')</script>"; 
//    header("Location:http://localhost/WTL project/projloginhtml.php");
    echo"<script>window.open('index.php','_self')</script>";

    }
?>