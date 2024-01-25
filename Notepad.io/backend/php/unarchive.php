<?php
include('conections.php');
 
$id = $_POST['ncod'];
$execute = $_POST['actions'];

if($id != 0){
    if($execute > 1){
        $query = "UPDATE `notes` SET `N_Archived`='0' WHERE `N_Cod` = $id";
        $unarchive = mysqli_query($conection, $query);
    }
}

if($id != 0){
  if($execute < 1){
      $query = "UPDATE `notes` SET `N_Archived`='-1' WHERE `N_Cod` = $id";
      $discard = mysqli_query($conection, $query);
  }
}

if ($unarchive){
    echo '
    <script>
    location.href = "../../frontend/php/showarchivednotes.php";
    </script>
  ' ;
} else if ($discard){
  echo '
  <script>
  location.href = "../../frontend/php/showarchivednotes.php";
  </script>
' ;
}


mysqli_close($conection);

?>