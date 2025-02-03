<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/home.css">
    <style>
        .slider{
            margin-top: 30px;
           /* border: 1px solid black;*/
            border-radius: 20px;
            box-shadow: 4px 4px 4px #75FAF4;
        }
        .login{
            border: 1px solid black;
            border-radius: 5px;
            margin-top: 4px;
            background-color: #5049F4;
            box-shadow: 4px 4px 4px #84F9E2  ;
            font-size: 18px;
            width: 150px;
            height: 40px;
            
}
.login a{
    color: white;
    text-decoration: none;
}
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="row drop">
            <div class="col-md-1 logo">
                <img src="images/logo.png" alt="">
            </div>
            
            <div class="col-md-3 had1">
                <h1 class="inline-h1" style="color: #138D75;margin-left:-30px;">+Pro</h1>
                <h1 class="inline-h1">Clinic</h1>
            </div>

            <div class="col-md-8 calls ml-4">
                <h6><i class="bi bi-telephone-fill " style="color: #138D75;margin-left:200px;"></i>Call: +91 7293921515 <i class="bi bi-envelope-fill p-3" style="color: #138D75;"></i><span style="margin-left: -10px;">Email: pratikakhare95@gmail.com</span> <i class="bi bi-geo-alt-fill p-2 " style="color: #138D75;"></i><span style="margin-left: -10px;">Location</span></h6>
            </div>
        </div>

        <div class="row drop " style="margin-left:-10px;">
            <div class="col-md-2">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-house-door-fill"></i>Dashboard
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="home.php">Home</a></li>
              <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
                </div>
            </div>

            <div class="col-md-2">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle m-3 mt-0" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" >
                        <i class="bi bi-file-person-fill "></i>Patient
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="add_patient.php"><i class="bi bi-person-plus-fill"></i>Add Patient</a></li>
                        <li><a class="dropdown-item" href="list_patient.php"><i class="bi bi-person-lines-fill"></i>List Of Patient</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>Doctor
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="add_doctor.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z"/>
                          </svg>Add Doctor</a></li>
                        <li><a class="dropdown-item" href="list_doctor.php"><i class="bi bi-person-check-fill"></i>List pf Doctor</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-pencil-square"></i>Appointment
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="appointment.php"><i class="bi bi-pen-fill"></i>Get Appointment</a></li>
                        <li><a class="dropdown-item" href="list_appointment.php"><i class="bi bi-file-text-fill"></i>All Appointment</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle m-3 mt-0" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                            <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                          </svg>Payment
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-credit-card-2-back"></i>Payment</a></li>
                        <!-- <li><a class="dropdown-item" href="#"><i class="bi bi-wallet-fill"></i>All Payments</a></li> -->
                    </ul>
                </div>
            </div>

            <div class="col-md-2">

           <button class="login"><a href="login.php"><i class="bi bi-box-arrow-left"></i>  SignUp/SignIn</a></button>
               
            </div>
        </div>

        <div class="row slider">
            <div class="col-md-9 sliderbar">
                <!-- Slider -->
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="1000">
                            <img src="images/slider99.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="1000">
                            <img src="images/slider.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="1000">
                            <img src="images/slider2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- END slider -->
            </div>
            <div class="col-md-3 contain">
                <h2>Welcome...!</h2>
                <p style="color: rgb(174, 9, 240);">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic porro, suscipit magni atque nemo perferendis enim, omnis expedita ex esse tempora, quam id quos iusto cum inventore. Natus accusamus exercitationem perspiciatis, sunt amet optio minus facilis explicabo, perferendis id sapiente esse repellat quo! Nam blanditiis beatae velit accusamus ad illo!</p><br>
                <p>Ipsum dolor sit amet consectetur adipisicing elit. Id, amet. Enim iure dicta modi, possimus ad expedita nihil quae illum harum veniam magnam provident alias amet, debitis optio. Est quae ea inventore fuga. In ipsam aperiam odio non obcaecati! Minima rem perspiciatis vel quisquam. Asperiores provident ea pariatur maxime animi?</p>
            </div>
        </div>

        <div class="row Treatment">
            <h2>Hospital Treatment</h2>
        </div>
        <div class="row teamimg">
            <div class="col-md-3 med">
                <img src="images/t1.png" alt="">
                <h5>Nephrologist Care</h5>
                <p>Nephrologists are medical professionals who diagnose, treat, and manage acute and chronic kidney problems and diseases.<br>They also treat associated issues like high blood pressure, fluid retention </p>
            </div>
            <div class="col-md-3 med">
                <img src="images/t2.png" alt="">
                <h5>Eye Care</h5>
                <p>The easiest way to prevent blindness or serious vision problems is to have regular, comprehensive eye exams. Always make sure your hands are clean before touching your eyes. </p>
            </div>
            <div class="col-md-3 med">
                <img src="images/t3.png" alt="">
                <h5>Pediatrician Clinic</h5>
                <p>Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18.</p>
            </div>
            <div class="col-md-3 med">
                <img src="images/t4.png" alt="">
                <h5>Parental Care</h5>
                <p>Parental care is a behavioural and evolutionary strategy adopted by some animals, involving a parental investment being made to the evolutionary fitness of offspring. Patterns of parental care are widespread and highly diverse across the animal kingdom</p>
            </div>
        </div>


        <div class="row cards" style="margin-top: 50px;">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Dr. Virat</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda architecto omnis fugiat dolorum iste commodi molestias dolore quos voluptates id.</p>
                        <a href="template.html"  class="btn btn-primary">Learn More..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Health Care</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda architecto omnis fugiat dolorum iste commodi molestias dolore quos voluptates id.</p>
                        <a href="template.html"  class="btn btn-primary">Learn More..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Experts</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda architecto omnis fugiat dolorum iste commodi molestias dolore quos voluptates id.</p>
                        <a href="template.html"  class="btn btn-primary">Learn More..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?q=80&w=1447&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width: 260px; height:180px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Experiance</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda architecto omnis fugiat dolorum iste commodi molestias dolore quos voluptates id.</p>
                        <a href="template.html"  class="btn btn-primary">Learn More..</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-muted">
                        &copy; 2024 Hospital Management System | Copyright by Pratik Akhare
                    </div>
                </div>
            </div>
        </footer>
        

    </div>
</body>

</html>