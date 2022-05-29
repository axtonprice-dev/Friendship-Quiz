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
    $questions = '
{ 
    "0": { 
        "title": "What is ' . $_GET["name"] . '\'s favorite food?", 
        "options": { 
            "item1": "Tacos", 
            "item2": "Pizza", 
            "item3": "Burgers" 
        }, 
        "answerkey": "item1" 
    }, 
    
    "1": { 
        "title": "What is ' . $_GET["name"] . '\'s favorite movie?", 
        "options": {
            "item1": "Jaws", 
            "item2": "Back to The Future", 
            "item3": "Top Gun" 
        }, 
        "answerkey": "item3" 
    },
    "2": { 
        "title": "What is ' . $_GET["name"] . '\'s favorite music genre?", 
        "options": {
            "item1": "Modern Pop", 
            "item2": "Heavy Metal", 
            "item3": "Country" 
        }, 
        "answerkey": "item1" 
    },
    "3": { 
        "title": "If ' . $_GET["name"] . '\'s meet a genie, what would be ' . $_GET["name"] . '\'s wish?", 
        "options": {
            "item1": "1 million dollars", 
            "item2": "Beautiful wife/Handsome Husband", 
            "item3": "To be the king of the world", 
            "item4": "To live in a mansion"
        }, 
        "answerkey": "item1" 
    },
    "4": { 
        "title": "Which fast food restaurant does ' . $_GET["name"] . ' prefer the most?", 
        "options": {
            "item1": "Five Guys", 
            "item2": "Nando\'s", 
            "item3": "McDonald\'s", 
            "item4": "KFC"
        }, 
        "answerkey": "item3" 
    },
    "5": { 
        "title": "Which pet does ' . $_GET["name"] . ' dream to have?", 
        "options": {
            "item1": "A Dog", 
            "item2": "A Rabbit", 
            "item3": "A Cat", 
            "item4": "A Hamster"
        }, 
        "answerkey": "item1" 
    },
    "6": { 
        "title": "Who would ' . $_GET["name"] . ' like to meet when ' . $_GET["name"] . ' dies?", 
        "options": {
            "item1": "JK. Rowling", 
            "item2": "Queen Elizabeth", 
            "item3": "John Lennon"
        }, 
        "answerkey": "item1" 
    },
    "7": { 
        "title": "What is ' . $_GET["name"] . '\'s favourite movie genre?", 
        "options": {
            "item1": "Romance", 
            "item2": "Action", 
            "item3": "Thriller", 
            "item4": "Comedy"
        }, 
        "answerkey": "item1" 
    },
    "8": { 
        "title": "What is ' . $_GET["name"] . '\'s favourite hobby?", 
        "options": {
            "item1": "Gym", 
            "item2": "Sleeping", 
            "item3": "Shopping", 
            "item4": "Swimming"
        }, 
        "answerkey": "item1" 
    },
    "9": { 
        "title": "What drink does ' . $_GET["name"] . '\'s drink most often?", 
        "options": {
            "item1": "Tea", 
            "item2": "Coffee", 
            "item3": "Energy Drinks", 
            "item4": "Milkshakes"
        }, 
        "answerkey": "item2" 
    },
    "10": { 
        "title": "What is ' . $_GET["name"] . '\'s dream holiday location?", 
        "options": {
            "item1": "Paris", 
            "item2": "Venice", 
            "item3": "Bahamas", 
            "item4": "New York"
        }, 
        "answerkey": "item4" 
    }
}';
    $creation  = '{ "user_name": "' . $_GET["name"] . '", "creator_ip": "' . $_SERVER["REMOTE_ADDR"] . '", "creation_date": "' . date("Y-m-d H:i:s") . '" }';
    file_put_contents("../../local-storage/quiz-" . $id . "/quiz-data/questions.json", $questions);
    file_put_contents("../../local-storage/quiz-" . $id . "/quiz-data/creation.json", $creation);
}

setcookie("quizId", $id, mktime(0, 0, 0, 12, 31, 2030));  /* expire in 1 hour */
setupDirectory($id);
setupFileData($id);
header("Location: ../../createquiz");
