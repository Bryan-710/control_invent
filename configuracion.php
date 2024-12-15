<?php
require_once 'vendor/autoload.php';

$clientID = '1014322041588-db94t05ipnrlm5eejnsndp3tfb0v5dkq.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/control-inventariosTT/home.php';

// create Client to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


?>