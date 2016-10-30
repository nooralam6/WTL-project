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

        <h1>Already A Member!</h1>
        <h1 style="color:#f26b31">Sign In</h1>   
            

        <form method="POST" action="projlogin.php">
            
<!--            <fieldset>-->
                
             <div id="form">    
            
                 <div class="right"> 
              <input type="text" id="uname" name="uname" class="form-control" 
                     placeholder="Username" required="required">
                      <span id="Error1" class="Error"></span>
<!--                  <span id="valid1" class="valid"></span>-->
                 </div>
                 
                <div class="right">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                  <span id="Error2" class="Error"></span>
<!--                  <span id="valid2" class="valid"></span>-->
                 </div>  
                 
                </div>  
                 
            <div>   
              <input type="submit" id="submit" name="submit" class="form-control"
                     value="Sign In">           
                
                 
                 <p style="color:#f26b31"><a href="forgethtml.php">Forgot Password?</a></p>
                
                </div>
                <hr><br>
                <span>Not a pentest member? <a href="projregisterhtml.php">SignUp</a>.</span><br><br>
                <span>Forgot your username?<a href="forgethtml.php"> Click here</a>.</span>

<!--            </fieldset>-->
            
        </form>
    
        </div>
            
     <div>
            <footer>
                
                <spam>@copyright_Pentestbob</spam>
            
            </footer>
        </div>
    </div>
    <script src="js/projlogin.js"></script>
    </body>

</html>