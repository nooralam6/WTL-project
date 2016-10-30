<?php
    session_start();
//$username=$_GET['id'];
if($_SESSION['hash']){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contents</title>
<!--	<link href="https://fonts.googleapis.com/css?family=Arvo|Josefin+Sans|Lato" rel="stylesheet">-->
<!--       <link href="css/projhome.css" type="text/css" rel="stylesheet">-->
      <link href="css/projnavcommom.css" type="text/css" rel="stylesheet">
	<style>
        body{
                font-family: "Helvetica Neue","Roboto",Helvetica,Arial,sans-serif;
        }
        #body{
            padding:4em;
        }
        a{
			text-decoration: none;
		}
        #nbody{
            margin:2em;
            padding:1em;
            box-shadow:2px 2px 8px #888;
        }
	</style>
</head>
<body>
<?php 
        include 'projnavcomhtml.php'; 
        ?>
    
	<div id="body">
        <div id="nbody">
        <a href="content/dmitry.html">
		<h2>Dmitry</h2></a>
		<p>About Tool and its working</p>
        </div>
        
        <div id="nbody">
		<a href="content/dnsmap.html"><h2>DNSMAP</h2></a>
		<p>About Tool and its working</p>
        </div>
		
        <div id="nbody">
		<a href="content/zenmap.html"><h2>Zenmap</h2></a>
		<p>About Tool and its working	</p>
        </div>
		
        <div id="nbody">
		<a href="content/"><h2>Heading 1</h2></a>
		<p>About Content</p>
        </div>
        
        <div id="nbody">    
		<a href="content/"><h2>Heading 1</h2></a>
		<p>About Content</p>
        </div>
        
    <div id="nbody">
		<a href="content/"><h2>Heading 1</h2></a>
		<p>About Content</p>
	</div>
    </div>
</body>
</html>
<?php } else
{
    header("Location:http://localhost/WTL project/signout.php");
}
?>