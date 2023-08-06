<?php
    include "connect.php";
?>

<div class="content">
    <?php
        $id = $_GET['a'];
        $type = $_GET['b'];
        $breed = $_GET['c'];
        $price = $_GET['d'];

        mysqli_query($conn,"delete from livestock where animal_id= '$id'");

        mysqli_query($conn,"INSERT INTO sales (animal_name,animal_breed,selling_price) VALUES ('$type', '$breed', '$price')");
         
        header("location:staffsell.php");
        ?>