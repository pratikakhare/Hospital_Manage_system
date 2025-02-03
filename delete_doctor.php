<?php
    include('connection.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM doctor WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    
    header('locatio:list_doctor.php');
?>