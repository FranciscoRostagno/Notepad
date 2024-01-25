<?php
include('../../backend/php/conections.php');
 
$id = $_POST['ncod'];


if($id != 0){
    $note = mysqli_query($conection,"SELECT * from notes WHERE `N_Cod` = $id");
    $read=mysqli_fetch_array($note);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
        <article class="box readpopup col-lg-12">
            <form action="../../frontend/php/shownotes.php" method="Post">
            <div class="col-lg-12">
                <h2>Note #<?php echo $read['N_Cod']?></h2>
                <div class="textboxdiv col-lg-8">
                    <textarea disabled class="textbox col-lg-12" maxlength="700" name="textbox" placeholder="Write your new note here..."><?php echo $read['N_Cont']?></textarea>
                </div>
                <button id="close">X</button>
            </div>
            </form>
        </article>
<?php 
    mysqli_close($conection);
}
?>

</body>
</html>

