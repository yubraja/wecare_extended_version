
<?php

include 'configure.php';

session_start();//session started


if (isset($_SESSION['patient'])) {//checking session already exists or not?
    
    header("Location: ../view_reports.html");
}

if (isset($_POST['submit'])) {
    
    $username=$_POST['pname'];
    $password=md5(($_POST['ppass']));

	$sql = "SELECT * FROM patient WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);


	if ($result->num_rows > 0) {
		
		
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION['patient'] = $row['username'];
		header("Location: welcome.php");//if pass and username matches then directed towards another page




	}
	
	
	else {

		
		$errors['login'] = "Woops! Email or Password is Wrong.";
		header("Location: ../login.html?error=".serialize($errors));


	}
}
?>