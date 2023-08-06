<?php 
    include "connect.php";

?>

<div class="content">
    <?php
        $a = $_GET['a'];
        mysqli_query($conn,"delete from livestock where animal_id= '$a'");
        header("location: animals.php");
        ?>