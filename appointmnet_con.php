<?php

include('connection.php');

$pname = $_POST['pname'];
$dname = $_POST['dname'];
$depart = $_POST['depart'];
$dates = $_POST['dates'];
$time = $_POST['time'];
$problem = $_POST['problem'];

$query = "INSERT INTO appoint(pname,dname,depart,appo,time,problem)VALUES('$pname','$dname','$depart','$dates','$time','$problem')";
$result = mysqli_query($conn,$query);

if($result){
   header('location:list_appointment.php');
}
else{
    echo "Error";
}
?>