<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./first.css">
    <link rel="stylesheet" href="./Js/style.css">
    <!-- favicon ko link  -->
    <link rel="shortcut icon" href="./images/logooo.png" type="image/x-icon">
    
    <script src="https://kit.fontawesome.com/78e6212ab3.js" crossorigin="anonymous"></script>
    <title>WeCare-Interface</title>
    <style>
        footer {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-weight: bold;
        }
    </style>
</head>

<body>


    <div class="containerrr">


        <div class="container-fluiddd">

            <!-- doctor wala start -->
            <div class="doctor">
                <div class="img-box">
                    <h2 class="fw-semibold">Doctor</h2>
                    <img src="./images/doctor.jpg" height="180" width="270" alt="">
                </div>

                <!-- doctor ko form : post method ma  -->
                <form action="./php/logind.php" method="post">
                    <p>
                        <input type="text" name="dname" id="dname" placeholder="Username">
                    </p>
                    <p>
                        <input type="password" name="dpass" id="dpass" placeholder="Password">
                    </p>
                    <p>

                        <!-- onclick="openpopup()" yo chai error pop up lagi thiyo -->

                        <input name="submit" type="submit"  value="LogIn">

                        <a href="forget-password.html">
                            <input type="button" value="Forget Password">
                        </a>
                    </p>
                </form>

            </div>
            <!-- doctor wala end  -->






            <!-- register wala start -->
            <div class="register-here">
                <p>Don't have any account ?*</p>
                <a href="./Register.html">
                    <input type="button" value="Register Now">
                </a>

            </div>
            <!-- register wala end  -->

            <!-- paritent wala start -->

            <div class="patient">
                <div class="img-box">
                    <h2 class="fw-semibold">Patients</h2>
                    <img src="./images/born-baby.jpg" height="180" width="270" alt="">
                </div>

                <!-- patient ko form:post  method ma  -->
                <form action="./php/loginp.php" method="post">
                    <p class="input-controls">
                        <input type="text" name="pname" id="pname"  placeholder="Username">
                        <div class="error"></div>
                    </p>
                    <p>
                        <input type="password" name="ppass" id="ppass" placeholder="Password">
                        <div class="error"></div>
                    </p>
                    <p>
                        <input type="submit" name="submit" value="LogIn">

                        <a >
                            <input type="button" name="forget" value="Forget Password">
                        </a>
                    </p>
                </form>

            </div>

            <!-- patient wala end  -->

        </div>
    </div>


    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark" style="background-color: #14A44D;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">We<i class="fa-solid fa-circle-nodes"></i>Care</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">QA Forum</a>
                    </li>
                    <li class="nav-item dropup">
                        <a class="nav-link dropdown-toggle active fw-semibold" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown10">
                            <li><a class="dropdown-item fw-semibold" href="#">Services 1</a></li>
                            <li><a class="dropdown-item fw-semibold" href="#">Services 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Services 3</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- nav bar bottom end here  -->
    <footer class="pt-3 mt-4 text-muted border-top">
        © 2022 WeCare. All Right Reserved
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</html>