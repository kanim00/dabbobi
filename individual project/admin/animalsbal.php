<?php
 include "connect.php";
?>

<?php
    $query = "select animal_id from livestock order by animal_id";
    $query_run = mysqli_query($conn,$query);

    $lrow = mysqli_num_rows($query_run);
    
?>