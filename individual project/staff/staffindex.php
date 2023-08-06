<?php

    include "purchasescount.php";
    include "salescount.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
   
    <div class="sidebar">
      <header>STAFF</header>
      <a href="staffindex.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="staffsell.php">
        <i class="fas fa-money-bill-wave"></i>
        <span>Sell</span>
      </a>
      <a href="staffreceivals.php">
        <i class="fas fa-luggage-cart"></i>
        <span>Receipts</span>
      </a>
      <a href="index.php">
         <i class="fas fa-sign-out-alt"></i>
        <span>Log Out</span>
      </a>
      
    </div>
        <div class="wrap">
            <div class="card">
                <div class="container">
                    <h4><b> Sales </b></h4>
                    <p> Amount: <?php echo $row ?>
                   </p>
                </div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="card">
                <div class="container">
                    <h4><b> Purchases/Receipts </b></h4>
                    <p>Amount:<?php echo $prow ?></p>
                </div>
                </div>
            </div>
        </div>



</body>
</html>