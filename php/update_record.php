<?php
include './configure.php';

session_start();


    $id=$_POST['id'];
    $pusername=$_POST['pusername'];

    $pemail = $_POST['pemail'];
    $witness = $_POST['witness'];
    $symptoms = $_POST['symptoms'];
    $disease = $_POST['disease'];
    $medicine = $_POST['medicine'];
    $reports = $_POST['reports'];
    $diet = $_POST['diet'];
    $visit_date = $_POST['visit_date'];
    $filename = $_FILES['photo']['name'];
   

    //to store date and time we set default timezone for kathmandu and then adding date and time stamp on thisssss

    date_default_timezone_set('Asia/katmandu');
    $date = date("Y-m-d H:i:s");


    //some task for images

if($visit_date==null)
{


    $sql = "SELECT * FROM report WHERE username='$pusername' and id='$id' ";
    

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    


    $visit_date=$row['visit_date'];


}

if($filename==null)
{

    $sql = "SELECT * FROM report WHERE username='$pusername' and id='$id' ";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $filename=$row['photo'];



}
    // if (($result->num_rows > 0)) {





        //some task for images
else{


        $filename = $_FILES['photo']['name'];
        $filetmp = $_FILES['photo']['tmp_name'];
        $filesize = $_FILES['photo']['size'];
        $filetype = $_FILES['photo']['type'];

        $target_location = "/opt/lampp/htdocs/wecarenew/assets/user_images/" . $filename;
        $supported_extension = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'image/x-icon');


      // echo $filename;

        if (in_array($filetype, $supported_extension)) {

            if (move_uploaded_file($filetmp, $target_location)) { 
                $success["image"] = "Image uploaded successfully";
            } else {
                $errors["image"] = "Image uploading failed!";

                
            }
         }
         
     }

          
            $sql1 = "UPDATE  report SET email='$pemail',witness='$witness',symptom='$symptoms',description='$disease',medicines='$medicine',reports='$reports',instruction='$diet',visit_date='$visit_date',photo='$filename'  where id='$id'";

            $result = mysqli_query($conn, $sql1);


            if ($result) {

                echo "<script>alert('Wow! report is update.');</script>";
                $success["report"] = "Report updated successfully";

                header("Location:../doctor-report.php?success=" . serialize($success) . "errors=" . serialize($errors)); 
            } else {
                echo "<script>alert('something unusual happend');</script>" . mysqli_error($conn);
                $errors["report"] = "Report updatingg failed";
                header("Location:../edit.php?error=" . serialize($errors) ); 

            
               }
     
    


// }

   //   }




?>