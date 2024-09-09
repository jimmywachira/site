<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs
$errors = [];

if (!Validator::email($email)){
    $errors['email']= 'provide a valid email address';
}

if (!Validator::string($password)){
    $errors['password']= 'password is not correct';
}

if( !empty($errors)){
    return view('session/create.view.php', [
        'errors' => $errors]);
}

//check whether credentials matche
$query = "select * from users where email = :email";

$user = $db->query($query,['email' => $email])->find();

if($user){
    if(password_verify($password,$user['password'])){
        login(['email' => $email]);
        redirect('/');
}}

return view('session/create.view.php', [
    'errors' =>"no matching acc for tht email and password"]);