
<?php

include 'configure.php';

session_start();//session started 



if (isset($_SESSION['doctor'])) {
    
    header("Location:view-reports.html");//if session is already estblished then directed to one page
}

if (isset($_POST['submit'])) {
    
    $username=$_POST['dname'];
    $password=($_POST['dpass']);

	$sql = "SELECT * FROM doctor_login WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['doctor'] = $row['username'];

		header("Location:view-reports.html");//if username and password matches then directed towards another page
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		$errors['login'] = "Woops! Email or Password is Wrong.";

        header("Location: ../login.html?error=".serialize($errors));
	}
}
?>