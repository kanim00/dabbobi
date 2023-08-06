<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
    <button class="btn btn-primary">+ADD</button>
    
         <div class="container">
                    <div class="jumbotron">
                    <div class="card_main">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Animal name</th>
                                            <th scope="col">Breed</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount</th>
                                            <th scope = "col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                     <th>1</th>
                                                     <td>Mark</td>
                                                     <td>Otto</td>
                                                     <td>@mdo</td>
                                                     <td></td>
                                                     <td>
                                                <button class="btn btn-primary">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-primary">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-primary">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                                </td>
                                            
                                            </tr>
                                        </tbody>
                                 </table>
                            </div>
                            </div>
                    </div>
                </div>
        

</body>
</html>