<?php
include('connection.php');

$name = $_POST['name'];
$experiance = $_POST['experience'];
$phone = $_POST['phone'];
$special = $_POST['special'];
$availability = $_POST['availability'];



$query = "INSERT INTO doctor(name,experiance,phone,special,availability)VALUES('$name','$experiance','$phone','$special','$availability')";
$result = mysqli_query($conn,$query);
if($result) {
    header('location:list_doctor.php');
}else{
    echo"NOt INSETED";
}



// $query = "CREATE TABLE doctor(id int PRIMARY KEY auto_increment, name varchar(200),experiance varchar(200), phone varchar(200), special varchar(200), availability varchar(200))";
// $result = mysqli_query($conn,$query);
// if($result){
//     echo"created";
// }else{
//     echo"Fail";
// }

?>