<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://raw.githubusercontent.com/ItzNoneHxD/iykh-jagoan/main/new.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);
header('Content-Type: text/html');
echo $response;
?>
