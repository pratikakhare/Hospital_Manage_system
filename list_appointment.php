<?php
    include('connection.php');
    $id=$_POST['search'];
    $query="SELECT * FROM appoint WHERE CONCAT(pname,dname) LIKE '%$id%'";
    $data=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/list_doctor.css">
    <style>
        .table{
    margin-top: 20px;
    background-image: url('http://127.0.0.1:5500/images/post4.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid gray;
}
td{
    padding: 30px;
    margin-left: 20px;
}
th tr{
    padding: 50px;
    margin-left: 20px;
    border: 1px solid gray;
}
.payment{
    background-color: aqua;
    padding: 6px;
    color: black;
    border-radius: 8px;
    text-decoration: none;
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
                        <li><a class="dropdown-item" href="list_doctor.php"><i class="bi bi-person-check-fill"></i>List Of Doctor</a></li>
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

                <button class="login"><a href="login.php"><i class="bi bi-box-arrow-left"></i>  LogOut</a></button>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 style="margin-top: 40px; color:#138D75;">List Of Patients</h3>
              <nav class="navbar navbar-light bg-white" id="navb" style="margin-top: 30px;">
                <form action="list_appointment.php" method="POST" class="form-inline"  >
                  <div class="input-group">
                    <input class="form-control" type="search" name="search" placeholder="Search Here.." aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                  </div>
                </form>
              </nav>
            </div>
          </div>
        <div class="row">
            <div class="col-md-12">
                 <?php
    include('connection.php');

    $sql = "SELECT * FROM appoint";
    $result = mysqli_query($conn,$sql) or die("Unsuccessful");

    if(mysqli_num_rows($result) > 0){

     ?>
    <table class="table" cellpadding="7px">
        <thead>
            <tr>
                        <th>Id</th>
                        <th>Patient Name</th>
                        <th>Doctor Name</th>
                        <th>Department</th>
                        <th>Appointment</th>
                        <th>Time Slot</th>
                        <th>Problem</th>
                        <th>Payment</th>
</tr>
        </thead>
        <tbody>
            <?php
        foreach($data as $row){

        
            ?>
            <tr>
                <td><?php  echo $row['id'] ?></td>
                <td><?php  echo $row['pname'] ?></td>
                <td><?php  echo $row['dname'] ?></td>
                <td><?php  echo $row['depart'] ?></td>
                <td><?php  echo $row['appo'] ?></td>
                <td><?php  echo $row['time'] ?></td>
                <td><?php  echo $row['problem'] ?></td>
                <td><a href='payment.php?id=<?php echo $row['id'] ?>' class="payment">Payemnt</a></td>
            </tr>
            
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo"<h2>No Record Found...</h2>";
    }
    mysqli_close($conn) ;?>
                



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