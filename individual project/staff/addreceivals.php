<?php
  include "connect.php";
  
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
      <header>STAFF</header>
      <a href="staffindex.php">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="staffsell.php">
        <i class="fas fa-money-bill-wave"></i>
        <span>Sell</span>
      </a>
      <a href="staffreceivals.php" class="active">
        <i class="fas fa-luggage-cart"></i>
        <span>Receipts</span>
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
                              
                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="animal_name"class="form-label">Enter Animal Type</label>
                                        <input type="text" class="form-control"  name="animal_name" id="animal_name" required>
                                        <div class="invalid-feedback">
                                                Please enter animal name.
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="animal_breed"  class="form-label">Enter Animal Breed</label>
                                        <input type="text" class="form-control" name="animal_breed" id="animal_breed" required>
                                        <div class="invalid-feedback">
                                                Please enter animal breed.
                                        </div>
                               

                                    </div>
                                    <div class="mb-3">
                                        <label for="cost_price"  class="form-label">Enter Purchase Price</label>
                                        <input type="number" class="form-control" name="cost_price" id="cost_price" required>
                                        <div class="invalid-feedback">
                                                Please enter a price.
                                        </div>

                                    </div>
                                    <a href="staffreceivals.php">
                                    <button  name="rbtn" class="btn btn-primary">ADD</button>
                                    </a>
                                    
                                    </form>
                                    
                                    

                                </div>
                        
                    </div>
                </div>  
         </div>
         <?php
					if(isset($_POST['rbtn']))
					{
						
						$aname = $_POST['animal_name'];
						$abreed = $_POST['animal_breed'];
            $cp =$_POST['cost_price'];
            $sname = $_POST['supplier_name'];

            $sp = 1.6 * $cp;
					
            
						mysqli_query($conn,"insert into purchases(animal_name, animal_breed,cost_price, supplier_name) values('$aname','$abreed','$cp','$sname')");
            mysqli_query($conn,"insert into livestock(animal_type, breed,cost_price,selling_price) values('$aname','$abreed','$cp','$sp')");

					
					}	

					?>

        



</body>
</html>

