<?php 
  include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>"dabbobi"</title>
    <script type="text/javascript" src="allscript.js"></script>
   
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                dabbobi
            </a>          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
<br>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">dabbobi farm portal</h1>
        
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
               
            <!-- username input -->
         <div class="form-outline mb-4">
             <input type="text" id="staff_name" class="form-control form-control-lg"
              placeholder="Enter your username" name="staff_name" required />
            <label class="form-label" for="staff_name">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="staff_password" name="staff_password" class="form-control form-control-lg"
              placeholder="Enter password" required />
            <label class="form-label" for="staff_password" >Password</label>
          </div>
        
             <button type="submit" name="submitBtn" class="btn btn-primary">Login</button>
          
          

        </form>
      </div>
    </div>
  </div>
    <?php
          if(isset($_POST['submitBtn'])){ 
     
            $uname=$_POST['staff_name']; 
            $password=$_POST['staff_password']; 
            
            //verifying if login details match for staff and admin
            //redirects users to dashboard based on data inputs
            
            $sql_A = "select * from admin where admin_name='".$uname."'AND admin_password='".$password."' limit 1"; 
            $sql="select * from staff where staff_name='".$uname."'AND staff_password='".$password."' limit 1"; 

            $result=mysqli_query($conn,$sql); 
            $result1=mysqli_query($conn,$sql_A); 

             
            if(mysqli_num_rows($result1) > 0){ 
                header("location: adminindex.php"); 
                 
                exit(); 
            }  
            if(mysqli_num_rows($result) > 0){ 
              header("location: ../staff/staffindex.php"); 
              
              exit(); 
          } else{ 
                echo "<script language='javascript'>;
                alert('Incorrect details');
                </script>"; 
                exit(); 
            } 



            
                 
        } 
    ?>


</body>
</html>