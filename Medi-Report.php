
<script>
    var report_id=0;

    </script>

<?php




include './php/configure.php';

session_start();//session started

if($_SESSION['p_report'])
{
    $username=$_SESSION['p_report'];
}

else if (isset($_POST['submit'])) {

    




$username = $_POST['username'];
$_SESSION['p_report']=$username;

}
else{
    header("Location:./first.html?error=direct access is not permitted");
}

$sql = "SELECT * FROM report WHERE username='$username' ";
$result = mysqli_query($conn, $sql);



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeCare-DoctorMedi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78e6212ab3.js" crossorigin="anonymous"></script>
    <!-- favicon ko link  -->
    <link rel="shortcut icon" href="./images/logooo.png" type="image/x-icon">

    <style>
    .nav-link .px-2 .link-light .fs-5 .ddd {
        color: purple !important;
    }

    main {
      background-image: url(./images/hospital.jpg);
      /* background-repeat: no-repeat; */
      background-size: contain;
      margin-top: 0px;

    }

    .album {
        background-color: rgb(94, 93, 88);
    }
    </style>
</head>

<body>

    <header class="p-3 border-bottom bg-success">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <a class="navbar-brand fw-bold fs-3" href="#">We<i class="fa-solid fa-circle-nodes"></i>Care</a>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./Add-Reports.html" class="nav-link px-2 link-light fs-5 ">Add-Reports</a></li>
                    <li><a href="#" class="nav-link px-2 link-warning fs-5">Medi-Reports</a></li>
                    <!-- <li><a href="./Medicine.html" class="nav-link px-2 link-light fs-5">Medi-Cine</a></li>
          <li><a href="symptoms.html" class="nav-link px-2 link-light fs-5">Symptoms</a></li> -->
                    <li><a href="#" class="nav-link px-2 link-dark fs-5">FAQs</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./php/logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- nav header part end here  -->

    <!-- main is here al all  -->
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light text-dark">WeCare:Medi-Reports</h1>
                    <p class="lead text-secondary">Here You can add, delete and also modify Patients medical reports
                        here . We WeCare
                        Member and management team take all responsibility to take care of all your reports . <br> Thank
                        you!!!!!!!
                    </p>
                    <p>
                        <a href="./Add-Reports.html" class="btn btn-success my-2"><i class="fa-solid fa-plus"></i>Add
                            Reports</a>
                        <a href="#" class="btn btn-danger my-2"><i class="fa-solid fa-minus"></i>Delete Reports</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">


                <!-- pop ups model starts from here  -->
                <!-- popups models starts from here -->
                <!-- M
        <!-- view ko lagi close here  -->

                <!-- aba edit ko lagi start from here  -->


                <!-- pop ups model starts from here  -->
                <!-- popups models starts from here -->
    

                <?php


        $sql = "SELECT * FROM report WHERE username='$username' ";
        $result = mysqli_query($conn, $sql);





        ?>


                

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



                        <?php
                    while ($row = mysqli_fetch_assoc($result)) {
              # code...                                                      
            


                    ?>
                    <div class="col">

                        <div class="card shadow-sm">

                            <img class="bd-placeholder-img card-img-top"
                                src="./assets/user_images/<?php echo $row['photo'] ?>" width="100%" height="325">

                            <div class="card-body">
                                <p class="card-text">Next Visit Date:<?php
                                                       $id=$row['id'];
                                                        $orgDate = $row['visit_date'];
                                                        $date = str_replace('-"', '/', $orgDate);
                                                        $newDate = date("Y/m/d", strtotime($date));
                                                        echo $newDate;
                                                        echo "<br>"; ?>
                                    Instructions to follow:<?php echo $row['instruction'];
                                            echo "<br>"; ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-outline-info my-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">View</a>
                                        <a href="#" class="btn btn-outline-danger my-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModall"
                                            onclick="oclick(<?php echo $id;?>)">Edit</a>
                                    </div>
                                    <small class=" text-muted"><?php   ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>


                <!-- edit ko lagi pani banda bayo yeha  -->



    </main>

    <!-- main end here  -->


    <!-- footer start form here  -->
    <div class="container-fluid">

        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 px-5 py-5 my-5 border-top bg-secondary">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <p class="text-muted">WeCare 2022 © All Rights Reserved</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Pages</h5>
                <ul class="nav flex-column ">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-light">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Contacts</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Social Links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                                class="fa-brands fa-facebook"></i>Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                                class="fa-brands fa-telegram"></i>Telegram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                                class="fa-brands fa-twitter"></i>Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                                class="fa-brands fa-instagram"></i>Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                                class="fa-brands fa-youtube"></i>Youtube</a></li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
<script type="text/javascript">
     
       function oclick(id){
          
       report_id=id;

        location.replace("./edit.php?id="+ report_id);

          
        }
        </script>

</body>
< /html>