<?php




include"configure.php";


session_start();//session started

$username=$_SESSION['patient'];
$username=amrita;

$sql = "SELECT * FROM report WHERE username='$username' ORDER BY val DESC";
$result = mysqli_query($conn, $sql);
if($result)
{
$row = mysqli_fetch_assoc($result);

while($row)
{
    echo"<tr>";
    echo"<th> UserName</th>";
    echo"<th> Email</th>";
    echo"<th> Witness</th>";
    echo"<th> Symptom</th>";
    echo"<th> Description</th>";
    echo"<th> Medicines</th>";
    echo"<th> Necessary_Reports</th>";
    echo"<th> Instrction</th>";
    echo"<th> Visit_date</th>";
    echo"<th> Reports</th>";
    echo"<th> Time</th>";
    echo"</tr>";


    echo"<tr>";
    echo"<td>".$row['username']."</td>";
    echo"<td>".$row['email']."</td>";
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



    
}


}
else{
    $errors['reports']="Empty Reports!!!";
    header("Location: ../view-reports.html?error=".serialize($errors));
}






?>
