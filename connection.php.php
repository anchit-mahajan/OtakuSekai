       <?php
	$servername = "localhost";
	$uname = "root";
	$pword = "";
	$conn = new mysqli($servername, $uname, $pword);
	if($conn->connect_error)
	{
		die("Connection failed: ". $conn->connect_error);
	}
	$db_name = "aayush";
	mysqli_select_db($conn, $db_name);
	if(isset($_POST['signup']))
	{
		$FIRSTNAME = $_POST['FIRSTNAME'];
		$LASTNAME = $_POST['LASTNAME'];
		$EMAIL = $_POST['EMAIL'];
		$PASSWORD = $_POST['PASSWORD'];
		$CPASSWORD= $_POST['CPASSWORD'];
                $DOB= $_POST['DOB'];
$GENDER= $_POST['GENDER'];
		$query = "insert into user(FIRSTNAME, LASTNAME, EMAIL, PASSWORD, CPASSWORD,DOB,GENDER) values('$FIRSTNAME','$LASTNAME', '$EMAIL', '$PASSWORD', '$CPASSWORD','$DOB','$GENDER')";
		if(mysqli_query($conn,$query))
		{
			?>
	<script type="text/javascript">alert("Registration successful!");document.location.href="login.php"</script>
			<?php
		}
	}
	?>