<?php

//database login info
$dbuser = "root";
$dbpw = "";
$db = "";

//blockchain info API Key and your xpub BIP32 public key
$api_key = " "; //your API key
$xpub = " "; // your xpub of blockchain
$secret = "ilvmymom2mch"; //this can be anything you want

//Specific to you the store owner
$storeName = "Shop Now";
$rootURL = ""; //example https://mysite.org  or http://yourhomepage.com/store
$yourEmail = "your@email.com";  //email notifications will be sent to this email when a new order is placed

//pw to access the admin pages
$adminPW = "ilvmymom2mch"; 

//connect to the database
$conn = mysqli_connect("localhost", $dbuser, $dbpw, $db);
if(!$conn){
  die('Connection Error: '.mysqli_errno());
}

?>
