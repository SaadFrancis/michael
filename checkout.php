<?php 


require __DIR__.'/vendor/autoload.php';

$secret_key = "sk_test_51NuutvIEUgyD1NX5r2SASWpGJPIhlaUbwI6hRAtVIQA1acGRBydohPK2hqLerKdWMDgRfpPXuvzcfjJ2LsvezJSw00A6DUEXCD";
\Stripe\Stripe::setApiKey($secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/project-file/services.html?status=success",
    "cancel_url" => "https://yourwebsite.com/cancel",
    "line_items" => [
        [
        "quantity" => 1,
        "price_data" => [
            "currency" => "usd",
            "unit_amount" => 2000,
            "product_data" => [
                "name" => "Shirt",
            ],
        ],
    ],
],
    ]);

    http_response_code(303);
    header("Location: ".$checkout_session->url);

?>