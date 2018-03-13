<?php
// Account details
$apiKey = urlencode('REkI1jzUxMs-G2GVyzIXY43Q62IoqAiTNd7ChvKZaU');

// Message details
$numbers = array(8299532317);
$sender = urlencode('TXTLCL');
$otp=rand(1000,100000000);
$message = rawurlencode('Your OTP for verifiction '.$otp);
print_r($numbers);
$numbers = implode(',', $numbers);
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arr=json_decode($response,TRUE);
print_r($arr);
// Process your response here
echo $response;
?>