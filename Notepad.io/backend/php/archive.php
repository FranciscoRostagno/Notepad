<?php
include('conections.php');
 
$id = $_POST['ncod'];
$execute = $_POST['actio'];

if($id != 0){
    if($execute > 1){
        $query = "UPDATE `notes` SET `N_Archived`='1' WHERE `N_Cod` = $id";
        $archived = mysqli_query($conection, $query);
    }
}

if($id != 0){
  if($execute < 1){
      $query = "UPDATE `notes` SET `N_State`='1' WHERE `N_Cod` = $id";
      $completed = mysqli_query($conection, $query);
  }
}

if ($archived){
    echo '
    <script>
    location.href = "../../frontend/php/shownotes.php";
    </script>
  ' ;
}

if ($completed){
  echo '
  <script>
  location.href = "../../frontend/php/shownotes.php";
  </script>
' ;
}


mysqli_close($conection);

?>