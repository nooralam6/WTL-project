<?php

require_once 'projectconnect.php';

$emailto=strtolower($_POST["email"]);
$subject="Your OTP number";
$message=rand(1111,9999);
$from="From:- Pentest@example.com";

mail($emailto,$subject,$message,$from);

?>