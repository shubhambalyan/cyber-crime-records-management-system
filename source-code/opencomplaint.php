<?php
$login_user="";
if(isset($_GET['q'])) {
    $login_user = $_GET['q'];
}

$opencomplaints = $errorMsg = "";

$servername= "localhost";
$usernamed = "root";
$passwords = "";
$dbname = "cybercrimedatabase";

$conn = new mysqli($servername, $usernamed, $passwords, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
 }

$sql = "SELECT * FROM complaint WHERE status IN ('NEW','INPROGRESS','VERIFICATION')  ORDER BY datetime";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$opencomplaints = "<table border='2' style='column-width: 200px;'>
	<tr><th>Complaint ID</th><th>Category</th><th>Category Description</th><th>Bureau Location</th><th>Subject</th><th>Details</th><th>URL</th><th>Date</th><th>Crime Location</th><th>Social Media</th><th>Suspect Details</th><th>Status</th><th>Priority</th><th>Bureau Notes</th>
	</tr>";
	while($row = $result->fetch_assoc()) 
	{
		$spec=$row['category'];
		$sql2 = "SELECT * FROM specializations WHERE specialization = '$spec'";
		$result2=$conn->query($sql2);
		$row2=$result2->fetch_assoc();
		$opencomplaints = $opencomplaints . "<tr><td>" . $row['c_id'] . "</td><td>" . $row['category'] . "</td><td>" . $row2["s_desc"]."</td><td>" . $row2["s_location"] . "</td><td>" . $row['subject'] . "</td><td>" . $row['details'] . "</td><td>". $row['url'] . "</td><td>" . $row['datetime'] . "</td><td>". $row['area'] . "</td><td>" . $row['social_media'] . "</td><td>" . $row['suspect'] . "</td><td>" . $row["status"] . "</td><td>" . $row['priority'] . "</td><td>" . $row['bureau_notes'] . "</td></tr>";
	}
	$opencomplaints = $opencomplaints . "</table>";
} else {
	$errorMsg = "No Open Complaints in the system at this point!!!";
}
$conn->close();
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
		<div><h2><a href="policewelcome.php?q=<?php echo $login_user;?>">Back</a></h2></div>
        <h2 style="margin-left:460px;font:bold;font-size:45px;">All Open Complaints</h2>
		<br><br>
		<div><span class="error"><?php echo $errorMsg;?></span></div>
		<div id="opencomplaints"><?php echo $opencomplaints;?></div>
    <div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: gray; color: white; text-align: center;">
	  <p>&copy;2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cyber Crime Records Management System</p>
	</div>
    </body>
</html>
