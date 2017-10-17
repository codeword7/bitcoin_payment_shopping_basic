<?php

//database login info
$dbuser = "root";
$dbpw = "";
$db = "payment";

//blockchain info API Key and your xpub BIP32 public key
$api_key = "6df64ff7-312b-4e83-b6f3-627674fbd725";
$xpub = "xpub6CEq83gj45EnwViGEiSGEq8Ng18vLRSPKTXdMHZxegtWQ2P6axdZYkFppvY6j8xRXho9sy2wXywxazpK5mCvKEDNVQYgJRx8p7AKCLJzAby";
$secret = "ilvmymom2mch"; //this can be anything you want

//Specific to you the store owner
$storeName = "Shop Now";
$rootURL = "http://pintous.com/shop"; //example https://mysite.org  or http://yourhomepage.com/store
$yourEmail = "your@email.com";  //email notifications will be sent to this email when a new order is placed

//pw to access the admin pages
$adminPW = "ilvmymom2mch"; 

//connect to the database
$conn = mysqli_connect("localhost", $dbuser, $dbpw, $db);
if(!$conn){
  die('Connection Error: '.mysqli_errno());
}

?>