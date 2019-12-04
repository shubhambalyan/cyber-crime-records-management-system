<?php
$login_user="";
if(isset($_GET['q'])) {
    $login_user = $_GET['q'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cyber Crime Records Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        #a
        {
         
            margin-left: 40px; 
            background-image: url('sdf.png');
            height: 90px;
            width: 90px;
            background-size:90px;
        }
        #a:hover
        {
           
            margin-left: 40px; 
            height: 110px;
            width: 110px;
            background-size:110px;
        }
        #b
        {
             margin-top: 40px;
             margin-left: 80px; 
             background-image: url('bex.jpg');
             height: 90px; 
             width: 90px;
             background-size:90px; 
        }
        #b:hover
        {
            margin-top: 40px;
            margin-left: 80px; 
            height: 110px;
            width: 110px;
            background-size:110px;
        }
        #c
        {
          margin-top: 40px;
            margin-left: 120px; 
            background-image: url('ded.png');
            height: 90px;
            width: 90px;
            background-size:90px;
        }
        #c:hover
        {
            margin-top: 40px;
            margin-left: 120px; 
            height: 110px;
            width: 110px;
            background-size:110px;
        }
        #d
        {
             margin-top: 40px;
             margin-left: 160px;
             background-image: url('vhf.png');
             height: 90px;
             width: 90px;
             background-size:90px;
        }
        #d:hover
        {
         
            margin-top: 40px;
            margin-left: 160px; 
            height: 110px;
            width: 110px;
            background-size:110px;   
        }  
        </style>
    </head>
    <body>
        <div style="background-color: black;">
             <h1 style="margin-left:50px;font-size: 50px; color:whitesmoke;font:bold;">CYBER CRIME RECORDS MANAGEMENT SYSTEM</h1>  
        </div>
        <center> <h2 style="font-size:40px;">WELCOME &nbsp;<i><?php echo $login_user; ?></i></h2></center>
        <a href="userviewupdate.php?q=<?php echo $login_user; ?>"><div id="a"> </div></a>
        <p style="margin-top:-45px;font:bold; font-size: 25px; margin-left: 160px;"> VIEW AND UPDATE MY DETAILS</p>
        <a href="newcomplaint.php?q=<?php echo $login_user; ?>"><div id="b"> </div></a>
        <p style="margin-top:-45px;font:bold; font-size: 25px; margin-left:200px;">NEW COMPLAINT</p>
        <a href="checkstatus.php?q=<?php echo $login_user; ?>"><div id="c"> </div></a>
        <p style="margin-top:-45px;font:bold; font-size: 25px; margin-left:230px;">COMPLAINT STATUS</p>
        <a href="mainpage.html"><div id="d"> </div></a>
        <p style="margin-top:-45px;font:bold; font-size: 25px; margin-left: 280px;">LOGOUT</p>
	<div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: gray; color: white; text-align: center;">
	  <p>&copy;2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cyber Crime Records Management System</p>
	</div>
    </body>
</html>
