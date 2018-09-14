<?php
/* create token to prevent cross-site request forgery */
session_start();
$_SESSION["token"] = md5(uniqid(mt_rand(), true));
?>
<html>

<head>

    <!-- custom css -->
    <link href="css/amazonpay.css?ver=1.1" rel="stylesheet" type="text/css">
   
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type='text/javascript' src="https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 --><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- 
    <script type='text/javascript' src="https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

 -->
</head>

<body>

    <input type="hidden" name="csrf" id="csrf" value="<?php echo $_SESSION["token"]; ?>">
    
    <div class="container">

<form>

        <div class="row justify-content-center title">
            Donate
        </div>

        <div class="row justify-content-center">
            <div class="input col-10 col-sm-8 col-md-4 justify-content-center">
                <input class="form-control " type="text" id="OneSelect" placeholder="Donation amount"/>
            </div>
        </div>

       
        <div class="row justify-content-center">
            <div class="input col-10 col-sm-8 col-md-4" >
                <input class="form-control " type="text" id="Note" placeholder="Memo"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="input col-12" >
            <div align="middle" style="border-radius:20px;"  id="AmazonPayButton"/>
        </div>
</form>
         
    </div>

    <script type="text/javascript">

        OffAmazonPayments.Button("AmazonPayButton", "A2Y9GK43OF1KNK", {

            type: "hostedPayment",

            hostedParametersProvider: function(done) {

                $.getJSON("ExpressSignature.php", {
                    amount: parseInt($("#OneSelect").val()),
                    currencyCode: 'USD',
                    sellerNote: $("#itemname").text() + ' NOTE: ' + $("#Note").val(),
                    scope: 'payments:billing_address',                   
                    csrf:$("#csrf").val()

                }, function(data) {
                    done(data);
                })
            },
            onError: function(errorCode) {
                console.log(errorCode.getErrorCode() + " " + errorCode.getErrorMessage());
            }
        });
    </script>
</body>
<html>
