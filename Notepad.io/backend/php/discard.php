<?php
include('conections.php');
 
$id = $_POST['ncod'];
$execute = $_POST['actione'];

if($id != 0){
    if($execute > 1){
        $query = "UPDATE `notes` SET `N_Archived`='1' WHERE `N_Cod` = $id";
        $undiscard = mysqli_query($conection, $query);
    }
}

if($id != 0){
  if($execute < 1){
      $query = "DELETE FROM `notes` WHERE `N_Cod` = $id";
      $delete = mysqli_query($conection, $query);
  }
}

if ($undiscard){
    echo '
    <script>
    location.href = "../../frontend/php/showdiscardednotes.php";
    </script>
  ' ;
} else if ($delete){
  echo '
  <script>
  location.href = "../../frontend/php/showdiscardednotes.php";
  </script>
' ;
}


mysqli_close($conection);

?>
