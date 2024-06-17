<?php

$sql = new SQL($config['SQL']);

$heading = "Note";

$id = $_GET["id"];

$notes = $sql->query('select * from notes where user_id = 1', [
    'user' => 1,
    'id' => $_GET['id'],
])->findOrFail();

if (!$note) {
    abort();
}

$userId = 1;

if ($note['user_id'] !== $userId) {
    abort(403);
}

require "note.view.php";