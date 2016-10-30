<?php
    session_start();
//$username=$_GET['id'];
if($_SESSION['hash']){

?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <title>Login</title>
        
            <link href="css/projlogin.css" type="text/css" rel="stylesheet">
            <link href="css/projnavcommom.css" type="text/css" rel="stylesheet">
    </head>
    
<body>
    
    <?php 
        include 'projnavcomhtml.php'; 
        ?>
    <div>    
 <div id="BODY">

        <h1>Give us feedback!</h1>
        <h1 style="color:#f26b31">Need Help?</h1>   
            

        <form method="post" action="projlogin.php">
             <div id="form">    
            
                 <div class="right"> 
                 <label>Problem :-</label>
                 <input type="text" id="problem" name="problem" class="form-control" required="required">

                 </div>
                 
                <div class="right">
                    <label>Define it :-</label>
                    <textarea type="text" id="feedback" name="feedback" class="form-control" cols="35" rows="10" required="required">
                    </textarea>
                 </div>  
                 
                </div>  
                 
            <div>   
              <input type="submit" id="submit" name="submit" class="form-control"
                     value="Submit" >           
                
                 </div>

            
        </form>
        </div>
     <div>
            <footer>
                <spam>@copyright_Pentestbob</spam> 
            </footer>
        </div>
    </div>
<!--    <script src="js/projlogin.js"></script>-->
    </body>
</html>


<?php }
else{
    header("Location:http://localhost/WTL project/signout.php");
}
?>