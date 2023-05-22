<?php
use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);

$id = $_GET['id'];
$note = $db->query("select * from notes where id = :id", [
            'id'        => $id
        ])->findOrFail();

$currentUserId = 2;

authorize((int)$note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading'   => 'Notes',
    'note'    => $note
]);