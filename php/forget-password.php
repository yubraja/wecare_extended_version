<?php
<<<<<<< HEAD
echo "hi";
 if(isset($_POST['submit']) )
 {
   $email=$_POST['useremail'];
   $username=$_POST['username'];
   $pass=md5($_POST['userpassword']);
   $repass=md5($_POST['repassword'])
   echo $email;
   echo $username
   if($pass==$repass)
   {
     echo $username;
       $query="SELECT  username from patient where username='$username'  ";
       $result_query=mysqli_query($conn,$query);
     if(($result_query ->num_rows >0))
       {
        $sql1="UPDATE patient SET password='$pass' WHERE username='$username' AND email='$email'";
         $result1=mysqli_query($conn,$sql1);
         if($result1)
         {    
            $success["password"]="Password Changed Successfully";  
           header("Location:../first.php?success=".serialize($success));
         }
         else
         {
           $errors["password"]="email doesn't match!!";  
           header("Location:../first.php?errors=".serialize($errors));  
         }
        }
     else{
       $query2="SELECT  username from doctor where username='$username' ";
       $result_query2=mysqli_query($conn,$query2);
       if(!($result_query2 ->num_rows >0))
       {
         $sql3="UPDATE doctor SET password='$pass' WHERE username='$username' AND email='$email'";
         $result3=mysqli_query($conn,$sql3);
         if($result3){
         
           $success["password"]="Password Changed Successfully"                  
           header("Location:../doctor-report.php?success=".serialize($success));
         }
         else
         {
           $errors["email"]="Email doesn't match!";
           header("Location:../forget-password.html?error=".serialize($errors))
         }
       } 
     
      else{
       $errors['username']="username not found";
        header("Location:../forget-password.html?error=".serialize($errors))
        }
     }
    }  
      else{
        $errors['password']="password doesn't match";
        header("Location:../forget-password.html?errors".serialize($errors))
      }
}
=======

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
 
>>>>>>> f45b7871af96f5880ddb32fe39ee1622f2d029d2

 
 else{
   $errors['access']="Trying to access directly!!";
    header('Location:../first.php?error='.serialize($errors));
 
 }
 ?>