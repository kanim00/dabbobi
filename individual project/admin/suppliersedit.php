<?php
  include "connect.php";
  session_start();
  //include "staffadd.php";
?>
  


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </head>
  <body>
   
  <div class="sidebar">
      <header>ADMIN</header>
      <a href="adminindex.php">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="staffinfo.php">
        <i class="fas fa-users"></i>
        <span>Staff</span>
      </a>
      <a href="suppliers.php" class="active">
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

    <div class="container">
             <div class="jumbotron">
                    <div class="card_main">
                            <div class="card-body">
                                <h5 class="card-title">Animal Details</h5>
                                <form method="POST">
                                    <div class="mb-3">                                       
                                        <input type="number" class="form-control"  name="supplier_id" id="supplier_id"/>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="supplier_name"class="form-label">Enter Staffname</label>
                                        <input type="text" class="form-control"  name="supplier_name" id="supplier_name"/>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact"  class="form-label">Enter Contact</label>
                                        <input type="number" class="form-control" name="contact" id="contact"/>
                               

                                    </div>
                                    <div class="mb-3">
                                        <label for="address"  class="form-label">Enter Address</label>
                                        <input type="text" class="form-control" name="address" id="address"/>

                                    </div>
                                    <button type="submit" name="editbtn" class="btn btn-success">EDIT</button>
                                    </form>
                              

                                </div>
                        
                    </div>
                </div>  
         </div>
         <?php
                  if(isset($_POST['editbtn']))
                  {
                    $id = $_POST['supplier_id'];
                    $suname = $_POST['supplier_name'];
                    $contact = $_POST['contact'];
                    $address =$_POST['address'];
                                
          
              
                    $query= "UPDATE supplier SET supplier_name ='$suname', contact='$contact', address='$address' WHERE supplier_id = '$id'";
                      
                                $query_run = mysqli_query($conn,$query);
                                if($query_run){
                                    echo "<script>alert('Update Successfull);</script>";
                                }
                                  else{
                                    echo "<center>ERROR...</center>";
                                }
                    
                  }	

					?>
      

        



</body>
</html>

