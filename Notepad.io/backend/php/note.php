<?php
include('conections.php');

$note = $_POST['textbox'];

$insert = mysqli_query($conection, "INSERT INTO notes(N_Cod, N_Cont, N_State, N_Archived) VALUES ('', '$note', '0','')");
 
$id = $_POST['ncod'];

if($id != 0){
$query = "UPDATE `notes` SET `N_Archived`='1' WHERE `N_Cod` = $id";
$insert = mysqli_query($conection, $query);
}

if ($insert){
    echo '
    <script>
    alert("Note Created");
    location.href = "../../frontend/html/dashboard.html";
    </script>
  ' ;
}

mysqli_close($conection);

?>