<!-- this works if you have a database called login -->
<!-- a table called login, and column headers uname and pword -->
<!-- make sure your headers are of type VRCHAR when you set them up -->

<html>
<body>
<?php
 $nameErr = $emailErr = genderErr = $websiteErr = "";
 $Newname = $email = $gender = $comment = $website = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
		if (empty($_POST["NewName"])) {
			$nameErr = "Name Is required"
		} else {
			$name = test_input($_POST["name"]);
		}
		
		if (empty($_POST["email"]) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
		}
		if (empty($_POST["Newwebsite"])) {
			$website = "";
		}else {
			$Newwebsite = test_input($_POST["Newwebsite]);
		}
		if (empty($_POST["Gender"])) {
			$genderErr = "Gender is required";
		
		}else {
			$Gender = test_input($_POST("Gender");
		}
	}
	$uname = $_POST["NewName"];
	echo "Hello, ".$uname;

	$pword = $_POST["NewPassword"];
	echo "your pword is, ".$pword;
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO login(uname, pword) 
VALUES ('$uname', '$pword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
?>
</body>
</html>
