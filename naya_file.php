

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeCare-DoctorMedi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78e6212ab3.js" crossorigin="anonymous"></script>
    <style>
    .nav-link .px-2 .link-light .fs-5 .ddd {
        color: purple !important;
    }

    main {
        /* background-image: url("./images/hospital.jpg"); */
        /* background-position: center;
      background-repeat: no-repeat; */

    }

    .album {
        background-color: rgb(94, 93, 88);
    }
    </style>
</head>

<body>
        
        
        
        <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel"
                
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Medical Report No <?php
                                    
                                    echo $report_id;
                                ?>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card mb-3">
                                    <img <img class="bd-placeholder-img card-img-top" src="./assets/user_images/"
                                        width="100%" height="325">

                                    <div class="card-body">

                                        <!-- all reports here  -->

                                        <form>
                                            <div class="form-group mt-3 ">
                                                <label for="exampleDataList" class="form-label">Patients's
                                                    Username</label>
                                                <input class="form-control border border-2 border-success"
                                                    list="datalistOptions" id="exampleDataList" name="dname"
                                                    placeholder="Type Username to search...">



                                                <label for="exampleFormControlInput1">Patients's Email address</label>
                                                <input type="email" class="form-control border border-2 border-success"
                                                    id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>
                                            <div class="form-group mt-3" aria-readonly="readonly">
                                                <label for="exampleFormControlSelect1">Witness(साक्षी) if Any </label>
                                                <select class="form-control border border-2 border-success"
                                                    id="exampleFormControlSelect1">
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
                                                <textarea class="form-control border border-2 border-success"
                                                    id="exampleFormControlTextarea1" rows="5"></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleFormControlTextarea1">Description Of The
                                                    Disease</label>
                                                <textarea class="form-control border border-2 border-success"
                                                    id="exampleFormControlTextarea1" rows="7"></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleFormControlTextarea1">Description Of
                                                    Medicines</label>
                                                <textarea class="form-control border border-2 border-success"
                                                    id="exampleFormControlTextarea1" rows="5" readonly></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleFormControlTextarea1">Necessary Medical
                                                    Reports</label>
                                                <textarea class="form-control border border-2 border-success"
                                                    id="exampleFormControlTextarea1" rows="5" readonly></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleFormControlTextarea1">Instruction Regarding
                                                    Diet</label>
                                                <textarea class="form-control border border-2 border-success"
                                                    id="exampleFormControlTextarea1" rows="5"></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleFormControlInput1">Next Visit Date</label>
                                                <input type="datetime-local"
                                                    class="form-control border border-2 border-success"
                                                    id="exampleFormControlInput1" placeholder="dd/mm/yyyy">
                                            </div>

                              </form>
                              
</body>
        