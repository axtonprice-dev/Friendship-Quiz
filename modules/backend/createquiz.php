<?php
if ($_GET["name"] == "") return header("Location: ../../");

function identificationGenerator($length = 8)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$id = identificationGenerator();

function setupDirectory($id)
{
    if (!is_dir("../../local-storage")) {
        mkdir("../../local-storage"); // Create storage dir
    }
    if (!is_dir("../../local-storage/quiz-" . $id)) {
        mkdir("../../local-storage/quiz-" . $id); // Create individual quiz dir
        mkdir("../../local-storage/quiz-" . $id . "/quiz-data/");
        mkdir("../../local-storage/quiz-" . $id . "/quiz-responses/");
        touch("../../local-storage/quiz-" . $id . "/quiz-data/questions.json");
        touch("../../local-storage/quiz-" . $id . "/quiz-data/creation.json");
    }
}

function setupFileData($id)
{
    $questions = '{ "0": { "title": "What is ' . $_GET["name"] . '\'s favorite food?", "options": { "item1": "Tacos", "item2": "Pizza", "item3": "Burgers" }, "answerkey": "item1" }}';
    $creation  = '{ "user_name": "' . $_GET["name"] . '", "creator_ip": "' . $_SERVER["REMOTE_ADDR"] . '", "creation_date": "' . date("Y-m-d H:i:s") . '" }';
    file_put_contents("../../local-storage/quiz-" . $id . "/quiz-data/questions.json", $questions);
    file_put_contents("../../local-storage/quiz-" . $id . "/quiz-data/creation.json", $creation);
}

setupDirectory($id);
setupFileData($id);
header("Location: ../../createquiz");