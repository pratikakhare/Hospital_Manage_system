<?php

include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$experience = $_POST['experience'];
$phone = $_POST['phone'];
$special = $_POST['special'];
$availability = $_POST['availability'];

$sql = "UPDATE doctor SET name = '{$name}',experiance = '{$experience}',phone ='{$phone}',special = '{$special}', availability = '{$availability}' WHERE id = {$id}";

        $result = mysqli_query($conn,$sql);

        header('location:list_doctor.php');


        // experiance	
?>