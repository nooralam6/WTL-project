<?php
    session_start();
//$username=$_GET['id'];
if($_SESSION['hash']){
?>

<!DOCTYPE>
<html>
    <head>
        <title>Admin Page</title>
        <link href="css/projnavcommom.css" type="text/css" rel="stylesheet">
        <link href="css/projadmin.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        
        <iframe src="https://www.google.co.in/#q=hacking&tbm=nws"></iframe>
<!--        <iframe id="theFrame" src="http://www.youtube.com" style="width:100%;" ></iframe>-->
    </body>
    
<?php }
else{
    header("Location:http://localhost/WTL project/signout.php");
}
?>
