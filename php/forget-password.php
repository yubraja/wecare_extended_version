<?php

if(isset($_POST['submit']) )
{
  $email=$_POST['useremail'];
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  
  $pass=md5($_POST['userpassword']);
  $repass=md5($_POST['repassword']);

 


  if($pass==$repass)
  {
    echo $username;
      $query="SELECT  username from patient where username='$username' ";
    $result_query=mysqli_query($conn,$query);
    if(($result_query ->num_rows >0))
    {
      $sql="UPDATE patient SET password='$pass' WHERE username='$username' AND email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      
      $success["password"]="Password Changed Successfully";
      



      header("Location:../first.php?success=".serialize($success));
    }
    else{
      $errors["password"]="Some error occurs during changing password";
      



      header("Location:../first.php?success=".serialize($errors));
    
    }
    }

    else
    {
      $erros["password"]="Password Changing Failed";
      header("Location:../forget-password.html?error=".serialize($errors));
      
    }
    }
    else{
      $errors['patient']="username not found";
      header('Location:../forget-password.html?error='.serialize($errors));
    }
    }




    
    else if($_SESSION['doctor']!=null)
    {

      $query="SELECT  username from doctor where username=$username ";
    $result_query=mysqli_query($conn,$query);
    if(!($result_query ->num_rows >0))
    {
      $sql="UPDATE doctor SET password='$pass' WHERE username='$username' AND email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      
      $success["password"]="Password Changed Successfully";
      



      header("Location:../doctor-report.php?success=".serialize($success));
    }
    else
    {
      $erros["password"]="Password Changing Failed";
      header("Location:../forget-password.html?error=".serialize($errors));
      
    }
    
    else{
      $errors['patient']="username not found";
      header('Location:../forget-password.html?error='.serialize($errors));
    }
    
    else{
      header("Location:../first.php");
    }
    
    





    }
  }
  else
  {
    $errors["password"]="Password Doesn't Match";
    header("Location:../forget-password.html?error=".serialize($errors));
  }
 
}

else{
  $errors['access']="Trying to access directly!!";
    header('Location:../first.php?error='.serialize($errors));
}

?>