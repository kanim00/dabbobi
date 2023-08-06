<?php 
    include "connect.php";

?>

<div class="content">
    <?php
        $a = $_GET['a'];
        mysqli_query($conn,"delete from staff where staff_id= '$a'");
        header("location:staffinfo.php");
        ?>