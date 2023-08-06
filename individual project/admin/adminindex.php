<?php
 include "connect.php";
 include "salescount.php";
 include "purchasescount.php";
 include "animalsbal.php";
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
      <header>ADMIN</header>
      <a href="adminindex.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="staffinfo.php">
        <i class="fas fa-users"></i>
        <span>Staff</span>
      </a>
      <a href="suppliers.php">
        <i class="fas fa-truck"></i>
        <span>Suppliers</span>
      </a>
      <a href="sales.php">
        <i class="fas fa-money-bill-wave"></i>
        <span>Sales</span>
      </a>
      <a href="purchases.php">
        <i class="fas fa-shopping-cart"></i>
        <span>Purchases</span>
      </a>
      <a href="stock.php">
        <i class="fas fa-cubes"></i>
        <span>Stock</span>
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
                    <p> Amount:<?php echo $row ?></p>
                </div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="card">
                <div class="container">
                    <h4><b> Purchases/Receipts </b></h4>
                    <p> Amount:<?php echo $prow?></p>
                </div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="card">
                <div class="container">
                    <h4><b> Animals Available </b></h4>
                    <p> Amount:<?php echo $lrow?></p>
                </div>
                </div>
            </div>
        </div>



</body>
</html>