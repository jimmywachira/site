<?php 

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$id = 1 ; #$_GET['id'];
$query = "select * from notes where user_id = :id";

$notes = $db->query($query,['id' => $id])->get();

view('notes/index.view.php',['heading' => "my notes",
'notes' => $notes]);