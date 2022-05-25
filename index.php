<?php
error_reporting(0); // Disable errors

/* Application Configuration */
$config = array(
    "site_name" => "Friend Quiz",
    "site_name_long" => "The True Friend Quiz",
    "site_desc" => "How well do your friends truly know you?",
    "site_title" => "Create a quiz to test how well your friends know you!",
);
$variables = array(
    "date_year" => date("Y"),
    "date_month" => date("M"),
    "client_ip" => $_SERVER["HTTP_CF_CONNECTING_IP"] || $_SERVER["REMOTE_ADDR"],
);

/* Initialise Application */
require("modules/main.php");

?>