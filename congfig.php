<?php
include("db.php");
//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('144851248511-t2grnf0scj5ubuqc712c3q7ed4rq63cp.apps.googleusercontent.com');
// $google_client->setClientId('144851248511-t2grnf0scj5ubuqc712c3q7ed4rq63cp.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0s Redirect URI
$google_client->setRedirectUri('http://localhost/cv_maker/index.php');
// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
