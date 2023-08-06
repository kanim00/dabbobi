<?php
 include "connect.php";
?>

<?php
    $query = "select animal_id from sales order by animal_id";
    $query_run = mysqli_query($conn,$query);

    $row = mysqli_num_rows($query_run);
    
?>