<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

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

<title>Insert title here</title>
<style>
	.myclass
	{
		margin:0 auto;
	}
	label
	{
		font-size: 20px;
		font-weight: bold;
	}
</style>
</head>
<body>
	    <div class="page-heading header-text">
			<div class="container">
			  <div class="row">
				<div class="col-md-12">
				  <h1>ADD Products</h1>
				  <span></span>
				</div>
			  </div>
			</div>
		  </div>
		<div class="container" style="width: 50%;">
			<br>
			<form action="InsertItems.php" method="post" enctype="multipart/form-data">
					<div class="form-group" style="width: 90%;">
						<div class="container-fluid">
							<label>Phone Name:</label> 
							<input type="text" name="pname"  id="pname" class="form-control input-lg" placeholder="Enter Phone Name">
						</div>
						<div class="container-fluid">
							<label>Brand:</label> 
							<input type="text" name="brand" id="brand" class="form-control input-lg" placeholder="Enter Brand">
						</div>
						<div class="container-fluid">
							<label>Enter Price:</label> 
							<input type="text" name="price" id="price" class="form-control input-lg" placeholder="Enter Price">
						</div>
						<div class="container-fluid">
						<label>Select Image</label>
						<input type="file" name="image" id="image" class="form-control input-lg" placeholder="Select Image">
					</div>
					<div class="container-fluid">
						<label>Select Category</label>
						<select class="form-control" name="categories">
                      <option value="Phones">Phones</option>
                      <option value="Refrigerator">Refrigerator</option>
					  <option value="Teleivison">Teleivison</option>
					  <option value="Washing Machine">Washing Machine</option>
					  <option value="Air Condition">Air Condition</option>
                    </select>
					</div>
						<br>
						<div class="container">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<input type="submit" name="submit" class="btn btn-primary"  style="font-size: 20px;" value="Add Product">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="reset" class="btn btn-danger" style="font-size: 20px;">Reset
							</button>
						</div>
					</div>
				</form>
			</div>
</body>
</html>
