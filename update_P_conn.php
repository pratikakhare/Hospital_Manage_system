<?php 
include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "UPDATE patient SET name = '{$name}', age = '{$age}', dob = '{$dob}', phone = '{$phone}',email = '{$email}', gender = '{$gender}' WHERE id = {$id}";
$result = mysqli_query($conn,$sql);

header('location:list_patient.php');

?>