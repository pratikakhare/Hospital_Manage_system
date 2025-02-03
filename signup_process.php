<?php

include('connection.php');
$user = $_POST['username'];
$email =$_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

if($pass==$cpass)
{

    $sql = "INSERT INTO login(username,email,password)VALUES('$user','$email','$pass')";
    $result = mysqli_query($conn,$sql);

    echo '
            <script>
                alert("Data Inserted Successfully........!");
                window.location(location="login.php");

            </script>;
    
    ';
}
else
{
    echo '
    <script>
        alert("Confirm Password do not Match........!");
        window.location(location="login.php");

    </script>;

';
}

?>