<?php

$merchantId="A2Y9GK43OF1KNK"; // SellerID
$accessKey="AKIAJVKDDV4BYP2RLVGQ"; // MWS Access Key
$secretKey="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"; // MWS Secret Key
$lwaClientId ="amzn1.application-oa2-client.82f1e6f367c94bcb9e3facda170428bf"; // Login With Amazon Client ID

/* Add http:// or https:// before your Return URL
* The webpage of your site where the buyer should be redirected to after the payment is made
* In this example you can link it to the Result.php, which checks for the success or failure of the payment
* and routes it to the appropriate URL defined
*/
$returnURL   = "http://yourdomain.com/Success.php";
$cancelReturnURL = "http://yourdomain.com/Cancel.php";

?>
