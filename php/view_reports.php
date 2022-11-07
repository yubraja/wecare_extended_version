<?php




include"configure.php";


session_start();//session started

$username=$_SESSION['patient'];
echo $username;

$sql = "SELECT * FROM report WHERE username='$username' ";
$result = mysqli_query($conn, $sql);
if($result)
{
$row = mysqli_fetch_assoc($result);

while($row)
{



    // echo"<tr>";
    // echo"<td>".$row['username']."</td>";
    // echo"<td>".$row['email']."</td>";
    echo"<td>".$row['witness']."</td>";
    echo"<td>".$row['symptom']."</td>";
    echo"<td>".$row['description']."</td>";
    echo"<td>".$row['medicines']."</td>";
    echo"<td>".$row['reports']."</td>";
    echo"<td>".$row['instruction']."</td>";
    echo"<td>".$row['visit_date']."</td>";
    echo"<td>".$row['photo']."</td>";
    echo"<td>".$row['val']."</td>";
    echo"</tr>";
    header("Location:.../view-reports.html?data".serialize($row));  



    
}


}
else{
    $errors['reports']="Empty Reports!!!";
    header("Location: ../view-reports.html?error=".serialize($errors));
}






?>
