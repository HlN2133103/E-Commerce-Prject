<?php 
// Include the database configuration file  
include_once 'DatabaseConfig.php'; 

if(isset($_POST['submit']))
{	 
	 $pname = $_POST['pname'];
	 $brand = $_POST['brand'];
     $price = $_POST['price'];
     $sta = 'Available';
     $category = $_POST['categories'];

     // If file upload form is submitted 
    $status = $statusMsg = ''; 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) 
    { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes))
        { 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

	        $sql = "INSERT INTO Items (Phonename,Brand,Price,Images,Status,Category) VALUES('$pname','$brand','$price','$imgContent','$sta','$category');";

                if (mysqli_query($db, $sql)) 
                {
                    header('location: products.php');
                } 
                else
                {

                }
        }
        else
        { 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }
}
else
{ 
     $statusMsg = 'Please select an image file to upload.'; 
} 
    mysqli_close($db);
    ?>
    
    