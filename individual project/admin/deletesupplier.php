<?php 
    include "connect.php";

?>

<div class="content">
    <?php
        $a = $_GET['a'];
        mysqli_query($conn,"delete from supplier where supplier_id= '$a'");
        header("location:suppliers.php");
        ?>