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
      <header>ADMIN</header>
      <a href="adminindex.php">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="staffinfo.php" >
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
                                <h5 class="card-title">Add New Supplier</h5>
                                <form method="POST" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="supplier_name"class="form-label">Enter Supplier name</label>
                                        <input type="text" class="form-control"  name="supplier_name" id="supplier_name" required>
                                        <div class="invalid-feedback">
                                            Please enter supplier name.
                                          </div>

                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact"  class="form-label">Enter Contact</label>
                                        <input type="text" class="form-control"  name="contact" id="contact" required>
                                        <div class="invalid-feedback">
                                            Please provide contact.
                                          </div>
                               

                                    </div>
                                    <div class="mb-3">
                                        <label for="address"  class="form-label">Enter Address</label>
      
                                        <input type="text" class="form-control" name="address" id="address" required>
                                          <div class="invalid-feedback">
                                            Please provide an address.
                                          </div>

                                    </div>

                  
                                    <button type="submit" name="subtn" class="btn btn-primary">ADD</button>
                                    </form>

                                    

                                </div>
                        
                    </div>
                </div>  
         </div>
         <?php
					if(isset($_POST['subtn']))
					{
						
						$sname = $_POST['supplier_name'];
						$scontact = $_POST['contact'];
            $saddress =$_POST['address'];
            
					
            
						mysqli_query($conn,"insert into supplier(supplier_name, contact,address) values('$sname','$scontact','$saddress')");
					
					}	

					?>
          <script>

// javascript for form validation checking user inputs
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
      


</script>
        



</body>
</html>

