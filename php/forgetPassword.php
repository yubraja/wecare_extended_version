<?php
include './configure.php';
if (isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['useremail'];
$pass=md5($_POST['userpassword']);
$repass=md5($_POST['repassword']);


if($pass==$repass){

     $query="SELECT  * from patient where username='$username'  AND email='$email' ";
      $result_query=mysqli_query($conn,$query);
     if(($result_query ->num_rows >0))
    {
        $sql1="UPDATE patient SET password='$pass' WHERE username='$username'";
         $result1=mysqli_query($conn,$sql1);
         if($reslt1){
             $success["password"]="Password Changed Successfully";  
            header("Location:../first.php?success=".serialize($success));
         
         }
         else{

           $errors["password"]="something wrong !!";  
           header("Location:../forget-password.html?errors=".serialize($errors));  
       
         }
    }

    else{
            $query2= "SELECT  * from doctor where username='$username' AND email='$email' ";
           $result_query2=mysqli_query($conn,$query2);
         if(($result_query2 ->num_rows >0))
        {

            $sql3="UPDATE doctor SET password='$pass' WHERE username='$username' ";
             $result3=mysqli_query($conn,$sql3);
             if($reslt3){
                 $success["password"]="Password Changed Successfully";  
                header("Location:../first.php?success=".serialize($success));
            
             }
             else{

               $errors["password"]="email doesn't match!!";  
               header("Location:../forget-password.html?errors=".serialize($errors));  
            
             }
        }
        else{
              $errors["password"]="username doesn't exists!!";  
               header("Location:../forget-password.html ?errors=".serialize($errors));  
        

        }

    }

  
}

else{
     $errors['password']="password doesn't match";
        header("Location:../forget-password.html?errors".serialize($errors))
  
}



}
else{
    $errors['access']="Trying to access directly!!";
    header('Location:../first.php?error='.serialize($errors));
 
}

 ?>