<?php
error_reporting(0); // Disable errors

if(!isset($_COOKIE["quizId"])) header("Location: ../../");
if(!isset($_GET["path"])) header("Location: ../../");
if(!isset($_GET["data"])) header("Location: ../../");
if(!is_dir("../../local-storage/quiz-" . $_COOKIE["quizId"] . "/")) header("Location: ../../");

function getJsonLoad($path)
{
    $id = $_COOKIE["quizId"];
    return file_get_contents("../../local-storage/quiz-" . $id . "/$path");
}

echo getJsonLoad($_GET["path"]); // Return JSON payload