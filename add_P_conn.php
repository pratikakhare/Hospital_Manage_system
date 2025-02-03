<?php
include('connection.php');
$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];



$query = "INSERT INTO patient(name,age,dob,phone,email,gender)VALUES('$name','$age','$dob','$phone','$email','$gender')";
$result = mysqli_query($conn,$query);
if($result){
    header('location:list_patient.php');
}else{
    echo"FAILED";
}

// $sql = "CREATE TABLE patient(id int primary key auto_increment, name varchar(200),age varchar(200),dob varchar(200),phone varchar(200),
//              email varchar(200),gender varchar(200))";
//              $result = mysqli_query($conn,$sql);

//              if($result)
//              {
//                 echo"Created";
//              }else{
//                 echo"failed";
//              }

?>