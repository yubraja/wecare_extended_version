<?php




include 'configure.php';

error_reporting(0);

session_start();

if (isset($_SESSION['patient']) or $_SESSION['doctor']) {
	header("Location: welocme.php");
}

if (isset($_POST['submit'])) {

	

	$who=$_POST['mediname'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address= $_POST['address'];
	$phone = $_POST['phone'];



	$email = $_POST['useremail'];

	$gender = $_POST['gender'];
	$username=$_POST['username'];

	$password = ($_POST['userpassword']);
	$repassword = ($_POST['repassword']);



	if ($password == $repassword) {

		if($who=="patient")
		{
			echo"hello22";
			$sql = "SELECT * FROM patient WHERE username='$username'";
			
			$result = mysqli_query($conn, $sql);
			
			if (!($result->num_rows > 0)) {
				echo"first tie";
				
				// $result= mysqli_query($conn,$sql1);
				
    
    			$sqlRegister = "INSERT INTO patient (first_name,last_name,address,phone,email,gender,username,password) VALUES ('$fname','$lname','$address','$phone','$email','$gender','$username','$password','$repassword')";
    
				echo "$fname";
				echo "$lname";
				echo "$address";
				echo "$phone";
				echo "$email";
				echo "$gender";
				echo "$username";
				echo "$password";
				echo "$repassword";
				echo "$sqlRegister";
				

        		$resultRegister= mysqli_query($conn,$sqlRegister) or die(mysqli_error($conn));
				echo"".$resultRegister;

				echo "second tie";
				
				
				if ($resultRegister)  {
					echo "<script>alert('New record created successfully');</script>";

					
					$_SESSION['patient'] = $username;
					$success["report"]="register completed";

                header("Location:./register_valid.php?success=".serialize($success));
				} 
				else {
				echo"<script>alert('Register incomplete');</script>".mysqli_error($conn);
                $errors["register"]="Register incomplete";
                header("Location:../Add-Reports.html?error=".serialize($errors)."&formdata=".serialize($_POST));
				}	
				
				
			}
			else {
				
				$errors['username']="Woops! your username is alreday taken!!!!!";
				header("Location:Register.php?error=".serialize($errors)."&formdata=".serialize($_POST));
			}
		}
		elseif($who=="doctor")
		{
			echo "hellloo3322223";
			$sql = "SELECT * FROM doctor WHERE username='$username'";
			echo"docotr type";
			$result = mysqli_query($conn, $sql);
			if (!($result->num_rows > 0)) {
				// $sql1 = "INSERT INTO doctor(first_name,last_name,address,phone,email,gender,username,password)
				// 		VALUES ('$fname', '$lname', '$address', '$phone', '$email', '$gender','$username', '$password')";
				$result1 = mysqli_query($conn, "INSERT INTO doctor(first_name,last_name,address,phone,email,gender,username,password)
				VALUES ('$fname', '$lname', '$address', '$phone', '$email', '$gender','$username', '$password')");
				echo "doctor type";
				if ($result1) {
					echo "<script>alert('Wow! User Registration Completed.');</script>";
					
					header("Location:first.php");
				}
				else{
					echo"<script>alert('something unusual happend');</script>";
					
				}
			}
			else {
				echo "<script>alert('Woops! your username is alreday taken!!!!!');</script>";
				header("Location:Register.php");
			}
		}
		else
		{
			echo"please select one button either doctor or patient";
		}
		echo "outside of password match"; 
	}
	echo"subit button is pressed";
}
echo "subit button is not pressed";

?>