<?php
$app_name   = $_POST[“whatsapp”];
$sender     = $_POST[“sender”];
$message    = $_POST[“syg”];
$phone      = $_POST["phone"];
$group_name = $_POST["group_name"];

$response = array("reply" => "Hello $sender, we received your message $message.");
echo json_encode($response);
?>
