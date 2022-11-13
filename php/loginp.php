
<?php

include 'configure.php';

session_start();//session started



if (isset($_POST['submit'])) {
    
    $username=$_POST['pname'];
    $password=md5(($_POST['ppass']));
	
	$sql = "SELECT * FROM patient WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);


	if ($result->num_rows > 0) {
		
		
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION['patient'] = $row['username'];
		$sucess['correct']= "You are logged in";
		header("Location:../view-reports.php?success=".serialize($sucess));//if pass and username matches then directed towards another page




	}
	
	
	else {

		
		$errors['login'] = "Woops! Email or Password is Wrong.";
		header("Location: ../first.php?error=".serialize($errors));


	}
}
else{
	$errors['login'] = "You can't access directly!!.";
	header("Location: ../first.php?errors=".serialize($errors));
}
?>