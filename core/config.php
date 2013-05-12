<?
// Donation account
$don_faucet = "FaucetDonations";

// RPC Settings
$btclogin = array("username" => "username", "password" => "pass",
    "host" => "localhost", "port" => "7913");
    //use port 7913 because 7912 is the peer finding port

// DB Settings
$sqlogin = array("host" => "localhost", "dbname" => "faucet", "username" =>
    "root", "password" => "pass");

// sending settings ..
$minleft = 0.01; // minimum left on account
$minsend = 0.5; // minimum allowed to send at a time

// NOT IMPLEMENTED YET ...
$minfee = 0.0001; // min. hard fee on all transactions
$feeperc = 0.5; // fee for outgoing transactions in percentage
$fee_account = "KgHL1urqk1roN0eX67sC"; // set to your own KEY to recieve fee�s there


$adscaptchaID = 5186;
$adspubkey = "18d18920-61a8-4f24-a2dd-5c64806f1f2c";
$adsprivkey = "2d1481af-79b0-4ff1-aa33-0e4a8bacf63a";
?>
