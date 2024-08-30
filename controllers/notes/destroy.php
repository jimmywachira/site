<?php 

use Core\App;
use Core\Database;
use Core\Responce;

#$config = require base_path('config.php');
#$db = new Database($config['database']);
$db = App::container()->resolve(Database::class);

$currentUserId = 1;
$id = 1 ; # $_GET['id'];

$query = "select * from notes where id = :id";
$note = $db->query($query,['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("delete from notes where id = :id", [
'id' => $_POST['id']]);

header('location: /notes');
exit();