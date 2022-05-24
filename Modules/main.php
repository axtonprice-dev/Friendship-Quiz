<?php
$page = $_SERVER['SCRIPT_NAME'];

if ($page == "/") {
    require("public/index.blade.php");
}
if ($page == "/createquiz") {
    require("public/createquiz.blade.php");
}
if ($page == "/quiz") {
    require("public/viewquiz.blade.php");
}
