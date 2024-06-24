<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Single Note';
$currentUserId = 3;


$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();


authorized($note['user_id'] === $currentUserId);

require_once "views/note.view.php";