<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
<body>

  <!-- Header -->
   <?php  
        include_once 'DatabaseConfig.php'; 
        session_start();
    ?>
           
    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><h2><em> Website</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home
                  
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Cart.php">Cart</a>
                </li>
                <?php 
                 if(!isset($_SESSION['Status']) == 'Admin'){ 
                 }
                 else {
                  
                   if($_COOKIE['Status'] == 'Admin'){?>
                    <li class="nav-item">
                        <a class="nav-link" href="Upload.php">Add Products</a>
                    </li>
                    
                <?php } else {} } ?>
                <li class="nav-item">
                  <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

                  <?php if(!isset($_SESSION["Username"])){ ?>
                <li class="nav-item">
                  <a class="nav-link" href="Registration.php">Signin/SignUp</a>
                </li>
                <?php
                } 
                else
                {
                ?>
                <li class="nav-item">
                  <div class="dropdown">
                        <a class="nav-link" data-toggle="dropdown">
                            <?php 
                            if(!isset($_SESSION['Name']))
                            {}
                              else 
                              {
                                echo str_replace("+"," ",$_SESSION["Name"]);
                              }?>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" style="font-size:20px;">Profile</a>
                           <a class="dropdown-item" href="Logout.php" style="font-size:20px;">
                            Log-Out</a>
                        </div>
                      </div>
                 </li>	
                <?php }?>
              </ul>
            </div>
          </div>
        </nav>
      </header>
</body>
</html>