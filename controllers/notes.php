<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Main Notes';

$notes = $db->query("select * from notes where user_id = 1")->get();

require_once "views/notes.view.php";