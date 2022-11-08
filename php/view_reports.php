<?php




include"./configure.php";


session_start();//session started

$username=$_SESSION['patient'];
echo $username;
$username="yubis";

$sql = "SELECT * FROM report WHERE username='$username' ";
$result = mysqli_query($conn, $sql);
if($result)
{


while($row=mysqli_fetch_assoc($result))
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
    // header("Location:./view-reports.php?data".serialize($row));  



    
}


}
else{
    $errors['reports']="Empty Reports!!!";
    header("Location: ../view-reports.html?error=".serialize($errors));
}






?>
odal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Medical Report No 1 </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card mb-3">
                  <img src="./images/born-baby.jpg" height="600px" class="card-img-top" alt="...">
                  <div class="card-body">';

        
                    <!-- <h5 class="card-title">Future Engineer</h5>
                    <p class="card-text">“The difference between ordinary and extraordinary is that little extra And He
                      is the one " --WeCare</p> -->
                    

                    <!-- all reports here  -->

                    <form>
                      <div class="form-group mt-3 ">
                        <label for="exampleDataList" class="form-label">Patients's Username</label>
                        <input class="form-control border border-2 border-success" list="datalistOptions"
                          id="exampleDataList" name="dname" placeholder="Type Username to search..." readonly>



                        <label for="exampleFormControlInput1">Patients's Email address</label>
                        <input type="email" class="form-control border border-2 border-success"
                          id="exampleFormControlInput1" placeholder="name@example.com" readonly>
                      </div>
                      <div class="form-group mt-3" aria-readonly="readonly">
                        <label for="exampleFormControlSelect1">Witness(साक्षी) if Any </label>
                        <select class="form-control border border-2 border-success" id="exampleFormControlSelect1"
                          readonly>
                          <option readonly>No-one</option>
                          <option readonly>Father</option>
                          <option readonly>Mother</option>
                          <option readonly>Sister</option>
                          <option readonly>Brother</option>
                          <option readonly>Friends</option>
                          <option readonly>Staff</option>
                          <option readonly>Other</option>
                        </select>
                      </div>

                      <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1">Symptoms Of The Patient</label>
                        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                          rows="5" readonly></textarea>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1">Description Of The Disease</label>
                        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                          rows="7" readonly></textarea>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1">Description Of Medicines</label>
                        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                          rows="5" readonly></textarea>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1">Necessary Medical Reports</label>
                        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                          rows="5" readonly></textarea>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1">Instruction Regarding Diet</label>
                        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                          rows="5" readonly></textarea>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">Next Visit Date</label>
                        <input type="datetime-local" class="form-control border border-2 border-success"
                          id="exampleFormControlInput1" placeholder="dd/mm/yyyy" readonly>
                      </div>

                    </form>

                    <!-- all reports end here  -->

                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Understood</button>
              </div>
            </div>
          </div>
        </div>