
<?php

include 'configure.php';

session_start();//session started



if (isset($_POST['submit'])) {
    
    $username=$_POST['pname'];
    $password=md5(($_POST['ppass']));
	echo $username;
	echo $password;

	$sql = "SELECT * FROM patient WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);


	if ($result->num_rows > 0) {
		
		
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION['patient'] = $row['username'];
		$sucess['correct']= "You are logged in";
		header("Location:./view_reports.php?success=".serialize($sucess));//if pass and username matches then directed towards another page




	}
	
	
	else {

		
		$errors['login'] = "Woops! Email or Password is Wrong.";
		header("Location: ../first.html?error=".serialize($errors));


	}
}
?>