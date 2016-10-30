<!DOCTYPE html>
<html lang="en">
    <head>
            <title>Register Free</title>
        
            <link href="css/projlogin.css" type="text/css" rel="stylesheet">
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
                <li><a>Pentest</a></li>
                <li class="oonn" style="float:right"><a  href="index.php">SignIn</a></li>
                <li class="" style="float:right" ><a href="projregisterhtml.php">SignUp</a></li>
            </ul>
            </nav>
            </div>
        </header>    
    
     <div id="BODY">    

        <h1>Lost Password ?</h1>
         <p>If you have forgotten your password, you can use this form to reset your password. You will receive an email with instructions. If you have forgotten your username, enter your email below and both your username and a password will be reset.</p>   
         <br><br>         

        <form method="POST" action="projforget.php">
            
             <div id="form">    
            
            <div class="right"> 
              <input type="email" id="email" name="email" class="form-control" 
                     placeholder="Enter your email id" required="required">
                <span id="Error1" class="Error"></span>
             </div>
<!--                 <br>-->
            <div>   
              <input type="submit" id="submit" name="submit" class="form-control"
                     value="Reset">           
                </div>
                 <br>
                 <hr>
                 <br>
                <span>Already a pentest member?<a href="index.php"> SignIn</a></span>
                <br><br>
                <span>Not a pentest member<a href="projregisterhtml.php"> SignUp</a></span>
            </div>
        </form>
        </div>
            
     <div>
            <footer>    
                <spam>@copyright_Pentestbob</spam>
            </footer>
        </div>
    
    <script>
    
    function checkEmail(e){
    var element=e.target;
    var mssg=document.getElementById('Error1');
    if(element.value.length>100){
        element.value="";
         mssg.textContent="*Too big email id.";
        return false;
}
    if(/[^.@_a-zA-Z0-9]/.test(element.value)){
      element.value="";
         mssg.textContent="*Invalid! charcter used.";
        return false;
    }
     if(!/[@]/.test(element.value)){
          element.value="";
          mssg.textContent="* '@' missing.";
        return false;
     }
     if(!/[.]/.test(element.value)){
          element.value="";
          mssg.textContent="*DOT . missing.";
        return false;
     }
      if(!/[a-zA-Z0-9]/.test(element.value)){
          element.value="";
          mssg.textContent="*Alphabets and numbers are missing.";
        return false;
     }
        mssg.textContent="";
//     mssg.textContent="*Correct Format of email has been used.";
    return true;   
}
        
        var email = document.getElementById("email");
        
        email.addEventListener('blur', checkEmail ,false);
    </script>
    </body>

</html>