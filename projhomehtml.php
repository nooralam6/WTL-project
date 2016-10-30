<?php
    session_start();
//$hash=$_GET['id'];
if($_SESSION['hash']){

?>
<!Doctype html>
<html lang="en">
    <head>
        <title>Pentest box</title>
        
       <link href="css/projhome.css" type="text/css" rel="stylesheet">
      <link href="css/projnavcommom.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        
<?php 
        include 'projnavcomhtml.php'; 
        ?>

        <div id="BODY">
            
        
            <div>
            
            <img id="pentest" class="pentest" src="/project/image/pentestlogo.jpeg">
            </div>
    
            <hr>    
            <div id="content">
                <h1 class="middle"><i><strong>Why another Pentesting distribution?</strong></i></h1>
            <p>PentestBox is not like any other linux pentesting distribution which either runs in a virtual machine or on a dual boot envrionment.</p>
            <p>It essentially provides all the security tools as a software package and lets you run them natively on Windows. This effectively eliminates the requirement of virtual machines or dualboot environments on windows.</p>
            <p>It was created because more than 50% of penetration testing distribution users use virtual machines to run those distributions on the Windows operating system.[ Source]</p>
                </div>
                <hr>
                
            <h1>Features</h1>
                
                     
                <div id="features">
            
                <div id="centered">
                <div class="extremeleft">
                   <img class="logo" src="/project/image/easytouse.png">
                    <h4>Easy to Use</h4>
                    <p>It is a simple command line utility.</p>
                </div>
                
                <div class="left">
                    <img class="logo" src="/project/image/simpledesign.jpeg">
                    <h4>Simple Design</h4>
                    <p>The traditional green on black terminal comes with a modern twist.</p>
                </div>
                
                <div class="right">
                    <img class="logo" src="/project/image/performance.png">
                    <h4>Performance</h4>
                    <p>PentestBox runs directly on host machines instead of relying on virtual machines, bringing obvious upgrades in performance.</p>
                </div>
                
                <div class="extremeright">
                    <img class="logo" src="/project/image/build.jpeg">
                    <h4>No Dependencies Required</h4>
                    <p>All the dependencies required by tools are inside PentestBox, so you can even run PentestBox on freshly installed windows without any hassle.</p>
                </div>
                    </div>
                    
                <div id="centered">
                <div class="extremeleft">
                    <img class="logo" src="/project/image/lessmemoryusage.png" >
                    <h4>Less Memory Usage</h4>
                    <p>PentestBox runs on the host machine without any need for a virtual machine. So it only need's 20 MB for launching compared to atleast 2GB of RAM need for running virtual machine distributions.</p>
                </div>
                
                 <div class="left">
                     <img class="logo" src="/project/image/lessdiskusage.png" >
                    <h4>Less Disk Usage</h4>
                    <p>It is very light on the Disk as well, it requires less than a third of what linux pentesting distro does.</p>
                </div>
                
                 <div class="right">
                     <img class="logo" src="/project/image/browsing.png" >
                    <h4>Inbuilt Browser</h4>
                    <p>PentestBox contains a version of Mozilla Firefox Browser with nearly all its security addons. To know the complete list of addons, please click here.</p>
                </div>
                
                 <div class="extremeright" >
                     <img class="logo" src="/project/image/updatefeature.jpg" >
                    <h4 >Update Feature</h4>
                    <p>It contains an update feature through which you can keep your tools updated. To know more about update feature, please click here.</p>
                </div>
                </div>
            
                
                <div id="centered">
                    
                <div id="nleft" class="left">
                    <img class="logo" src="/project/image/network.jpg" >
                    <h4 >Can be shared on Network</h4>
                    <p>Consider an environment where you wanted to use PentestBox on many computers at the office, lab, etc. Instead of installing PentestBox on each and every computer, you can just install it on one computer and share that folder as a drive to the other computers on the same network. To find out more about this feature, click here.</p>
                </div>
                
                <div id="nright" class="right">
                    <img class="logo" src="/project/image/browsing.png">
                    <h4 >32 Bit system supported</h4>
                    <p>Most users are not concerned about 32-bit support because they normally uses 64 bit systems. But this was introduced to turn low-end systems into a Pentesting Environment. Just to give an idea, i have tested PentestBox on this $200 machine, and it ran without a hitch.</p>
             </div>
        </div>      
            <hr> 
    </div>         
</div>
        
               <div>
            
            <footer>
                
                <spam>@copyright_Pentestbob</spam>
            
            </footer>
        </div>
        
        
    
    
    </body>
</html>



<?php }else{
    header("Location:http://localhost/WTL project/signout.php");
}
?>