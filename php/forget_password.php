

<?php
session_start();
if(isset($_POST['forget']) )
{
  $email=$_POST['useremail'];
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  
  $pass=md5($_POST['userpassword']);
  $repass=md5($_POST['repassword']);

  if($pass==$repass)
  {
    if($_SESSION['patient']!=null)
    {
      $query="SELECT  username from patient where username=$username ";
    $result_query=mysqli_query($conn,$query);
    if(!($result_query ->num_rows >0))
    {
      $sql="UPDATE patient SET password='$pass' WHERE username='$username' AND email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      
      $success["password"]="Password Changed Successfully";
      



      header("Location:../view-reports.php?success=".seialize($success));
    }
    else
    {
      $erros["password"]="Password Changing Failed";
      header("Location:../forget_password.html?error=".serialize($errors));
      
    }
    }
    else{
      $errors['patient']="username not found";
      header('Location:../forget_password.html?error='.serialize($errors));
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
      



      header("Location:../Medi-Report.html?success=".seialize($success));
    }
    else
    {
      $erros["password"]="Password Changing Failed";
      header("Location:../forget_password.html?error=".serialize($errors));
      
    }
    }
    else{
      $errors['patient']="username not found";
      header('Location:../forget_password.html?error='.serialize($errors));
    }
    }
    else{
      header("Location:../first.html");
    }
    
    





  }
  else
  {
    $errors["password"]="Password Doesn't Match";
    header("Location:../forget_password.html?error=".serialize($errors));
  }
 
}
else{
    echo"<script>alert('You have no permission here!!')</script>";
    header('Location:../first.html');
}
?>