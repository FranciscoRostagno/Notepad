<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>
    
    <form id="refreshform" action="../../frontend/php/showarchivednotes.php" method="Post">
        <button id="refresh">Refresh</button>
    </form>

        <table class="boxe tabledashcont col-lg-12" id="tabledash" border = 1 > 
            <tr>
                <td>Note ID</td>
                <td>Note Content</td>
                <td>Note State</td>
                <td>Unarchive Note</td>
                <td>Discard Note</td>
            </tr>
<?php
include('../../backend/php/conections.php');
$notes = mysqli_query($conection, "SELECT * from notes");
while($note=mysqli_fetch_array($notes)){
    if($note['N_Archived'] == 1){
?>
            <tr>
                <form action="../../backend/php/unarchive.php" method="post">
                    <td><?php echo $note['N_Cod'] ?></td>
                    <td><?php echo substr($note['N_Cont'], 0 ,70) . '...' ;?></td>
                    <td> <?php if($note['N_State'] == 0){
                        echo 'Pending';
                    } else {
                        echo 'Complete';
                    }
                    ?> </td>
                    <textarea name="ncod" id="n_cod" style="display:none;"><?php echo $note['N_Cod']?></textarea>
                    <textarea name="actions" id="n_cod" style="display:none;"><?php echo 2?></textarea>
                    <td><button type="submit">Unarchive</button></td>
                </form>
                <form action="../../backend/php/unarchive.php" method="post">
                    <textarea name="ncod" id="n_cod" style="display:none;"><?php echo $note['N_Cod']?></textarea>
                    <textarea name="actions" id="n_cod" style="display:none;"><?php echo 0?></textarea>
                    <td><button type="submit">Discard</button></td>
                </form>
                <!-- <td><?php/* echo $note['N_Tag'] */?></td> -->
            </tr>
        <?php 
}
}
?>                                                            
      </table>  
<?php 
    mysqli_close($conection);
?>

</body>
</html>