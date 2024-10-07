<?php 

use Core\App;
use Core\Database;
use Core\Responce;

$db = App::resolve(Database::class);

$currentUserId = 1;
$id = $_GET['id'];

$query = "select * from notes where id = :id";
$note = $db->query($query,['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId); 

view('notes/show.view.php',[
        'heading' => 'note',
        'note' => $note]);