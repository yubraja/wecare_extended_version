<?php



include 'configure.php';
session_start();

if(isset($_POST['submit'])){

    $who=$_POST['mediname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address= $_POST['address'];
    $phone = $_POST['phone'];
    $email= $_POST['useremail'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password = ($_POST['userpassword']);
    $repassword = ($_POST['repassword']);

    echo "$who<br>";
    echo"$fname<br>";
    echo"$lname<br>";
    echo"$address<br>";
    echo"$phone<br>";
    echo"$email<br>";
    echo"$gender<br>";
    echo"$username<br>";
    echo"$password<br>";
    echo"$repassword<br>";


    if($password==$repassword)
    {
        if($who=="patient")
        {
            $sql = "SELECT * FROM patient_login WHERE username='$username'";
            $resultSelect = mysqli_query($conn, $sql);
            if (!($resultSelect->num_rows > 0)) {


                $sqlRegister = "INSERT INTO patient_login (username,password) VALUES ('$username','$password')";
                
                $resultRegister= mysqli_query($conn,$sqlRegister);

                 $sqlDetails="INSERT INTO patient_details (first_name,last_name,address,phone,email,gender,username) VALUES ('$fname','$lname','$address','$phone','$email','$gender','$username')";
                 


                echo"third";
                

                $resultDetails= mysqli_query($conn,$sqlDetails);
                echo"fourth";

                if($resultRegister && $resultDetails){
                    echo "<script>alert('New record created successfully');</script>";

					
					$_SESSION['patient'] = $username;
					$success["report"]="register completed";
                    header("Location: register_new.php?success=".serialize($success));
                }
                else{
                    echo "<script>alert('Error: " . $sqlRegister . "<br>" . mysqli_error($conn)."');</script>";
                    
                    $errors["register"]="Register incomplete";
                    header("Location: register_new.php?errors=".serialize($errors));
                }
            }
            else{
                echo "<script>alert('Username already exists');</script>";
                $errors["register"]="Username already exists";
                header("Location: register_new.php?errors=".serialize($errors));
            }
        }

        else if($who="doctor")
        {
             
        
            $sql = "SELECT * FROM doctor_login WHERE username='$username'";
            $resultSelect = mysqli_query($conn, $sql);
            if (!($result->num_rows > 0)) {
                $sqlRegister = "INSERT INTO doctor_login (username,password) VALUES ('$username','$password')";
                $sqlDetails="INSERT INTO doctor_details (first_name,last_name,address,phone,email,gender,username) VALUES ('$fname','$lname','$address','$phone','$email','$gender','$username')";

                $resultRegister= mysqli_query($conn,$sqlRegister);
                $resultDetails= mysqli_query($conn,$sqlDetails);
                if($resultRegister && !$resultDetails){
                    echo "<script>alert('half record is inserted');</script>";
                }
                {

                }

                if($resultRegister && $resultDetails){
                    echo "<script>alert('New record created successfully');</script>";

					
					$_SESSION['doctor'] = $username;
					$success["report"]="register completed";
                    header("Location: register_new.php?success=".serialize($success));
                }
                else{
                    echo "<script>alert('Error: " . $sqlRegister . "<br>" . mysqli_error($conn)."');</script>";
                    
                    $errors["register"]="Register incomplete";
                    header("Location: register_new.php?errors=".serialize($errors));
                }
            }
            else{
                echo "<script>alert('Username already exists');</script>";
                $errors["register"]="Username already exists";
                header("Location: register_new.php?errors=".serialize($errors));
            }
        }
        else{
            echo "<script>alert('Please select a user type');</script>";
            $errors["register"]="Please select a user type";
            header("Location: register_new.php?errors=".serialize($errors));
        }
       
    }
    else{
        echo "<script>alert('Password does not match');</script>";
        $errors["register"]="Password does not match";
        header("Location: register_new.php?errors=".serialize($errors));
    }
       
        
    
}
else{
    echo "<script>alert('Please fill all the fields');</script>";
    $errors["register"]="Please fill all the fields";
    header("Location: register_new.php?errors=".serialize($errors));
}
?>