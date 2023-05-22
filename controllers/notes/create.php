<?php
use Core\Database;
use Core\Validator;

$config = require base_path("config.php");
$db = new Database($config['database']);

$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = isset($_POST['body']) ? $_POST['body'] : "";

    if(!Validator::string($body, 10, 10000)) {
        $errors['body'] = "The body field requires 10 to 10000 character long.";
    }

    if (empty($errors)) {
        $currentUserId = 2;
        $note = $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [ //preventing sql injection using prepare statement
            'body'      => $body,
            'user_id'   => $currentUserId
        ]);
    }
}

view("notes/create.view.php", [
    'heading'   => 'Create Note',
    'errors'    => $errors
]);
