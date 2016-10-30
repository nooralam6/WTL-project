<?php

require_once 'projectconnect.php';


$name=$_POST["fname"];
$username=$_POST["uname"];
$password=md5($_POST["password"]);
$emailid=$_POST["email"];
$mobileno=$_POST["mobile"];
$confpass=md5($_POST["cpass"]);

if($password==$confpass)
{
$sql1=mysql_query("insert into membersecure (username, password) values ('$username','$password')");
if(!$sql1){
     echo "<script>alert('username already exist')</script>"; 
    echo"<script>window.open('projregisterhtml.php','_self')</script>";   
}else{
    $sql2=mysql_query("insert into membersinfo (name,username,mobileno,emailid) values ('$name','$username','$mobileno','$emailid')");
}
    
if(!$sql1 && !sql2){
     echo "<script>alert('Something went wrong Please register again')</script>"; 
    echo"<script>window.open('projregisterhtml.php','_self')</script>";
}else{
    header("Location:http://localhost/WTL project/projhomehtml.php"); //give path to move into next page
}
    
}else{
//   password does not matched with confirm password register again
    echo "<script>alert('PASSWORD does not matched with CONFIRM PASSWORD')</script>"; 
//        header("Location:http://localhost/WTL project/projregisterhtml.php");
      echo"<script>window.open('projregisterhtml.php','_self')</script>";
  
}

?>