<?php 
$product_name = $_POST['brand']." ".$_POST['pname'];  
$price = $_POST['Price'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

echo $_POST['email'];
echo  $_POST['phone'];

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_c2cff849d6b3c3ca0631aa738ca', 'test_73ef2540fc63dec45f3dd75f2bd','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://localhost/ASP/thankyou.php",
        ));

    $pay_ulr = $response['longurl'];

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>
