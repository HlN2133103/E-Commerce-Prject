<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

  

    <!-- Page Content
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>
                Lorem ipsum dolor sit amet.
            </span>
          </div>
        </div>
      </div>
    </div>-->
    <?php 
    // Include the database configuration file  
    include 'DatabaseConfig.php';
    session_start();
    
    $Id =$_GET['Id'];

    $sql = "SELECT Id,Phonename,Brand,Price,Images,Status FROM items where Id = ? ";
    // Get image data from database 
    $result = $db -> prepare($sql);
    $result->bind_param('i',$Id);
    $result->execute();
    $result->bind_result($Id,$Phonename,$Brand,$Price,$Images,$Status);  
    ?>
  
    <div class="services">
      <div class="container">
        <div class="row">
        <?php while($result->fetch()){ ?>
          <div class="col-md-7">
            <div>
              <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($Images);?>" alt="" class="img-fluid wc-image">
            </div>
            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h4>Info</h4>
              </div>

              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum!</p>
              </div>
            </div>

            <br>
            <br>

            <form action="AddToCart.php" method="GET" >
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">Storage</label>
                    <select class="form-control" name="str">
                      <option value="64 GB">64 Gb</option>
                      <option value="128 GB">128 Gb</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" value="1" name="qty"  class="form-control">
                    <input type="text" value="<?php echo $Id;?> " hidden name="id">
                  </div>
                  <label for="">Price</label>
                  <p style="font-size:20px;"><?php echo $Price; ?></p><br>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    
                  <button type="submit" class="btn btn-round btn-block" style="background:#a4c639;color: #fff;
                      font-size: 13px;
                      text-transform: uppercase;
                      font-weight: 700;
                      padding: 12px 30px;
                      border-radius: 30px;
                      display: inline-block;
                      transition: all 0.3s;">
                      Add to Cart</button>
                      </div>

        </form>

                <form action="pay.php" method="POST">
                  <div class="col-lg-12">
                  <div class="form-group">
                      <input type="text" value="<?php echo $Phonename;?> " hidden name="pname">
                      <input type="text" value="<?php echo $Brand;?> " hidden name="brand">
                      <input type="text" value="<?php echo $Price;?> " hidden name="Price">
                      <input type="text" value="<?php if(isset($_COOKIE['Name'])){echo str_replace("+"," ",$Name);} ?> " hidden name="name">
                      <input type="text" value="<?php if(isset($_COOKIE['Phone'])){echo $Phone;} ?> " hidden name="phone">
                      <input type="text" value="<?php if(isset($_COOKIE['Email'])){echo $Email;} ?> " hidden name="email">
                      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($Images); ?>" name="image" style="height:230px; width:360px;" hidden class="img-responsive"/>

                     <button type="submit" class="btn btn-round btn-block" style="background:#a4c639;color: #fff;
                      font-size: 13px;
                      text-transform: uppercase;
                      font-weight: 700;
                      padding: 12px 30px;
                      border-radius: 30px;
                      display: inline-block;
                      transition: all 0.3s;">
                      Buy Now</button>
                </div></div>
        </form>
                    
                  <?php 
                    if(isset($_COOKIE['Status']))
                    {  
                      if($_COOKIE['Status'] == 'User')
                      {} 
                      else 
                      { 
                  ?>
                      <div class="col-lg-12">
                    <div class="form-group">
                        <a href="Delete.php?Id=<?php echo $_GET['Id']; ?>"class="btn btn-round btn-block" style="background:#a4c639;color: #fff;
                      font-size: 13px;
                      text-transform: uppercase;
                      font-weight: 700;
                      padding: 12px 30px;
                      border-radius: 30px;
                      display: inline-block;
                      transition: all 0.3s;">Delete</a>
                    <?php 
                      } 
                    }
                  ?>

                  </div>
                </div>
              </div>
            </form>
        <?php }?>
        

            <br>
          </div>
        

        <br>
        <h4>Description</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illum necessitatibus adipisci cum dolor quam magnam similique quasi iure blanditiis?</p>
        <br>
        <br>
        <br>
        </div>
      </div>
    </div>

    
   <!--#include file="Footer.asp"-->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>