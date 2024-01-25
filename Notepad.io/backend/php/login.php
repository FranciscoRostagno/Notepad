<?php
include('conections.php');
 
$email = $_POST['email'];
$password = $_POST['password'];

$verify = mysqli_query($conection, "SELECT * FROM users WHERE UMail = '$email'");
$answer = mysqli_num_rows($verify);


if ($$verify = mysqli_query($conection, "SELECT * FROM users WHERE UMail = '$email'")){
    echo '
    <script>
    alert("Login Complete!");
    location.href = "../../frontend/html/dashboard.html";
    </script>
  ' ;
}


mysqli_close($conection);

?>