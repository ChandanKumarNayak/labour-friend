<?php

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('454923d74cf382d2623f8d6f2d48ad18', '606b8583d43c649ca5bb3170cb83882f', 'https://www.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Hirer Registration Fee",
        "amount" => "49",
        "send_email" => false,
       
        "allow_repeated_payments"=> false,
        "redirect_url" =>
"https://labourfriend.in/hirer/thanks.php",
        "webhook"=> "https://labourfriend.in/hirer/webhook.php"
        ));
  $pay_url=$response['longurl'];
 header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}