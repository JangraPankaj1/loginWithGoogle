<?php
//session_start();
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('909727360002-4kloi900oc5qu2r38hlnsg1m83cvnoij.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/thapaLoginGoogle/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
//echo "<pre>";print_r($google_client);die();

?>