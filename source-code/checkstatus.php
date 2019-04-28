<?php
$login_user="";
if(isset($_GET['q'])) {
    $login_user = $_GET['q'];
}

// define variables and set to empty values
$successMsg = $errorMsg = $status = $statusErr = "";
$statusresult = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["status"])) {
    $statusErr = "Complaint ID is required";
  } else {
    $status = test_input($_POST["status"]);
    // check if subject only contains letters and whitespace
    if (!preg_match("/^C[0-9]{3}$/",$status)) {
      $statusErr = "Complaint ID format is Invalid."; 
    }
  }
}

if (!empty($_POST["status"]) && $statusErr == "")
{
	$servername= "localhost";
    $usernamed = "root";
    $passwords = "";
    $dbname = "cybercrimedatabase";
	
    $conn = new mysqli($servername, $usernamed, $passwords, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }
    
    $sql = "SELECT * from complaint WHERE c_id = '$status'";
	$result=$conn->query($sql);
    if ($result->num_rows > 0) {
        $successMsg = "Please find the status of the given Complaint ID below";
		$statusresult = "<table border='2' style='column-width: 200px;'>
		<tr><th>Complaint ID</th><th>Category</th><th>Category Description</th><th>Bureau Location</th><th>Subject</th><th>Details</th><th>URL</th><th>Date</th><th>Crime Location</th><th>Status</th><th>Status Description</th><th>Priority</th><th>Bureau Notes</th>
		</tr>";
        while($row = $result->fetch_assoc()) 
		{
			$spec=$row['category'];
			$statusdesc=$row['status'];
			$sql2 = "SELECT * FROM specializations WHERE specialization = '$spec'";
			$sql3 = "SELECT * FROM status WHERE status = '$statusdesc'";
			$result2=$conn->query($sql2);
			$row2=$result2->fetch_assoc();
			$result3=$conn->query($sql3);
			$row3=$result3->fetch_assoc();
            $statusresult = $statusresult . "<tr><td>" . $row['c_id'] . "</td><td>" . $row['category'] . "</td><td>" . $row2["s_desc"]."</td><td>" . $row2["s_location"] . "</td><td>" . $row['subject'] . "</td><td>" . $row['details'] . "</td><td>". $row['url'] . "</td><td>" . $row['datetime'] . "</td><td>". $row['area'] . "</td><td>" . $row['status'] . "</td><td>" . $row3["description"] . "</td><td>" . $row['priority'] . "</td><td>" . $row['bureau_notes'] . "</td></tr>";
        }
		$statusresult = $statusresult . "</table>";
    } else {
        $errorMsg = "No record for the given complaint ID found. <br>Please try again with a valid complaint ID!!!";
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
		.error 
		{
			color: #FF0000;
		}
		.success 
		{
			color: #008000;
		}
		</style>
    </head>
    <body>
        <div style="background-color: black;">
            <h1 style="margin-left:50px;font-size: 50px; color:whitesmoke;font:bold;">CYBER CRIME RECORDS MANAGEMENT SYSTEM</h1>  
        </div>
        <h3  style="margin-left:510px;font:bold;font-size:45px;">Complaint Status</h3>
		<div style="margin-top: 10px;height: 300px; width: 800px; margin-right:470px; background-image: url('cover22.jpg'); background-size: 800px; margin-top: 80px;">
            <center>
				<form method="post" action="#">
				<table border="6.0" style="margin-left:480px; height:200px;width:600px;color:black;font:white;">
					<tr><td >&nbsp;&nbsp;Enter Complaint Id:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="status" placeholder="Format of ID: CXXX"><span class="error">* <?php echo $statusErr;?></span></td></tr>
					<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="submit" name="submit" value="Submit"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Back" onclick="location.href='userwelcome.php?q=<?php echo $login_user; ?>';" style="width:65px;"><br><span class="success"><?php echo $successMsg;?></span><span class="error"><?php echo $errorMsg;?></span></td></tr>
				</table>
				</form>
			</center>
		</div>
		<div id="statusresult"><?php echo $statusresult;?></div>
	<div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: gray; color: white; text-align: center;">
	  <p>&copy;2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saksham Balyan | Saksham Phadke</p>
	</div>
    </body>
</html>
