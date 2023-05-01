<?php
require 'congfig.php';
//logout.php

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.

//redirect page to index.php
header('location:index.php');
session_destroy();

?>