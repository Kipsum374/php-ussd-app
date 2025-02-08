<?php
//Reads the Variables
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == "") {
        //This is the first request after  con
        $response = "CON What  would you want to check\n";
        $response = "1- My Account No \n";
        $response = "2- My Phone Number ";
} else if ($text == "1") {
    // First Logic
 $response = "CON Choose Account info you want to view \n ";
 $response = "1. Acccount No \n";
 $response = "2. Account Balance";

} else if ($text == "2") {
    // Terminal Request
    $response = "END Your Phone Number is ".$phoneNumber;
} else if ($text == "1*1") {
    // Response if selected 1
    $accountNumber = "76LVC";

    // For the requested Terminal
    $response = "END Your Account Number Is ".$accountNumber;

} else if ($text = "1*2") {
    //Second response if selected 1
    $balance = "KES 14,000";

    //Terminal request for Balance response
    $response = "END Your Balnce is ".$balance;

}
//Echo Response To API
header('Content-type; text/plain');
echo $response

 
?>
