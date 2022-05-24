<?php
$page = $_SERVER['SCRIPT_NAME'];

if ($page == "/") {
    echo require("public/index.blade.php");
}
if ($page == "/createquiz") {
    echo require("public/createquiz.blade.php");
}
if ($page == "/quiz") {
    echo require("public/viewquiz.blade.php");
}
