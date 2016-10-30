<!DOCTYPE html>
<html lang="en">
    <head>
            <title>Register Free</title>
        
            <link href="css/projregister.css" type="text/css" rel="stylesheet">
            <link href="css/projnavcommom.css" type="text/css" rel="stylesheet">
    </head>
    
<body>
        <?php 
//        include 'projnavcomhtml.php'; 
        ?>
    
    <header>
        
        <div id="nav">
            <nav>
        <ul>
            <li><a href="projadminhtml.php">Pentest</a></li>
             <li class="" style="float:right"><a  href="index.php">SignIn</a></li>
            <li class="oonn" style="float:right" ><a href="projregisterhtml.php">SignUp</a></li>
<!--             <li class="" style="float:right"><a href="forgethtml.php">RecoverAcc</a></li>-->
        </ul>
                
            </nav>
            </div>
        
        </header>

        <div>
            
            
        <div id="BODY">
        <div id="heads">

               <h1>SignIn with Pentest and enjoy learning new tools</h1><hr>
                
                <h3>Member's Benefits:</h3>
                <ul>
                    <li>Limited ads when logged in</li>
                    <li>Unlimited downloads</li>
                    <li>Access to post on forums and comments</li>
                    <li>Free product giveaways and technology updates</li>
               </ul>

            </div>
    <hr>
                <h2>Account Info</h2>
                <p>After completing the registration, an email will be sent to verify your address.</p>
                <p>Fields containing * are required</p>
            

        <h1 style="color:#f26b31">Sign Up</h1>   
            
      
        
        <form name="myform" method="post" action="projregister.php">
            
            <fieldset>
                
             <div id="form">    
              
             <div class="right">
              <input type="text" id="fname" name="fname" class="form-control"
                     placeholder="Name" required="required">
                 <span id="default1" class="default">*Your name is required </span>
                 <span id="Error1" class="Error"></span>
                  <span id="valid1" class="valid"></span>
              </div>
                 <div class="right"> 
              <input type="text" id="uname" name="uname" class="form-control" 
                     placeholder="Username" required="required">
                     <span id="default2" class="default">*Unique username is required</span>
                       <span id="Error2" class="Error"></span>
                       <span id="valid2" class="valid"></span>
                 </div>
                 
                <div class="right">
                    <input type="password" id="password" name="password" class="form-control" placeholder="New password" required="required">
                    <span id="default3" class="default">*Minimum 8 charcters are required</span>  
                    <span id="Error3" class="Error"></span>
                      <span id="valid3" class="valid"></span>
                 </div>     
                 
                 <div class="right">
                       <input type="password" id="cpass" name="cpass" class="form-control" placeholder="Confirm new password" required="required">
                 <span id="default4" class="default">*Type same as password</span>
                     <span id="Error4" class="Error"></span>
                       <span id="valid4" class="valid"></span>
                 </div>
                 
              <div class="right">
            <input type="email" id="email" name="email" class="form-control" 
                   placeholder="Enter email-id"    required="required">
                  <span id="default5"  class="default">*Give ur personal id</span>
                  <span id="Error5" class="Error"></span>
                    <span id="valid5" class="valid"></span>
                 </div>
                 
              <div class="right">
              <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile number" required="required">
                  <span id="default6" class="default">*Give ur personal number</span>
                    <span id="Error6" class="Error"></span>
                    <span id="valid6" class="valid"></span>
            </div>
                </div>         
                 
            <div>   
              <input type="submit" id="submit" name="submit" class="form-control"
                     required="required" value="REGISTER -->" >           
                </div>
                 <br>
                 <span style="margin-left:1.9em">Already a Pentest member?<a href="index.php"> Login</a></span>
                
                
            </fieldset>
            
        </form>
    
        </div>
            
            <footer>
                <spam>@copyright_Pentestbob</spam>
            </footer>
            
        </div>
        <script src="js/projregister.js"></script>

    </body>

</html>