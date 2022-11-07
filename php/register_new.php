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
    $password = md5($_POST['userpassword']);
    $repassword = md5($_POST['repassword']);
    


    if($password==$repassword)
    {
        if($who=="patient")
        {
            $sql = "SELECT * FROM patient WHERE username='$username'";
            $resultSelect = mysqli_query($conn, $sql);
            if (!($resultSelect->num_rows > 0)) {

                 $sqlDetails="INSERT INTO patient (first_name,last_name,address,phone,email,gender,username,password) VALUES ('$fname','$lname','$address','$phone','$email','$gender','$username','$password')";
                 


                

                $resultDetails= mysqli_query($conn,$sqlDetails);

                if($resultDetails){
                    echo "<script>alert('New record created successfully');</script>";

					
					$_SESSION['patient'] = $username;
					$success["report"]="register completed";
                    header("Location: ./view_reports.php?success=".serialize($success));
                }
                else{
                    echo "<script>alert('Error: " . $sqlRegister . "<br>" . mysqli_error($conn)."');</script>";
                    
                    $errors["register"]="Register incomplete";
                    header("Location: ../register.html?errors=".serialize($errors));
                }
            }
            else{
                echo "<script>alert('Username already exists');</script>";
                $errors["register"]="Username already exists";
                header("Location: ../register.html?errors=".serialize($errors));
            }
        }

        else if($who="doctor")
        {
             
        
            $sql = "SELECT * FROM doctor WHERE username='$username'";
            $resultSelect = mysqli_query($conn, $sql);
            if (!($result->num_rows > 0)) {
                $sqlDetails="INSERT INTO doctor (first_name,last_name,address,phone,email,gender,username,password) VALUES ('$fname','$lname','$address','$phone','$email','$gender','$username','$password')";

                $resultDetails= mysqli_query($conn,$sqlDetails);
               
                if( $resultDetails){
                    echo "<script>alert('New record created successfully');</script>";

					
					$_SESSION['doctor'] = $username;
					$success["report"]="register completed";
                    header("Location: ../Medi-Report.html?success=".serialize($success));
                }
                else{
                    echo "<script>alert('Error: " . $sqlRegister . "<br>" . mysqli_error($conn)."');</script>";
                    
                    $errors["register"]="Register incomplete";
                    header("Location: ../register.html?errors=".serialize($errors));
                }
            }
            else{
                echo "<script>alert('Username already exists');</script>";
                $errors["register"]="Username already exists";
                header("Location: ../register.html?errors=".serialize($errors));
            }
        }
        else{
            echo "<script>alert('Please select a user type');</script>";
            $errors["register"]="Please select a user type";
            header("Location: ../register.html?errors=".serialize($errors));
        }
       
    }
    else{
        echo "<script>alert('Password does not match');</script>";
        $errors["register"]="Password does not match";
        header("Location: ../register.html?errors=".serialize($errors));
    }
       
        
    
}
else{
    echo "<script>alert('Please fill all the fields');</script>";
    $errors["register"]="Please fill all the fields";
    header("Location: ../register.html?errors=".serialize($errors));
}
?>