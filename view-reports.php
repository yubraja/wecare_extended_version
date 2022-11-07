<?php




include"./php/configure.php";


session_start();//session started

$username=$_SESSION['patient'];
$username='yubis';

$sql = "SELECT * FROM report WHERE username='$username' ";
$result = mysqli_query($conn, $sql);
if($result)
{
$row = mysqli_fetch_assoc($result);


}
else{
    $errors['reports']="Empty Reports!!!";
    header("Location: ../view-reports.php?error=".serialize($errors));
}






?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeCare-PatientView</title>

    <!-- full page css under one single file bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontawesone icon link here  -->
    <script src="https://kit.fontawesome.com/78e6212ab3.js" crossorigin="anonymous"></script>

    <!-- favicon link here  -->
    <link rel="shortcut icon" href="./images/favicon.jpg" type="image/x-icon">

    <!-- custom css little bit  -->
    <style>
        .nav-link .px-2 .link-light .fs-5 .ddd {
            color: purple !important;
        }
        main{
            background-image: url(./images/h.jpg);
            margin-top: 0px;
        }
        .album{
            background-color:azure;
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
                    <!-- <li><a href="./Add-Reports.html" class="nav-link px-2 link-light fs-5 ">Add-Reports</a></li> -->
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
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- nav header part end here  -->
<!-- 

    <!-- main is here al all  -->
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">WeCare:Medi-Reports</h1>
                    <p class="lead text-muted">Here You can only view your medical reports . We WeCare
                        Member and management team take all responsibility to take care of all your reports . <br> Thank
                        you!!!!!!!
                    </p>
                    <p>
                        <button type="button" class="btn  btn-success" data-bs-toggle="popover" title="WeCare"
                            data-bs-content="It is the most trustable and secure platform for storing and uploading medical reports . "
                            data-bs-placement="left"><i class="fa-solid fa-plus"></i>More About Us</button>
                        <button type="button" class="btn  btn-danger" data-bs-toggle="popover" title="Esewa"
                            data-bs-content="Our Esewa id is 9866134804. Thank Your For your contribution . 
                            We will remark it as a precious help   :)   "><i class="fa-solid fa-dollar"></i>Want To
                            Contribute...?*</button>
                        <!-- <button type="button" class="btn btn-outline-danger">Danger</button> -->
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 ">
            <div class="container">

                <!-- popups models starts from here -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Medical Report No 1 </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card mb-3">
                                    
                                    <img src="./images/born-baby.jpg" height="600px" class="card-img-top" alt="...">
                                    <div class="card-body">


                                      <!-- all reports here  -->

                                      <form>
                                        <div class="form-group mt-3 ">
                                          <label for="exampleFormControlInput1">Patients's Email address</label>
                                          <input type="email" class="form-control border border-2 border-success" id="exampleFormControlInput1" placeholder="name@example.com" readonly>
                                        </div>
                                        <div class="form-group mt-3" aria-readonly="readonly">
                                          <label for="exampleFormControlSelect1">Witness(साक्षी) if Any </label>
                                          <select class="form-control border border-2 border-success" id="exampleFormControlSelect1" readonly>
                                            <option>No-one</option>
                                            <option>Father</option>
                                            <option>Mother</option>
                                            <option>Sister</option>
                                            <option>Brother</option>
                                            <option>Friends</option>
                                            <option>Staff</option>
                                            <option>Other</option>
                                          </select>
                                        </div>
                                  
                                        <div class="form-group mt-3">
                                          <label for="exampleFormControlTextarea1">Symptoms Of The Patient</label>
                                          <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5" readonly></textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                          <label for="exampleFormControlTextarea1">Description Of The Disease</label>
                                          <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="7" readonly></textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                          <label for="exampleFormControlTextarea1">Description Of Medicines</label>
                                          <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5" readonly></textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                          <label for="exampleFormControlTextarea1">Necessary Medical Reports</label>
                                          <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5" readonly></textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                          <label for="exampleFormControlTextarea1">Instruction Regarding Diet</label>
                                          <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5" readonly></textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                          <label for="exampleFormControlInput1">Next Visit Date</label>
                                          <input type="datetime-local" class="form-control border border-2 border-success" id="exampleFormControlInput1" placeholder="dd/mm/yyyy" readonly>
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

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="./images/born-baby.jpg" width="100%"
                                height="325">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-success my-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i>View
                                            More</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="./images/born-baby.jpg" width="100%"
                                height="325">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        <a href="#" class="btn btn-success my-2"><i class="fa-solid fa-plus"></i>View
                                            More</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="./images/born-baby.jpg" width="100%"
                                height="325">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        <a href="#" class="btn btn-success my-2"><i class="fa-solid fa-plus"></i>View
                                            More</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="./images/born-baby.jpg" width="100%"
                                height="325">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        <a href="#" class="btn btn-success my-2"><i class="fa-solid fa-plus"></i>View
                                            More</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="./images/born-baby.jpg" width="100%"
                                height="325">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        <a href="#" class="btn btn-success my-2"><i class="fa-solid fa-plus"></i>View
                                            More</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="./images/born-baby.jpg" width="100%"
                                height="325">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        <a href="#" class="btn btn-success my-2"><i class="fa-solid fa-plus"></i>View
                                            More</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

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
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
</body>





</html>
// 