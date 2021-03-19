<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
  <body>
    <?php 
    include 'DatabaseConfig.php'; 
    include 'Header.php'; 
    ?>
    
    <!-- Page Content
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Products</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>
 -->
    <?php 
       $result = $db->query("SELECT Id,Phonename,Brand,Price,Images,Status FROM items");
       if($result->num_rows > 0){ 
    ?> 
        <br><br>
        <div class="services">
        <div class="container">
        <div class="row">
      <?php while($row = $result->fetch_assoc()){ ?>
        <div class="col-md-4">
            <div class="service-item">
              <?php echo $row['Id'];?>
             <a href="product-details.php?Id=<?php echo  $row['Id']; ?>"> <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Images']); ?>" style="height:230px; width:360px;" class="img-responsive"/></a>
              <div class="down-content">
                <h4><?php echo $row['Brand']," ",$row['Phonename']?> </h4>
                <div style="margin-bottom:10px;">
                  <span style="font-size:20px;">
                    Rs. <?php echo $row['Price']?>
                  </span>
                  <br>
                  <?php if($row['Status'] == 'Available') {?>
                     <p style="font-size:20px;">Item In Stock</p>
                  <?php }else { ?>
                    <p style="color:red; font-size:20px;">Out Of Stock</p>
                  <?php }?>
                  </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                
              </div>
            </div>
            <br>
        </div>
        <?php } ?>
      </div>
      <!--
          <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
-->
        <br>
        <br>
        <br>
        <br>
    </div>
    <?php }else{ ?> 
    <p class="status error"></p> 
<?php } ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                     
          cleared[t.id] = 1;  
          t.value='';       
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>

