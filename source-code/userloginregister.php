<?php
// define variables and set to empty values
$usernameErr = "";
$username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  if (empty($_POST["username"])) {
    $usernameErr = "Please enter username/password";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["password"])) {
    $usernameErr = "Please enter username/password";
  } 
}

if (!empty($_POST["username"]) && !empty($_POST["password"]))
{
	$servername= "localhost";
    $usernamed = "root";
    $password = "";
    $dbname = "cybercrimedatabase";
	
    $conn = new mysqli($servername, $usernamed, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }
    $uname=$_POST["username"];
    $pass=$_POST["password"];
    //echo $uname;
    //echo $pass;
    $sql = "SELECT password from user where username='$uname'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    if($row["password"]==$pass){
		$_SESSION['user_name']= $uname; 
        header("Location: userwelcome.php?q=$uname"); 
	}
    else {
		$usernameErr="Incorrect credentials!!! Please enter again.";
        //header("Location: userloginregister.php?q=1"); 
    }
	$conn->close();
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cyber Crime Records Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>	
            #mk
            {
                background:linear-gradient(rgba(211,211,211,0.3),rgba(211,211,211,0.3)),url('nvh.png'); 
                background-repeat: no-repeat;
                brightness:0.5;
				height: 880px;
				width: 1200px;
            }
			.error {color: #FF0000;}
		</style>
    </head>
    <body id="mk">
        <div style="height: 90px; background-color: black; font-family: inherit; color: wheat;font-size: 35px;"> 
			<center>CYBER CRIME RECORDS MANAGEMENT SYSYTEM</center>
		</div>
		<div><h2><a href="mainpage.php">Back</a></h2></div>
        <div style="height: 400px; width: 800px; margin-left: 270px; background-image: url('cover22.jpg'); background-size: 800px; margin-top: 80px;"></div>
        <div>
			<table border="2.0" style="color:white;width: 600px; height: 330px; margin-left: 330px;margin-top: -360px;"></table>
			<p style="height:30px;width:190px;margin-top: -340px;margin-left: 580px;">&nbsp;<input type="button" value="LOGIN" style="width:90px;"></p>
            <div><span class="error"></span></div>		
            <div style="float:right;margin-right:430px;margin-top:50px;">
                <center>
				    <form method="POST" action="#">
				    <table border="6.0" style=" height:200px;width:400px;color:gray;font:white;"> 
                        <tr><td>&nbsp;&nbsp;Username:</td><td >&nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Enter Your User Name" value="<?php echo $username;?>"></td></tr>
                        <tr><td>&nbsp;&nbsp;Password:</td><td >&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Enter Your Password"><br><span class="error"><?php echo $usernameErr;?></span></td></tr>
                        <tr><td>&nbsp;<input type="submit" name="submit" value="Submit" style="height:30px; width: 90px;"></td><td>&nbsp;&nbsp;<a href="userreg.php">New User? Register here!!!</a></td></tr> 
                    </table>   
					</form>
                </center>
            </div>          
        </div>  
    <div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: gray; color: white; text-align: center;">
	  <p>&copy;2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cyber Crime Records Management System</p>
	</div>		
    </body>
</html>
