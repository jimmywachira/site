<?php 

use Core\App;
use Core\Database;
use Core\Responce;

$db = App::container()->resolve(Database::class);

$currentUserId = 1;
$id = $_POST['id'];

$query = "select * from notes where id = :id";
$note = $db->query($query,['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("delete from notes where id = :id", [
'id' => $_POST['id']]);

header('location: /notes');
exit();