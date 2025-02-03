<?php

include('connection.php');

$id=$_GET['id'];
$sql = "DELETE FROM patient WHERE id = {$id}";
$result = mysqli_query($conn, $sql);

header('location:list_patient.php');


?>