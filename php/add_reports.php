<?php
include "./configure.php";

echo "hello";

if (isset($_POST['submit'])) //if submit is clicked
{
    //getting all the data from the form and storing it in variables


    $pusername = $_POST['pusername'];
    $pemail = $_POST['pemail'];
    $witness = $_POST['witness'];
    $symptoms = $_POST['symptoms'];
    $disease = $_POST['disease'];
    $medicine = $_POST['medicine'];
    $reports = $_POST['reports'];
    $diet = $_POST['diet'];
    $visit_date = $_POST['visit_date'];
    $prescribed_by=$_SESSION['doctor'];
    echo $pusername;

    echo $prescribed_by;



    //to store date and time we set default timezone for kathmandu and then adding date and time stamp on thisssss

    date_default_timezone_set('Asia/katmandu');
    $date = date("Y-m-d H:i:s");


    //some task for images




    // $sql = "SELECT * FROM patient WHERE username='$pusername'";

    // $result = mysqli_query($conn, $sql);

    // if (($result->num_rows > 0)) {



    //checking if the valid username is provided or not
    $que = "SELECT * FROM patient WHERE username='$pusername'";
    $res = mysqli_query($conn, $que);

    while ($value = mysqli_fetch_array($res)) {
        if ($pusername == $value["username"])
            $flag = true;
    }



    if ($flag) {




        //some task for images



        $filename = $_FILES['photo']['name'];
        $filetmp = $_FILES['photo']['tmp_name'];
        $filesize = $_FILES['photo']['size'];
        $filetype = $_FILES['photo']['type'];

        $target_location = "/opt/lampp/htdocs/wecarenew/assets/user_images/" . $filename;
        $supported_extension = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'image/x-icon');




        if (in_array($filetype, $supported_extension)) {

            if (move_uploaded_file($filetmp, $target_location)) { //uploading file into our folder i.e assets/user_images

                $success["image"] = "Image uploaded successfully";
            } else {
                $errors["image"] = "Image uploading failed!";

                // header("Location: ../add-reports.php?error=".serialize($errors));//if something goes wrong we redirect to add_reports.php with error msg
            }


            //inserting data into database

            $sql1 = "INSERT INTO report (username,email,witness,symptom,description,medicines,reports,instruction,visit_date,photo,prescribed_by) VALUES ('$pusername','$pemail','$witness','$symptoms','$disease','$medicine','$reports','$diet','$visit_date','$filename','$prescribed_by')";

            // $result= mysqli_query($conn,$sql1);




            // Execute query


            // Now let's move the uploaded image into the folder: image


            $result = mysqli_query($conn, $sql1);


            if ($result) {

                echo "<script>alert('Wow! report is pushed.');</script>";
                $success["report"] = "Report pushed successfully";

                header("Location:../add-reports.php?success=" . serialize($success) . "errors=" . serialize($errors)); //if pushed then redirected to add_reports.php and success msg is provided 
            } else {
                echo "<script>alert('something unusual happend');</script>" . mysqli_error($conn);
                $errors["report"] = "Report pushing failed";
                header("Location:../add-reports.php?error=" . serialize($errors) . "&formdata=" . serialize($_POST)); //if not pushed then redirected to add_reports.php and error msg is provided 

            }
        }
    } else {
        echo "<script>alert('Username is not valid');</script>";
        $errors["username"] = "Username is not valid";
        header("Location:../add-reports.php?error=" . serialize($error) . "&formdata=" . serialize($_POST)); //if username is not valid then redirected to add_reports.php and error msg is provided
    }
} else {
    echo "<script>alert('You can't access this direcly ');</script>";
    header("Location:../first.php"); //if user tries to access this page directly then location is add_reports.php

}