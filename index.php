<?php
error_reporting(0); // Disable errors

/* Application Configuration */
$config = array(
    "site_name" => "Friendship Quiz",
    "site_name_long" => "The Friendship Quiz",
    "site_desc" => "❓ How well do your friends really know you? Create your own quiz to find out!",
    "site_title" => "⭐ Create a customized quiz to test how well your friends know you!",
);
$variables = array(
    "date_year" => date("Y"),
    "date_month" => date("M"),
    "client_ip" => $_SERVER["HTTP_CF_CONNECTING_IP"] || $_SERVER["REMOTE_ADDR"],
    "urldata_id" => $_GET["id"]
);

/* Initialise Application */
require("modules/main.php");
?>