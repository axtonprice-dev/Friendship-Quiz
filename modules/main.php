<?php
/* Variables and Functions */
$page = $_SERVER['REQUEST_URI'];
function render($path, $config, $vars)
{
    $file = file_get_contents("modules/$path"); // Get file data
    foreach ($config as $key => $value) $file = str_replace("%[$key]%", $value, $file); // Rewrite variables
    foreach ($vars as $key => $value) $file = str_replace("([$key])", $value, $file); // Rewrite variables
    echo $file; // Return and render rewritten file
}

/* Render Files from URL */
if ($page == "/") {
    render("public/index.blade.php", $config, $variables);

} else if ($page == "/createquiz") {
    render("public/createquiz.blade.php", $config, $variables);

} else if ($page == "/takequiz") {
    render("public/takequiz.blade.php", $config, $variables);

} else {
    render("public/404.aspx", $config, $variables);

}
