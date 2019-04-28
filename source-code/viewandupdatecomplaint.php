<?php
$login_user=$c_id="";
if(isset($_GET['q'])) {
    $login_user = $_GET['q'];
}
if(isset($_GET['c'])) {
    $c_id = $_GET['c'];
}

$statusErr = $b_notesErr = "";
$category = $subject = $details = $url = $social = $suspect = $dates = $area = $status = $priority = $b_notes = "";
$successMsg = $errorMsg = "";

//DB Connection
$servername= "localhost";
$usernamed = "root";
$passwords = "";
$dbname = "cybercrimedatabase";

$conn = new mysqli($servername, $usernamed, $passwords, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$c_id = test_input($c_id);
$sql = "SELECT * FROM complaint where c_id='$c_id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$category = $row["category"];
$subject = $row["subject"];
$details = $row["details"];
$url = $row["url"];
$social = $row["social_media"];
$suspect = $row["suspect"];
$dates = $row["datetime"];
$area = $row["area"];
$status = $row["status"];
$priority = $row["priority"];
$b_notes = $row["bureau_notes"];

$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["b_notes"])) {
    $b_notesErr = "Bureau notes are required";
  } else {
    $b_notes = test_input($_POST["b_notes"]);
  }
  
  if (!empty($_POST["priority"])) {
    $priority = test_input($_POST["priority"]);
  }
  
  if(isset($_POST['status']) && $_POST['status'] == '0') { 
    $statusErr = "Status is required";
  } else {
	  $status = test_input($_POST["status"]);
  }
}

if (!empty($_POST["b_notes"]) && isset($_POST['status']) && $_POST['status'] != '0')
{	
    $conn = new mysqli($servername, $usernamed, $passwords, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }
    
    $sql = "UPDATE complaint SET status = '$status', priority = '$priority', bureau_notes = '$b_notes' WHERE c_id = '$c_id'";
    if ($conn->query($sql) === TRUE) {
    $successMsg = "Complaint Update Successful. Click on BACK button.";
    } 
	else {
    $errorMsg = "Update Failed due to some Internal Error!!! Please try again.";
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
    <body id="mk">
        <div style="background-color: black;">
             <h1 style="margin-left:50px;font-size: 50px; color:whitesmoke;font:bold;">CYBER CRIME RECORDS MANAGEMENT SYSTEM</h1>  
        </div>
        <h2 style="margin-left:410px;font:bold;font-size:45px;">View and Update Complaint&nbsp;<?php echo $c_id; ?></h2>    
        <div style="margin-top: 10px;height: 400px; width: 800px; margin-right:470px; background-image: url('cover22.jpg'); background-size: 800px; margin-top: 80px;">
        <center>
		    <form method="post" action="#">
		    <table border="6.0" style="margin-left:480px;  height:200px;width:600px;color:black;font:white;"> 
				<tr><td >&nbsp;&nbsp;Complaint ID:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $c_id; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Category:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $category; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Subject:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $subject; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Details:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $details; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Website/URL:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $url; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Social Media:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $social; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Suspect Details:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $suspect; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Date:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $dates; ?></td></tr>
				<tr><td >&nbsp;&nbsp;Area:</td><td>&nbsp;&nbsp;&nbsp; <?php echo $area; ?></td></tr>
				<tr><td>&nbsp;&nbsp;Status:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $status; ?> <br> &nbsp;&nbsp;&nbsp;
				<select name="status">
					<option value="0">Please Select</option>
					<option>NEW</option>
					<option>INPROGRESS</option>
					<option>VERIFICATION</option>
					<option>CLOSED</option>
					<option>INVALID</option>
					</select><span class="error">* <?php echo $statusErr;?></span></td></tr>
				<tr><td>&nbsp;&nbsp;Priority:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $priority; ?> <br> &nbsp;&nbsp;&nbsp;
				<select name="priority">
					<option value="0">Please Select</option>
					<option>HIGH</option>
					<option>MEDIUM</option>
					<option>LOW</option>
					</select></td></tr>
				<tr><td >&nbsp;&nbsp;Bureau Notes:</td><td >&nbsp;&nbsp;&nbsp; 
				<textarea name="b_notes"><?php echo $b_notes;?></textarea><span class="error">* <?php echo $b_notesErr;?></span></td></tr>
				<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="submit" name="submit" value="Update"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Back" onclick="location.href='mycomplaints.php?q=<?php echo $login_user; ?>';" style="width:65px;"><br><span class="success"><?php echo $successMsg;?></span><span class="error"><?php echo $errorMsg;?></span></td></tr>
            </table>
			</form>
        </center>
        </div> 
    <div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: gray; color: white; text-align: center;">
	  <p>&copy;2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saksham Balyan | Saksham Phadke</p>
	</div>		
    </body>
</html>