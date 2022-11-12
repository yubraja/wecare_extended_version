<?php
include './configure.php';


$id=$_GET['id'];






     $sql = "DELETE FROM report WHERE id='$id'";
     $resultDelete = mysqli_query($conn, $sql);


     if($resultDelete){
        $success['delete']="Successfully Deleted!!";
        header("Location:../doctor-report.php?success=".serialize($success));
     }
     else{
         $error['delete']="Error during delete!!";
        header("Location:../doctor-report.php?error=".serialize($error));

     }

?>