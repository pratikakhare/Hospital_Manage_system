<?php
include('connection.php');
$email =$_POST['email'];
$pass = $_POST['pswd'];

$query="SELECT * FROM login WHERE email='$email' AND password='$pass'";

$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);


if($row>0)
{
    echo '
    <script>
       
        window.location(location="home.php");

    </script>;

';
}
else
{
    echo '
    <script>
       alert("Please Enter Valid data")
        window.location(location="home.php");

    </script>;

';
}



?>