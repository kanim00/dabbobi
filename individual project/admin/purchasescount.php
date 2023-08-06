<?php
 include "connect.php";
?>

<?php
    $query = "select animal_id from purchases order by animal_id";
    $query_run = mysqli_query($conn,$query);

    $prow = mysqli_num_rows($query_run);
    
?>