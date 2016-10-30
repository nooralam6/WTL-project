<?php
    session_start();
$username=$_GET['id'];
if($_SESSION['hash'] == $username){
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link href="css/projnavcommom.css" type="text/css" rel="stylesheet">
        <link href="css/projadmin.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        
           <div id="nav">
            <nav>
            <ul>
                 <li><a href="projadminhtml.php" style="background:#2c3e50">Pentest</a></li>
                 <li><a>Admin Login</a></li>
                 <li class="oonn"><a href="index.php">SignOut</a></li>
            </ul>
            </nav>
            </div>
        <br>
        <br>
        
        <h1 style="text-align:center;"> Welcome admin upload videos</h1>
        <div>
           <form method="post" acton="projadmin.php" enctype="multipart/form-data">
               
               <input type="file" name="upload" id="upload" value="upload video"
                      required="required" placeholder="upload video">
               <br><br>
                 <input type="submit" id="submit" name="submit" class="form-control"
                     required="required" value="SUBMIT">
            </form>
        </div>
    </body>

</html>

<?php }
else{
    header("Location:http://localhost/WTL project/signout.php");
}
?>