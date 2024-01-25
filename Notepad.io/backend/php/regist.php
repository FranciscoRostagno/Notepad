<?php
include('conections.php');

$username = $_POST['username'];
$useremail = $_POST['e-mail'];
$userpassword = $_POST['password'];

$verify = mysqli_query($conection, "SELECT * FROM users WHERE Umail = '$useremail'");

$answer = mysqli_num_rows($verify);


if($answer > 0){
    echo '
        <script>
        alert("This E-Mail already was registered");
        location.href = "../../frontend/html/register.html";
        </script>
      ' ;
    exit;
}

$verify = mysqli_query($conection, "SELECT * FROM users WHERE UName = '$username'");

$answer = mysqli_num_rows($verify);

if($answer > 0){
  echo '
      <script>
      alert("This E-Mail already was registered");
      location.href = "../../frontend/html/register.html";
      </script>
    ' ;
  exit;
}



$insert = mysqli_query($conection, "INSERT INTO users(UName, Umail, Upassword) VALUES ('$username','$useremail', '$userpassword')");

if ($insert){
    echo '
    <script>
    alert("Register complete");
    location.href = "../../frontend/html/index.html";
    </script>
  ' ;
}

mysqli_close($conection);


?>